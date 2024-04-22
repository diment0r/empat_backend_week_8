<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }

    public function getCategoryPosts($id) {
        $category = Category::with('posts')->findOrFail($id);
        return view('post.index', ['posts' => $category->posts]);
    }
}
