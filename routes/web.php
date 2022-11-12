<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'risqul',
        'email' => 'kikiqullah@gmail.com',
        'image' => 'risqull.jpg'
    ]);
});

//all post page
Route::get('/posts', [PostController::class, 'index']);

// single post page
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registration', [RegistrationController::class, 'index'])->middleware('guest');
Route::post('/registration', [RegistrationController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'active' => 'dashboard',
    ]);
})->middleware('auth');

Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

/*  ------------------- replace using model query on Post.php -------------------

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts,
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
        'active' => 'post'
    ]);
});
 ------------------- replace using model query on Post.php ------------------- */