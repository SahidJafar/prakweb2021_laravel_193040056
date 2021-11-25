<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


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
        "tittle" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        'active' => 'about',
        "name" => "Sahid Jafar",
        "email" => "sahid11.sj@gmail.com",
        "image" => "profile.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'tittle' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// middleware('guest') digunakan untuk user yang belum terauthenrifikasi
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// login dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// CRUD
Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Admin Category
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::get('/categories/{category:slug}',function(Category $category){
//     return view('posts', [
//         'tittle' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'author',
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });