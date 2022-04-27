<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Blog Pertama",
            "slug" => "blog-pertama",
            "author" => "Karamell",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in numquam hic eius dolore eos, reiciendis quidem, nesciunt velit atque quos esse quasi iusto blanditiis corporis fugiat. Architecto omnis rem vero, minus quod, saepe quis ipsam laboriosam culpa, illum in cum ipsum. Molestias soluta quia a nemo, dolores corrupti laboriosam accusantium eligendi expedita eius sequi. Harum at, impedit, accusantium culpa eveniet, neque rerum magni omnis illum dolorem iusto sapiente? Dolor."
        ],
        [
            "title" => "Blog Kedua Karamell ",
            "slug" => "blog-kedua",
            "author" => "Kim V",
            "body" => "LLorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti provident voluptate voluptates dignissimos natus placeat eius corporis. Nulla tempora eligendi a libero nam doloremque animi, corrupti voluptatem voluptates delectus quod sapiente praesentium laborum et rem temporibus tempore iusto totam facilis natus dolorum sunt quis provident nesciunt! Quae sequi laboriosam possimus unde ipsam inventore, rerum aliquam repellendus suscipit quisquam ab cum illo adipisci dolorem vero, nesciunt magnam repudiandae. Consectetur delectus maiores soluta quaerat doloremque, non veritatis nostrum repellat velit, neque vitae."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

    }

}
