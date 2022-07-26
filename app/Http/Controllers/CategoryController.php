<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category(Category $category){
        $posts = Category::findOrFail($category->id)->posts()->paginate(5);
        $detail_page = [
            $category->title,
        ];
        return view('post.list', compact('posts','detail_page'));
    }
}
