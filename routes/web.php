<?php

use App\Http\Controllers\AdminArticleController;
use App\Models\Category;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminHotelController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminRegisterController;
use App\Models\Article;

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

// Halaman Single Hotel
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
        'hotels' => Hotel::where('user_id', auth()->user()->id)->get(),
        'articles' => $articles
    ]);
})->middleware('auth');

Route::get('/dashboard/hotels/checkSlug', [AdminHotelController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/hotels', AdminHotelController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');


Route::get('/dashboard/articles/checkSlug', [AdminArticleController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/articles', AdminArticleController::class)->middleware('auth');

Route::resource('/dashboard/adminRegister', AdminRegisterController::class,)->middleware('auth');



// Route::get('/admin/profile', function () {
//     return view('admin.profile', [
//         "title" => "Admin - Profile",
//     ]);
// });

// Route::get('/admin/hotel', function () {
//     return view('admin.hotel', [
//         "title" => "Admin - Hotel",
//     ]);
// });

// Route::get('/admin/artikel', function () {
//     return view('admin.artikel', [
//         "title" => "Admin - Artikel",
//     ]);
// });

// Route::get('/admin/artikel/add', function () {
//     return view('admin.add-artikel', [
//         "title" => "Admin - Add Artikel",
//     ]);
// });

// Route::get('/admin/artikel/edit', function () {
//     return view('admin.edit-artikel', [
//         "title" => "Admin - Edit Artikel",
//     ]);
// });

// Route::get('/admin/hotel/add', function () {
//     return view('admin.add-hotel', [
//         "title" => "Admin - Add Hotel",
//     ]);
// });

// Route::get('/admin/hotel/edit', function () {
//     return view('admin.edit-hotel', [
//         "title" => "Admin - Edit Hotel",
//     ]);
// });
