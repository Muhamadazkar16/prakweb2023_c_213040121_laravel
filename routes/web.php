<?php

<<<<<<< HEAD

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
=======
use Illuminate\Support\Facades\Route;

>>>>>>> 819727428d8df42e2c9c7c832dc09ed41e724601
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
<<<<<<< HEAD
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});


Route::get('/about', function () {
    return view('about',[
        'title' => 'about',
        'active' => 'about',
        'name' => 'M Azka Ramadhan',
        'email' => 'M.Azka@gmail.com',
        'image' => 'azka.png'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)
->middleware('auth');
=======
    return view('home');
});

Route::get('/about', function () {
    return view('About', [
        "title" => "About",
        "name" => "Azka Ramadhan",
        "email" => "azkagaming@gmail.com",
        "image" => "azka.jpg"
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
            "author" => "Azka",
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
>>>>>>> 819727428d8df42e2c9c7c832dc09ed41e724601
