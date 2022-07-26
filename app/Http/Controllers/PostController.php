<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('post.list', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.single', compact('post'));
    }
}
