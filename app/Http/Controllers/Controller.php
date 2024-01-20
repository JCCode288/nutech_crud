<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Utils\ViewRoute;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        if(!Auth::check()){
            return redirect('login');
        }

        $products = Product::orderBy("created_at","desc")->paginate(5);

        return view(ViewRoute::$VIEW_NAME['HOME'], ['products'=> $products]);
    }
}
