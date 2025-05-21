<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Annas Nurdin',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ab quo non mollitia suscipit corrupti, in sapiente explicabo, perferendis sed eligendi nihil aliquam doloribus fugiat aspernatur officiis eospossimus sunt.',
        ],
        [
            'id' =>2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Annas Nurdin',
            'body' => 'Lorem ipsum dolor, di ab quo non mollitia suscipit corrupti, in sapiente explicabo, perferendis sed eligendi nihil aliquam doloribus fugiat aspernatur officiis eospossimus sunt.',
        ],
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Annas Nurdin',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ab quo non mollitia suscipit corrupti, in sapiente explicabo, perferendis sed eligendi nihil aliquam doloribus fugiat aspernatur officiis eospossimus sunt.',
        ],
        [
            'id' =>2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Annas Nurdin',
            'body' => 'Lorem ipsum dolor, di ab quo non mollitia suscipit corrupti, in sapiente explicabo, perferendis sed eligendi nihil aliquam doloribus fugiat aspernatur officiis eospossimus sunt.',
        ],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about',['title' => 'About Page']);
});
Route::get('/contact', function () {
    return view('contact',['title' => 'Contact Page']);
});
