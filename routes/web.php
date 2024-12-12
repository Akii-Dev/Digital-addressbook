<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get(
    '/users',
    [UserController::class, 'index']
)->name('profiles.index');

Route::get(
    '/users/{id}',
    [UserController::class, 'user']
)->name('users.show');

Route::get(
    '/posts/{id}',
    [UserController::class, 'post']
)->name('posts.show');