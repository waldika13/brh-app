<?php

use App\Models\Hotel;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminHotelController;
use App\Http\Controllers\AdminArticleController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminRegisterController;

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

Route::get('/', [HotelController::class, 'index']);

Route::get('detail_page/{hotel:slug}', [HotelController::class, 'show']);

Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'show']);


Route::get('/categories', function () {
    return view('categories', [
        "title" => "Category Page",
        "active" => "categories",
        'categories' =>Category::all()
    ]);
});

Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/signin', [LoginController::class, 'authenticate']);

Route::post('/signout', [LoginController::class, 'signout']);

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    
    auth()->user()->is_admin ? $articles = Article::all() : $articles = Article::where('user_id', auth()->user()->id)->get();

    return view('dashboard.index', [
        'title' => 'Dashboard',
        'hotels' => Hotel::get(),
        'articles' => $articles
    ]);
})->middleware('auth');

Route::get('/dashboard/hotels/checkSlug', [AdminHotelController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/hotels', AdminHotelController::class)->middleware('admin');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');


Route::get('/dashboard/articles/checkSlug', [AdminArticleController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/articles', AdminArticleController::class)->middleware('auth');

Route::resource('/dashboard/adminRegister', AdminRegisterController::class)->except('edit', 'update', 'destroy')->middleware('admin');

Route::get('/dashboard/adminRegister/{user:name}/edit', [AdminRegisterController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/adminRegister/{user:name}', [AdminRegisterController::class, 'update'])->middleware('admin');
Route::delete('/dashboard/adminRegister/{user:id}', [AdminRegisterController::class, 'destroy'])->middleware('admin');

Route::get('/dashboard/reviews', [ReviewController::class, 'index'])->middleware('auth');
Route::post('/detail_page/{hotel:slug}/review', [ReviewController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/reviews/{review:id}', [ReviewController::class, 'destroy'])->middleware('auth');
