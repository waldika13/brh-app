<?php

use App\Http\Controllers\HotelController;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;

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

Route::get('detail_page/{slug}', [HotelController::class, 'show']);

Route::get('/article', function () {
    return view('article_page', [
        "title" => "Article Page",
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Category Page",
    ]);
});

Route::get('/signin', function () {
    return view('login.index', [
        "title" => "Signin Page",
    ]);
});

Route::get('/signup', function () {
    return view('register.index', [
        "title" => "Signup Page",
    ]);
});

Route::get('/admin', function () {
    return view('admin.dashboard', [
        "title" => "Admin - Dashboard",
    ]);
});

Route::get('/admin/profile', function () {
    return view('admin.profile', [
        "title" => "Admin - Profile",
    ]);
});

Route::get('/admin/hotel', function () {
    return view('admin.hotel', [
        "title" => "Admin - Hotel",
    ]);
});

Route::get('/admin/artikel', function () {
    return view('admin.artikel', [
        "title" => "Admin - Artikel",
    ]);
});

Route::get('/admin/artikel/add', function () {
    return view('admin.add-artikel', [
        "title" => "Admin - Add Artikel",
    ]);
});

Route::get('/admin/artikel/edit', function () {
    return view('admin.edit-artikel', [
        "title" => "Admin - Edit Artikel",
    ]);
});

Route::get('/admin/hotel/add', function () {
    return view('admin.add-hotel', [
        "title" => "Admin - Add Hotel",
    ]);
});

Route::get('/admin/hotel/edit', function () {
    return view('admin.edit-hotel', [
        "title" => "Admin - Edit Hotel",
    ]);
});
