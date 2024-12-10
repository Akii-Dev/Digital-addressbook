<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = 1;
        return view('index', ['users' => $users]);
    }
}
