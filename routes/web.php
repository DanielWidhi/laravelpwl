<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['nama' => 'Daniel Widhi', 'title' => 'About']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Daniel Widhi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, sed magni? Magnam, magni iure odit minus, et officia, exercitationem fuga deserunt quos labore explicabo officiis in suscipit nam recusandae? Vel.',
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Daniel Widhi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, sed magni? Magnam, magni iure odit minus.',
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    // dd($id);
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Daniel Widhi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, sed magni? Magnam, magni iure odit minus, et officia, exercitationem fuga deserunt quos labore explicabo officiis in suscipit nam recusandae? Vel.',
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Daniel Widhi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, sed magni? Magnam, magni iure odit minus.',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
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
