<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\comment;
use Illuminate\Foundation\Auth\User;


class CommentController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            'message'=>'required',
        ]);

        $input = $request->all();

        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        dd(request()->all());

    }
}
