<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('users')->paginate(5);

        return view('home', ['posts' => $posts]);
    }
    public function show($id)
    {
        $post = Post::find($id);

        return view('home',compact('post'));
    }
}
