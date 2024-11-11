<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about', ['nama' => 'Daniel Widhi']);
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

// 1 /blog
//  2. buah artikel, judul dan isi
// 2. /contact
// email/social media
