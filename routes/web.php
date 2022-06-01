<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home Page",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Page",
    ]);
});

Route::get('/detail_page', function () {
    return view('detail_page', [
        "title" => "Detail Page",
    ]);
});

Route::get('/article', function () {
    return view('article_page', [
        "title" => "Article Page",
    ]);
});