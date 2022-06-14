<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
        
        return view('dashboard.categories.index', [
            'categories' => Category::where('name', 'LIKE', '%'.$request->search.'%')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create',[
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
            'name' => 'required|max:255|unique:categories',
            'slug' => 'required|unique:categories',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('category-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Category::create($validateData);

        return redirect('/dashboard/categories')->with('success', 'New Category has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',[
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'image' => 'image|file|max:1024'
        ];
        
        if($request->name != $category->name){
            $rules['name'] = 'required|unique:categories';
        }

        if($request->slug != $category->slug){
            $rules['slug'] = 'required|unique:categories';
        }

        $validateData = $request->validate($rules);

        if($request->file('image')){
            if($category->image){
                Storage::delete($category->image);
            }

            $validateData['image'] = $request->file('image')->store('category-images');
        }

        Category::where('id', $category->id)
            ->update($validateData);

        return redirect('/dashboard/categories')->with('success','Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->image){
            Storage::delete($category->image);
        }

        Category::destroy($category->id);

        return redirect('/dashboard/categories')->with('success','Category has been deleted!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
