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
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul post-pertama",
            "author" => "Sahid Jafar",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem."
        ],
    
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul post-kedua",
            "author" => "Acep",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem."
        ],
        ];
    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug){

    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul post-pertama",
            "author" => "Sahid Jafar",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem."
        ],
    
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul post-kedua",
            "author" => "Acep",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem."
        ],
        ];

        $new_post = [];
        foreach($blog_posts as $post){
            if($post["slug"] == $slug){
                $new_post = $post;
            }
        }
    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});