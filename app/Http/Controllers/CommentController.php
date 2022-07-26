<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\comment;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{

    public function store(Request $request, Post $post)
    {

        $post->comments()->create([
            'message' => $request->message,
            'name' => $request->name ?? null,
            'user_id' => Auth::id() ?? null,
        ]);

        return redirect()->back();
    }
}
