<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function user($id)
    {
        $user  = User::find($id);
        return view('user', ['user' => $user]);
    }

    public function post($id)
    {
        // $user  = User::find($id);
        $post  = Post::find($id);
        return view('post', ['post' => $post]);
    }
}
