<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul post-pertama",
            "author" => "Sahid Jafar",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem."
        ],
    
        [
            "tittle" => "Judul Post Sahid",
            "slug" => "judul post-kedua",
            "author" => "Acep",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis neque sit, mollitia earum dicta reprehenderit vel fuga soluta possimus libero non recusandae eligendi alias atque molestias? Accusamus eaque tempore quidem."
        ],
    ];
    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] == $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
