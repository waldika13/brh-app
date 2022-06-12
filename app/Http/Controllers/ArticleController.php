<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article_page', [
            "title" => "Article Page",
            "active" => "article",
            "articles" => Article::all()
        ]);
    }

    public function show(Article $article)
    {
        return view('detail_article', [
            "title" => $article->title,
            "active" => "article",
            "article" => $article
        ]);
    }
}
