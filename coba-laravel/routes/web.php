<?php

use Illuminate\Support\Facades\Route;

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
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Sahid Jafar",
        "email" => "sahid11.sj@gmail.com",
        "image" => "profile.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts', [
        "tittle" => "Posts"
    ]);
});