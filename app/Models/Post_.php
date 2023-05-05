<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Arif Rahman',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum beatae qui debitis deleniti quidem. Similique dignissimos exercitationem voluptatem expedita. Quis distinctio mollitia perspiciatis, beatae tempore assumenda cupiditate vel architecto reprehenderit magnam? Debitis cumque perspiciatis quibusdam rerum asperiores, aspernatur adipisci architecto sunt nam maxime corporis quas corrupti, sed sint obcaecati ut.',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Mubarok',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste delectus accusantium id laborum harum et numquam eaque dolorem necessitatibus facere maxime, dolor consectetur modi sed error nam aperiam consequatur, natus nihil assumenda alias officia. Voluptate ex sapiente dolorem unde ducimus quia iure natus est placeat. Impedit ullam consequuntur animi earum sunt similique, nemo reprehenderit reiciendis modi accusamus ad cum veniam accusantium harum eaque omnis pariatur voluptate magni atque voluptas numquam! Vitae exercitationem reprehenderit et accusamus dignissimos omnis esse alias. Quia, tempore! Maxime perferendis voluptatem doloremque neque ratione modi aliquid sint reprehenderit minus, id accusamus quaerat dicta similique animi minima amet.',
        ],
    ];

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
