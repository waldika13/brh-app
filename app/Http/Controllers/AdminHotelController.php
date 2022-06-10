<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hotels.index', [
            // 'hotels' => Hotel::where('user_id', auth()->user()->id)->get() -> untuk Article & Review
            'hotels' => Hotel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hotels.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:hotels',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
            'price' => 'required|numeric',
            'location' => 'required|max:255',
            'facility' => 'required',
            'rating' => 'required|numeric',
            'contact' => 'required|max:20' 
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('hotel-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '..');

        Hotel::create($validateData);

        return redirect('/dashboard/hotels')->with('success', 'New Hotel has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('dashboard.hotels.show', [
            'hotel' => $hotel,
            "reviews" => $hotel->review
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('dashboard.hotels.edit',[
            'hotel' => $hotel,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
            'price' => 'required|numeric',
            'location' => 'required|max:255',
            'facility' => 'required',
            'rating' => 'required|numeric',
            'contact' => 'required|max:20' 
        ];

        if($request->slug != $hotel->slug){
            $rules['slug'] = 'required|unique:hotels';
        }

        $validateData = $request->validate($rules);
        
        if($request->file('image')){
            if ( $hotel->image ) {
                Storage::delete($hotel->image);
            }

            $validateData['image'] = $request->file('image')->store('hotel-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '..');

        Hotel::where('id', $hotel->id)->update($validateData);

        return redirect('/dashboard/hotels')->with('success', 'Hotel has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {

        if ( $hotel->image ) {
            Storage::delete($hotel->image);
        }
        
        Hotel::destroy($hotel->id);

        return redirect('/dashboard/hotels')->with('success', 'Hotel has been deleted!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Hotel::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
