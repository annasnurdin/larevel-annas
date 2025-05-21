<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Annas Nurdin',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi ab quo non mollitia suscipit corrupti, in sapiente explicabo, perferendis sed eligendi nihil aliquam doloribus fugiat aspernatur officiis eospossimus sunt.',
        ],
        [
            'id' =>2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Annas Nurdin',
            'body' => 'Lorem ipsum dolor, di ab quo non mollitia suscipit corrupti, in sapiente explicabo, perferendis sed eligendi nihil aliquam doloribus fugiat aspernatur officiis eospossimus sunt.',
        ],
    ];
    }

    public static function find($slug): array{
        
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }
        return $post;
    }
}