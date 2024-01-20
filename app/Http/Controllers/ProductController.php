<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("add_product");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       $validated = $request->validate([
        'name'=> 'required|unique:products|max:255',
        'stock'=> 'required|numeric|min:1',
        'product_price' => 'required|numeric|min:1',
        'image_path' => 'nullable',
        'uploader_id' => 'required|exists:users,id|integer|min:1',
        'category_id' => 'required|exists:categories,id|integer|min:1'
       ]);

        Product::create($validated);

        return redirect('/')->with('addProductSuccess',  $validated['name'].' is added to list.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $validated = $request->validate(['id' => 'required|exists=products,id|numeric',
        'name'=> 'required|max:255',
        'stock'=> 'required|numeric|min:1',
        'product_price' => 'required|numeric|min:1',
        'image_path' => 'nullable',
        'uploader_id' => 'required|exists:users,id|integer|min:1',
        'category_id' => 'required|exists:categories,id|integer|min:1'
        ]);

        Product::update($validated);

        return redirect('/')->with('editProductSuccess',  $validated['name'].' is successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if(!$product){
            return redirect('/')->with('delProductFailed', $product['name'].' is not found.');
        }

        Product::destroy($id);

        return redirect('/')->with('delProductSuccess', $product['name'].' is successfully deleted');
    }
}
