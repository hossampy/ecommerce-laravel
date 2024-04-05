<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class   CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $categories = Category::query()->paginate(10);
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = new Category();
        $isUpdate = false;
        return view('category.form',compact('category' ,'isUpdate'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $category)
    {
        $formFields = $category->input();
        Category::create($formFields);

        return to_route('categories.index')->with('success', 'Category created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.index');
    }
}
