<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        // return $categories;
        return view("category.index", compact('categories'));
    }

    public function create()
    {
        return view("category.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required|max:255|string",
            "description" => "required|max:255|string",
            "is_active" => "sometimes",
        ]);

        Category::create([
            "name" => $request->name,
            "description" => $request->description,
            "is_active" => $request->is_active == true ? 1 : 0,
        ]);

        return redirect("categories/create")->with("status", "Category created");
    }

    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        return view("category.edit", compact("category"));
    }

    public function update(Request $request, int $id)
    {
        $this->validate($request, [
            "name" => "required|max:255|string",
            "description" => "required|max:255|string",
            "is_active" => "sometimes",
        ]);

        Category::findOrFail($id)->update([
            "name" => $request->name,
            "description" => $request->description,
            "is_active" => $request->is_active == true ? 1 : 0,
        ]);

        return redirect()->back()->with("status", "Category updated");
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    
    return redirect()->back()->with("status", "Category deleted");
}}