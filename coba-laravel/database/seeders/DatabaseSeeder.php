<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

    //  User::create([
    //         'name' => 'Sahid Jafar',
    //         'email' => 'SahidJafar@gmail.com',
    //         'password' => bcrypt('12345')
    //     ]);

    //     User::create([
    //         'name' => 'Sandhika Galih',
    //         'email' => 'Sandhika@gmail.com',
    //         'password' => bcrypt('12345')
    //     ]);

    User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        
        // Post::create([
        // //     'title' => 'Judul Pertama',
        // //     'slug' => 'judul-pertama',
        // //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        // //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid beatae ducimus quae fuga minus, omnis voluptates itaque libero quisquam ullam vel perferendis deleniti, enim esse et repellat mollitia inventore! Sequi aperiam vitae eos. Fugit deleniti molestiae maxime assumenda sunt fugiat ex est, magni mollitia laboriosam similique rem officia corrupti at aspernatur quo atque explicabo ab nulla quibusdam optio corporis soluta eaque harum! Veritatis aperiam quaerat, voluptates enim quidem officia a repudiandae ut sint vel quas odio, necessitatibus ratione minima rem tenetur! Laborum dolorum alias aperiam excepturi, dolorem provident id suscipit delectus eligendi corporis itaque laudantium iusto cum quia vel deleniti.',
        // //     'category_id' => 1,
        // //     'user_id' => 1
        // // ]);
        // // Post::create([
        // //     'title' => 'Judul Ke dua',
        // //     'slug' => 'judul-ke-dua',
        // //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        // //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid beatae ducimus quae fuga minus, omnis voluptates itaque libero quisquam ullam vel perferendis deleniti, enim esse et repellat mollitia inventore! Sequi aperiam vitae eos. Fugit deleniti molestiae maxime assumenda sunt fugiat ex est, magni mollitia laboriosam similique rem officia corrupti at aspernatur quo atque explicabo ab nulla quibusdam optio corporis soluta eaque harum! Veritatis aperiam quaerat, voluptates enim quidem officia a repudiandae ut sint vel quas odio, necessitatibus ratione minima rem tenetur! Laborum dolorum alias aperiam excepturi, dolorem provident id suscipit delectus eligendi corporis itaque laudantium iusto cum quia vel deleniti.',
        // //     'category_id' => 1,
        // //     'user_id' => 1
        // // ]);
        // // Post::create([
        // //     'title' => 'Judul Ke Tiga',
        // //     'slug' => 'judul-ke-tiga',
        // //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        // //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid beatae ducimus quae fuga minus, omnis voluptates itaque libero quisquam ullam vel perferendis deleniti, enim esse et repellat mollitia inventore! Sequi aperiam vitae eos. Fugit deleniti molestiae maxime assumenda sunt fugiat ex est, magni mollitia laboriosam similique rem officia corrupti at aspernatur quo atque explicabo ab nulla quibusdam optio corporis soluta eaque harum! Veritatis aperiam quaerat, voluptates enim quidem officia a repudiandae ut sint vel quas odio, necessitatibus ratione minima rem tenetur! Laborum dolorum alias aperiam excepturi.',
        // //     'category_id' => 2,
        // //     'user_id' => 1
        // // ]);
        // // Post::create([
        // //     'title' => 'Judul Ke Empat',
        // //     'slug' => 'judul-ke-empat',
        // //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        // //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid beatae ducimus quae fuga minus, omnis voluptates itaque libero quisquam ullam vel perferendis deleniti, enim esse et repellat mollitia inventore! Sequi aperiam vitae eos. Fugit deleniti molestiae maxime assumenda sunt fugiat ex est, magni mollitia laboriosam similique rem officia corrupti at aspernatur quo atque explicabo ab nulla quibusdam optio corporis soluta eaque harum! Veritatis aperiam quaerat, voluptates enim quidem officia a repudiandae ut sint vel quas odio, necessitatibus ratione minima rem tenetur! Laborum dolorum alias aperiam excepturi.',
        // //     'category_id' => 2,
        // //     'user_id' => 2
        // // ]);
    }
}
