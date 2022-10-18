<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Satu",
            "slug" => "judul-post-satu",
            "author" => "Amat Arifin",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nemo asperiores veniam deleniti culpa exercitationem eum esse veritatis provident quia dolorem minus perspiciatis enim hic? Porro nam voluptatum qui sunt quia officiis necessitatibus ducimus similique earum libero cum provident nulla at facere itaque unde reprehenderit, soluta assumenda et, fugit beatae. Soluta assumenda est sunt, officia necessitatibus tempore? Quis ullam recusandae animi eaque molestiae amet a repellendus doloremque repudiandae asperiores, neque deserunt natus eius maiores. Dolorum sunt mollitia et iusto facere!"
        ],
        [
            "title" => "Judul Post Dua",
            "slug" => "judul-post-dua",
            "author" => "Tejo W.",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nemo asperiores veniam deleniti culpa exercitationem eum esse veritatis provident quia dolorem minus perspiciatis enim hic? Porro nam voluptatum qui sunt quia officiis necessitatibus ducimus similique earum libero cum provident nulla at facere itaque unde reprehenderit, soluta assumenda et, fugit beatae. Soluta assumenda est sunt, officia necessitatibus tempore? Quis ullam recusandae animi eaque molestiae amet a repellendus doloremque repudiandae asperiores, neque deserunt natus eius maiores. Dolorum sunt mollitia et iusto facere! reprehenderit, soluta assumenda et, fugit beatae. Soluta assumenda est sunt, officia necessitatibus tempore? Quis ullam recusandae animi eaque molestiae amet a repellendus doloremque repudiandae asperiores, neque deserunt natus eius maiores. Dolorum sunt mollitia et iusto facere!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
