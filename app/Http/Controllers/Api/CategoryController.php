<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return response($categories);
    }
    public function store(CategoryRequest $request) {
        $category = Category::create($request->validated());
        return response($category, 201);
    }
    public function show(Category $category) {
        return response($category);
    }
    public function update(CategoryRequest $request, Category $category) {
        $category->update($request->validated());
        return response($category);
    }
    public function destroy(Category $category) {
        $category->delete();
        return response(null, 204);
    }
}
