<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tag;

class TagController extends Controller
{
    public function tag(tag $tag){
        $posts = Tag::findOrFail($tag->id)->posts()->paginate(5);
        $detail_page = [
            $tag->lable,
        ];
        return view('post.list', compact('posts','detail_page'));
    }
}
