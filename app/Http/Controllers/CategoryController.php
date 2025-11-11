<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of active categories.
     */



    public function getData()
    {
        $categories = Category::active()->orderBy('sort_order')->get();
        return $categories;
    }

    //public function index()
    //{
    //    $categories = Category::active()
    //        ->orderBy('sort_order')
    //        ->get();

    //    return view('partials.categories', compact('categories'));
    //}


    /**
     * Store a newly created category.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:categories,slug',
            'image' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $category = Category::create($validated);

        return response()->json([
            'message' => 'Category created successfully!',
            'data' => $category,
        ]);
    }

    /**
     * Update the specified category.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:categories,slug,' . $category->getAttribute('id'),
            'image' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'active' => 'boolean',
            'sort_order' => 'integer',
        ]);

        $category->update($validated);

        return response()->json([
            'message' => 'Category updated successfully!',
            'data' => $category,
        ]);
    }

    /**
     * Remove the specified category.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json(['message' => 'Category deleted successfully!']);
    }
}
