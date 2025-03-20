<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get(
    '/',
    [UserController::class, 'index']
)->name('profiles.index');

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
    [PostController::class, 'post']
)->name('posts.show');