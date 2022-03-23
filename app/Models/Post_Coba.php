<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{

    private static $blog_posts = [
        [
            "name_cat" => "Kucing Orange",
            "slug" => "kucing-oren",
            "img" => "oren.jpg",
            "author" => "Bagas Arya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, eius. Debitis impedit sit exercitationem hic ab error esse molestias vel reprehenderit, deleniti adipisci obcaecati officiis laboriosam! Delectus voluptate mollitia, molestiae blanditiis veniam, sequi, alias necessitatibus suscipit eaque nemo reprehenderit ipsa eligendi nam saepe placeat dolore! Et, obcaecati molestiae rerum laborum animi eos incidunt aliquam ipsam dolore quidem illo nihil, impedit libero excepturi vel vero pariatur, fuga perspiciatis. Debitis blanditiis et deserunt iure earum non nisi, sed ut eum obcaecati neque?"
        ],
        [
            "name_cat" => "Kucing Anggora",
            "slug" => "kucing-anggora",
            "img" => "anggora.jpg",
            "author" => "Bagas Arya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, eius. Debitis impedit sit exercitationem hic ab error esse molestias vel reprehenderit, deleniti adipisci obcaecati officiis laboriosam! Delectus voluptate mollitia, molestiae blanditiis veniam, sequi, alias necessitatibus suscipit eaque nemo reprehenderit ipsa eligendi nam saepe placeat dolore! Et, obcaecati molestiae rerum laborum animi eos incidunt aliquam ipsam dolore quidem illo nihil, impedit libero excepturi vel vero pariatur, fuga perspiciatis. Debitis blanditiis et deserunt iure earum non nisi, sed ut eum obcaecati neque?"
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
