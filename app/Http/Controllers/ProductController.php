<?php

namespace App\Http\Controllers;

use App\Exports\JsonExport;
use App\Models\Category;
use App\Models\Product;
use App\Utils\ViewRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view(ViewRoute::$VIEW_NAME['ADD_PRODUCT'], ['categories' => $categories]);
    }

    public function editPage(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return back()->with('errorNotFound', 'Product is not found. Are you sure there\'s the product?');
        }

        $categories = Category::all();

        return view(ViewRoute::$VIEW_NAME['EDIT_PRODUCT'], ['categories' => $categories, 'product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'stock' => 'required|numeric|min:1',
            'product_price' => 'required|numeric|min:1',
            'category_id' => 'required|exists:categories,id|integer|min:1',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:100'
        ]);

        $validated['uploader_id'] = Auth::getUser()->id;

        if ($request->hasFile('image')) {
            $image_path = self::storeImage($request, $validated);
            $validated['image_path'] = $image_path;
        }

        Product::create($validated);

        return redirect('/')->with('addProductSuccess',  $validated['name'] . ' is added to list.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeImage(Request $request,  $product): string
    {
        $path = 'products';

        if ($image_path = $product['image_path'] ?? null) {
            Storage::delete($image_path);
        }

        $image = $request->image->store($path);

        return $image;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|max:255',
            'stock' => 'required|numeric|min:1',
            'product_price' => 'required|numeric|min:1',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'category_id' => 'required|exists:categories,id|integer|min:1'
        ]);

        $product = Product::find($request->id);

        if (!$product) {
            return redirect('/')->with('errorNotFound', 'Product is not found.');
        }

        $validated['uploader_id'] = $product->uploader_id;
        $validated['image_path'] = $product->image_path;

        $image_path = self::storeImage($request, $validated);
        $validated['image_path'] = $image_path;

        $product->update($validated);

        return redirect('/')->with('editProductSuccess',  $validated['name'] . ' is successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect('/')->with('delProductFailed', $product['name'] . ' is not found.');
        }

        if ($product->image_path) {
            $op_status =  Storage::delete($product->image_path);

            if (!$op_status) {
                return back()->with('delProductFailed', 'Delete Image process failed.');
            }
        }

        $product->delete();

        return redirect('/')->with('delProductSuccess', $product['name'] . ' is successfully deleted.');
    }

    public function excel(Request $request)
    {
        $jsonData = json_decode($request->data, true);

        return Excel::download(new JsonExport($jsonData), 'excel-product-' . date('Y-m-d') . '.xlsx');
    }
}
