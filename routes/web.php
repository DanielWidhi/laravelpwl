<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['nama' => 'Daniel Widhi', 'title' => 'About']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    // dd($id);

    $post = Post::find($slug);
    // dd($post);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

// 1 /blog
//  2. buah artikel, judul dan isi
// 2. /contact
// email/social media
