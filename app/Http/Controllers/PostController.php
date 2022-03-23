<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('/fitur/posting', [
            "title" => "Posting" . $title,
            "active" => "posting",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('/fitur/post', [
            "title" => "Detail",
            "active" => 'post',
            "post" => $post
        ]);
    }

    public function album(Post $post)
    {
        return view('album', [
            "title" => "Cat Album",
            "active" => "cat album",
            "post" => $post
        ]);
    }
}
