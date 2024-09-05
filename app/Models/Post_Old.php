<?php

namespace App\Models;

class Post_Old
{

    private static $blog_posts = [
        [
            "title" => "Tutorial Minum Kopi yang Baik dan Benar",
            "slug" => "Tutorial-Minum-Kopi-yang-Baik-dan-Benar",
            "author" => "Taylor Otwel",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi voluptas aspernatur tempora ducimus ullam reiciendis voluptatibus sapiente ipsam molestias consequuntur voluptates obcaecati, dolores cum adipisci nulla quaerat ipsa facilis dolor laborum ex vel minima repellat aut. Consectetur aspernatur voluptatem architecto laudantium culpa excepturi unde, earum fuga, odio perspiciatis est sint praesentium. Tempora dolor voluptatem nesciunt molestias accusantium dicta? Pariatur eligendi sint harum, deserunt earum culpa eos veniam vitae officia distinctio iure enim velit repudiandae eveniet libero nostrum obcaecati. Ducimus aperiam culpa consequatur possimus inventore vitae harum quibusdam repudiandae veniam neque sapiente obcaecati nam est, fuga eveniet ipsam voluptates labore?"
        ],
        [
            "title" => "Membuat Website Blog dengan Laravel 8",
            "slug" => "Membuat-Website-Blog-dengan-Laravel-8",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi voluptas aspernatur tempora ducimus ullam reiciendis voluptatibus sapiente ipsam molestias consequuntur voluptates obcaecati, dolores cum adipisci nulla quaerat ipsa facilis dolor laborum ex vel minima repellat aut. Consectetur aspernatur voluptatem architecto laudantium culpa excepturi unde, earum fuga, odio perspiciatis est sint praesentium. Tempora dolor voluptatem nesciunt molestias accusantium dicta?"
        ],
        [
            "title" => "Belajar Laravel 8",
            "slug" => "Belajar-Laravel-8",
            "author" => "Benony Gabriel",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi voluptas aspernatur tempora ducimus ullam reiciendis voluptatibus sapiente ipsam molestias consequuntur voluptates obcaecati, dolores cum adipisci nulla quaerat ipsa facilis dolor laborum ex vel minima repellat aut. Consectetur aspernatur voluptatem architecto laudantium culpa excepturi unde, earum fuga, odio perspiciatis est sint praesentium. Tempora dolor voluptatem nesciunt molestias accusantium dicta? Pariatur eligendi sint harum, deserunt earum culpa eos veniam vitae officia distinctio iure enim velit repudiandae eveniet libero nostrum obcaecati. Ducimus aperiam culpa consequatur possimus inventore vitae harum quibusdam repudiandae veniam neque sapiente obcaecati nam est, fuga eveniet ipsam voluptates labore?"
        ]
    ];

    public static function all()
    {
        // return self::$blog_posts;
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {

        $posts = static::all();

        // $post = [];

        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere("slug", $slug);
    }
}
