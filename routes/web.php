<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Herdin Hidayat', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);

    return view('post', ['title' => 'Singel Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {

    // $post = Post::find($id);

    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

// buat 2 route baru
// 1. /blog
// 2 buah artikel, judul dan isi
// 2. /contact
// email / social media

//lanjutnya sandika galih laravel 11 buat js 