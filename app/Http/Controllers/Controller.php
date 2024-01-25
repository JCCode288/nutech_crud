<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Utils\ViewRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function main(Request $request)
    {
        $search = $request->get('search');
        $categories = Category::all();
        $category_id = $request->input("category_id");

        if ($search) {
            $products = Product::where("name", 'ilike', '%' . $search . '%')->orderBy("created_at", "desc")->paginate(5);

            $data = [
                'products' => $products,
                'categories' => $categories,
                'nextPage' => $products->nextPageUrl(),
                'prevPage' => $products->previousPageUrl()
            ];

            return Inertia::render(ViewRoute::$VUE['DASH'], $data);
        }

        if ($category_id) {
            $products = Product::where("category_id", $category_id)->orderBy("created_at", "desc")->paginate(5);


            $data = [
                'products' => $products,
                'categories' => $categories,
                'nextPage' => $products->nextPageUrl(),
                'prevPage' => $products->previousPageUrl()
            ];

            return Inertia::render(ViewRoute::$VUE['DASH'], $data);
        }

        $products = Product::orderBy("created_at", "desc")->paginate(5);


        $data = [
            'products' => $products,
            'categories' => $categories,
            'nextPage' => $products->nextPageUrl(),
            'prevPage' => $products->previousPageUrl()
        ];

        return Inertia::render(ViewRoute::$VUE['DASH'], $data);
    }

    public function profilePage()
    {
        $user = Auth::user();

        return Inertia::render(ViewRoute::$VIEW_NAME['PROFILE'], ['user' => $user]);
    }
}
