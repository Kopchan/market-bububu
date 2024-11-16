<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function store(Request $request) {
        $category = Category::create($request->all());
    }
    public function show(Category $category) {
        return view('categories.show', compact('category'));
    }
    public function update(Request $request, Category $category) {
        $category->update($request->all());
    }
    public function edit(Category $category) {
        return view('categories.edit', compact('category'));
    }
    public function destroy(Category $category) {
        $category->delete();
    }
}
