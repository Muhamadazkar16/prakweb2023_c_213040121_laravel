<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Azka Ramadhan",
        "email" => "ramadhanazka67@gmail.com",
        "image" => "azka.png"
    ]);
});




Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-Post Pertama",
            "author" => "Azka",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corrupti maxime, quibusdam quidem, non temporibus sint consequatur repellat assumenda laborum quasi explicabo officiis quis iusto? Odit doloremque aperiam neque nulla."
        ],
    ];

    return view('Posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});





//Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-Post Pertama",
            "author" => "Juan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corrupti maxime, quibusdam quidem, non temporibus sint consequatur repellat assumenda laborum quasi explicabo officiis quis iusto? Odit doloremque aperiam neque nulla."
        ],
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
