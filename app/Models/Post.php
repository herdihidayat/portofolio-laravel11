<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Herdin Hidayat',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime voluptates et dolorum. Culpa, ad? At quaerat beatae saepe a. Omnis optio neque voluptatem quae modi, nobis ea placeat cum architecto.'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Herdin Hidayat',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime voluptates et dolorum. Culpa, ad? At quaerat beatae saepe a. Omnis optio neque voluptatem quae modi, nobis ea placeat cum architecto.'

            ]
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }
        return $post;
    }
}
