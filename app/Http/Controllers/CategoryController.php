<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy("created_at","desc")->paginate(10);

        return view('categories', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        Category::create($validated);

        return redirect()->route('/categories')->with('addCategorySuccess', $validated['name'].' is successfully added to categories list.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);

        Category::destroy($category->id);

        return redirect('/categories')->route('')->with('delCategorySuccess', $category['name'].' is successfully deleted.');
    }
}
