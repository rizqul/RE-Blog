<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => 'first post',
            'slug' => 'first-post',
            'author' => 'risqullah',
            'body' => '
       Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam fugit delectus sequi nostrum iste ab iure temporibus sit, voluptas hic aperiam dolorem quia possimus quisquam eveniet. Commodi neque sint dolores necessitatibus repellat natus sapiente iure ducimus autem dignissimos, vero sunt maxime nesciunt quia adipisci minus quam tempore voluptas numquam et temporibus possimus illo. Accusantium assumenda architecto perferendis a atque tenetur sed dignissimos ullam temporibus. Iure incidunt suscipit'
        ],
        [
            'title' => 'second post',
            'slug' => 'second-post',
            'author' => 'risqullah',
            'body' => '
       Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam fugit delectus sequi nostrum iste ab iure temporibus sit, voluptas hic aperiam dolorem quia possimus quisquam eveniet. Commodi neque sint dolores necessitatibus repellat natus sapiente iure ducimus autem dignissimos, vero sunt maxime nesciunt quia adipisci minus quam tempore voluptas numquam et temporibus possimus illo. Accusantium assumenda architecto perferendis a atque tenetur sed dignissimos ullam temporibus. Iure incidunt suscipit nulla. Veritatis, odit minus nemo deleniti accusamus excepturi dolorem nisi inventore porro omnis ex quibusdam iure maxime sint nobis asperiores at quos dolore sed vitae aliquam facilis culpa aut enim. Distinctio, sed veritatis?'
        ]
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
