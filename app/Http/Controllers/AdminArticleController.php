<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Cviebrock\EloquentSluggable\Services\SlugService;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (auth()->user()->is_admin) {
            return view('dashboard.articles.index', [
                'articles' => Article::where('title', 'LIKE', '%'.$request->search.'%')->latest('created_at')->paginate(5),
            ]);
        }

        return view('dashboard.articles.index', [
            'articles' => Article::where('user_id', auth()->user()->id)->latest('created_at')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.articles.create');
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
            'slug' => 'required|unique:articles',
            'image' => 'image|file|max:1024|dimensions:min_width=1200,min_height=400',
            'excerpt' => '',
            'body' => 'required|min:100'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('article-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '..');

        Article::create($validateData);

        Alert::success('Congrats', 'New Article has been added!');
        return redirect('/dashboard/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        if (auth()->user()->is_admin || $article->user_id == auth()->user()->id) {
            return view('dashboard.articles.edit', [
                'article' => $article,
            ]);
        }

        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024|dimensions:min_width=1200,min_height=400',
            'excerpt' => '',
            'body' => 'required|min:100'
        ];

        if ($request->slug != $article->slug) {
            $rules['slug'] = 'required|unique:articles';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($article->image) {
                Storage::delete($article->image);
            }

            $validateData['image'] = $request->file('image')->store('article-images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100, '..');

        Article::where('id', $article->id)->update($validateData);

        Alert::success('Congrats', 'Article has been uptaded!');
        return redirect('/dashboard/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if ($article->image) {
            Storage::delete($article->image);
        }

        Article::destroy($article->id);

        return redirect('/dashboard/articles');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
