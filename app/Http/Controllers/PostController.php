<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('posts', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('show', compact('post'));
    }
}
