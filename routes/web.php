<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeDashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes Home
Route::get('/', function () {
    return view('fitur/home', [
        'title' => 'Home',
        'active' => '/',
    ]);
});

// Routes About
Route::get('/about', function () {
    return view('fitur/about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});

// Routes Posting
Route::get('/posting', [PostController::class, 'index']);
Route::get('/posting/{post:slug}', [PostController::class, 'show']);

// Routes Category
Route::get('/categories', function () {
    return view('/fitur/categories', [
        'title' => 'Categories',
        'active' => 'categories',
        'categories' =>  Category::all(),

    ]);
});

// Routes Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

//Routes Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Routes Registrasi
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Routes Dashboard
Route::get('/dashboard', [HomeDashboardController::class, 'index'])->middleware('auth');

//Routes Dashboard Post
// Route::get('/dashboard/posting/{post:slug}', [DashboardPostController::class])->middleware('auth');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

//Routes Admin Category Controller
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
