<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('categories')->get();
        return view('post.index', ['posts' => $posts]);
    }
 
    public function getPost($id) {
        $post = Post::with('categories')->findOrFail($id);
        return view('post.post', ['post' => $post]);
    }
}
