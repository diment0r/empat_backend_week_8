<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->middleware('auth')->name('dashboard');

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'registerForm')->middleware('guest')->name('register');
    Route::get('/login', 'loginForm')->middleware('guest')->name('login');
    Route::get('/logout', 'logout')->name('logout');
    
    Route::post('register', 'register')->middleware('guest');
    Route::post('login', 'login')->middleware('guest');
});

Route::controller(PostController::class)->group(function() {
    Route::get('/posts', 'index')->middleware('auth')->name('posts');
    Route::get('/post/{id}', 'getPost')->middleware('auth')->name('post');
});

Route::controller(CategoryController::class)->group(function() {
    Route::get('/categories', 'index')->middleware('auth')->name('categories');
    Route::get('/category/{id}', 'getCategoryPosts')->middleware('auth')->name('category');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/users', 'index')->middleware('auth')->name('users');
    Route::get('/user/{id}', 'getUserPosts')->middleware('auth');
});