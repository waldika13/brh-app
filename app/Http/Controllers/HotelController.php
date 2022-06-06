<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index(){
        return view('home', [
            "title" => "Home Page",
            "hotels" => Hotel::all()
        ]);
    }

    public function show($slug){
        return view('detail_page', [
            "title" => "Detail Page",
            "hotel" => Hotel::find($slug)
        ]);
    }
}
