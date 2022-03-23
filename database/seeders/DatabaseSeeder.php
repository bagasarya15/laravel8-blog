<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


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
            'name' => 'Bagas Arya P',
            'username' => 'bagasarya',
            'email' => 'bagasarya150800@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Fadian',
        //     'email' => 'fadian150800@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Cat',
            'slug' => 'cat'
        ]);

        Category::create([
            'name' => 'Smart Phone',
            'slug' => 'smart-phone'
        ]);

        Post::factory(14)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     // 'name' => 'Wep Programing',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem totam id suscipit voluptatem. Facere, explicabo.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem totam id suscipit voluptatem. Facere, explicabo. Possimus assumenda deserunt inventore quidem, quae soluta quam nesciunt fugit recusandae et ea iusto non repellat, quisquam veniam explicabo natus doloribus. Nemo a quod hic minus maiores unde velit illum sunt culpa saepe numquam quaerat rem laudantium amet ab, quam aspernatur libero! Accusamus exercitationem ipsam sit? Sequi esse iure officia itaque vel ipsam voluptates voluptate laboriosam aliquam corporis pariatur, beatae asperiores dolore perspiciatis quaerat temporibus. Molestias pariatur assumenda, id laboriosam magnam nesciunt. Natus aut a facilis officiis quas soluta impedit, obcaecati asperiores cupiditate deleniti dolor.',
        //     'img' => 'orange.jpg',
        //     'src' => 'By. Bagas',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     // 'name' => 'Cat Article',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem totam id suscipit voluptatem. Facere, explicabo.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem totam id suscipit voluptatem. Facere, explicabo. Possimus assumenda deserunt inventore quidem, quae soluta quam nesciunt fugit recusandae et ea iusto non repellat, quisquam veniam explicabo natus doloribus. Nemo a quod hic minus maiores unde velit illum sunt culpa saepe numquam quaerat rem laudantium amet ab, quam aspernatur libero! Accusamus exercitationem ipsam sit? Sequi esse iure officia itaque vel ipsam voluptates voluptate laboriosam aliquam corporis pariatur, beatae asperiores dolore perspiciatis quaerat temporibus. Molestias pariatur assumenda, id laboriosam magnam nesciunt. Natus aut a facilis officiis quas soluta impedit, obcaecati asperiores cupiditate deleniti dolor.',
        //     'img' => 'orange.jpg',
        //     'src' => 'By. Bagas',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     // 'name' => 'Cat Article',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem totam id suscipit voluptatem. Facere, explicabo.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem totam id suscipit voluptatem. Facere, explicabo. Possimus assumenda deserunt inventore quidem, quae soluta quam nesciunt fugit recusandae et ea iusto non repellat, quisquam veniam explicabo natus doloribus. Nemo a quod hic minus maiores unde velit illum sunt culpa saepe numquam quaerat rem laudantium amet ab, quam aspernatur libero! Accusamus exercitationem ipsam sit? Sequi esse iure officia itaque vel ipsam voluptates voluptate laboriosam aliquam corporis pariatur, beatae asperiores dolore perspiciatis quaerat temporibus. Molestias pariatur assumenda, id laboriosam magnam nesciunt. Natus aut a facilis officiis quas soluta impedit, obcaecati asperiores cupiditate deleniti dolor.',
        //     'img' => 'orange.jpg',
        //     'src' => 'By. Fad',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
