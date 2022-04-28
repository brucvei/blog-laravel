<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'posts' => Post::latest()->with('category')->get()
    ]);
});

Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/categoria/{category:slug}', function (Category $category) {
    return view('welcome', [
        'posts' => $category->posts->load(['category', 'author'])
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('welcome', [
        'posts' => $author->posts->load(['category', 'author'])
    ]);
});
