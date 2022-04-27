<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::create([
            'name' => 'Karamell',
            'username' => 'karamell',
            'email' => 'karamell_cowz@gmail.com',
            'password' => bcrypt('karamell')
        ]);

        // User::create([
        //     'name' => 'Cicin Owel',
        //     'email' => 'cicinowel@gmail.com',
        //     'password' => bcrypt('cicin')
        // ]);

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
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos officiis rerum cupiditate nulla est soluta laboriosam maxime, quisquam placeat ullam!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos officiis rerum cupiditate nulla est soluta laboriosam maxime, quisquam placeat ullam! Facere, aut accusantium laboriosam sunt pariatur architecto consequatur itaque dolores vitae corporis corrupti nobis fuga aperiam ut quibusdam tenetur? Eligendi fugit facilis officia modi similique nam quis excepturi temporibus quisquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quis eaque iste dolores incidunt dolorem ad placeat adipisci illum! Cupiditate?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos officiis rerum cupiditate nulla est soluta laboriosam maxime, quisquam placeat ullam!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos officiis rerum cupiditate nulla est soluta laboriosam maxime, quisquam placeat ullam! Facere, aut accusantium laboriosam sunt pariatur architecto consequatur itaque dolores vitae corporis corrupti nobis fuga aperiam ut quibusdam tenetur? Eligendi fugit facilis officia modi similique nam quis excepturi temporibus quisquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quis eaque iste dolores incidunt dolorem ad placeat adipisci illum! Cupiditate?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos officiis rerum cupiditate nulla est soluta laboriosam maxime, quisquam placeat ullam!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos officiis rerum cupiditate nulla est soluta laboriosam maxime, quisquam placeat ullam! Facere, aut accusantium laboriosam sunt pariatur architecto consequatur itaque dolores vitae corporis corrupti nobis fuga aperiam ut quibusdam tenetur? Eligendi fugit facilis officia modi similique nam quis excepturi temporibus quisquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quis eaque iste dolores incidunt dolorem ad placeat adipisci illum! Cupiditate?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos officiis rerum cupiditate nulla est soluta laboriosam maxime, quisquam placeat ullam!',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos officiis rerum cupiditate nulla est soluta laboriosam maxime, quisquam placeat ullam! Facere, aut accusantium laboriosam sunt pariatur architecto consequatur itaque dolores vitae corporis corrupti nobis fuga aperiam ut quibusdam tenetur? Eligendi fugit facilis officia modi similique nam quis excepturi temporibus quisquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quis eaque iste dolores incidunt dolorem ad placeat adipisci illum! Cupiditate?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
