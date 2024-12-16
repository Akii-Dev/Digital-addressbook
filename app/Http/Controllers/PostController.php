<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post($id)
    {
        $post  = Post::find($id);
        return view('post', ['post' => $post]);
    }
}
