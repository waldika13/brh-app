<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\User;

class HotelController extends Controller
{
    public function index(){

        $title = '';

        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('home', [
            "title" => "All Hotel" . $title,
            "active" => "hotel",
            "hotels" => Hotel::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            "populers" => Hotel::orderByDesc('rating')->limit(3)->get(),
        ]);
    }

    public function show(Hotel $hotel){
        return view('detail_page', [
            "title" => "Detail Page",
            "active" => "hotel",
            "hotel" => $hotel,
            "reviews" => $hotel->review
        ]);
    }
}
