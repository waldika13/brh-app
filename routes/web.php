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

Route::get('/article', function () {
    return view('article_page', [
        "title" => "Article Page",
        "active" => "article",
    ]);
});

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
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'hotels' => Hotel::where('user_id', auth()->user()->id)->get()
    ]);
})->middleware('auth');

Route::get('/dashboard/hotels/checkSlug', [AdminHotelController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/hotels', AdminHotelController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');


Route::resource('/dashboard/articles', AdminArticleController::class)->except(['edit', 'update', 'destroy'])->middleware('auth');
Route::get('/dashboard/articles/{article:slug}/edit', [AdminArticleController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/articles/{article:slug}', [AdminArticleController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/articles/{article:slug}', [AdminArticleController::class, 'destroy'])->middleware('auth');


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
