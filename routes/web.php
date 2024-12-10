<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['nama' => 'andika suyandra', 'title' => 'About']);
});

// Rute Blog Baru dengan Dua Artikel
Route::get('/posts', function () {
    return view('posts', ['title' => 'blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Andika Suyandra',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, ipsam? Libero culpa
            soluta nisi deserunt
            temporibus, quaerat rerum, ab laborum dolor unde dolore repellendus, explicabo architecto quasi autem quam
            beatae.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Andika Suyandra',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint iure, in fugit
            perspiciatis error blanditiis nostrum, quae reprehenderit, voluptates facilis temporibus minus dolor earum?
            Ea dignissimos provident ut animi a?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Andika Suyandra',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, ipsam? Libero culpa
            soluta nisi deserunt
            temporibus, quaerat rerum, ab laborum dolor unde dolore repellendus, explicabo architecto quasi autem quam
            beatae.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Andika Suyandra',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint iure, in fugit
            perspiciatis error blanditiis nostrum, quae reprehenderit, voluptates facilis temporibus minus dolor earum?
            Ea dignissimos provident ut animi a?'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Rute Kontak Baru
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
