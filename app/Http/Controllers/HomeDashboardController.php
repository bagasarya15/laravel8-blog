<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeDashboardController extends Controller
{
    public function index()
    {
        // DB::table('posts')->count();
        $UserPost = Post::where('user_id', auth()->user()->id)->get()->count();
        $AllPost = DB::table('posts')->count();
        $TotalUsers = DB::table('users')->count();
        return view('dashboard.index', compact('UserPost', 'AllPost', 'TotalUsers'), [
            'title' => 'Dashboard',
            'active' => 'dashboard',
        ]);
    }
}
