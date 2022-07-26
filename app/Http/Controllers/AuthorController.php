<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function author(Author $author){
        $posts = Author::findOrFail($author->id)->posts()->paginate(5);
        $detail_page = [
            $author->user->full_name,
        ];
        return view('post.list', compact('posts','detail_page'));
    }
}
