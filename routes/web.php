<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Herdin Hidayat', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Herdin Hidayat',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime voluptates et dolorum. Culpa, ad? At quaerat beatae saepe a. Omnis optio neque voluptatem quae modi, nobis ea placeat cum architecto.'
        ],
        [

            'title' => 'Judul Artikel 2',
            'author' => 'Herdin Hidayat',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime voluptates et dolorum. Culpa, ad? At quaerat beatae saepe a. Omnis optio neque voluptatem quae modi, nobis ea placeat cum architecto.'

        ]
    ]]);
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