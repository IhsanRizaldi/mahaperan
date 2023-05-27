<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tags;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $article = Article::with('tags')->whereHas('tags', function($query) use (&$slug){
            $query->where('slug',$slug);
        })->get();
        return view('tags.article.index',compact('article'));
    }

    public function show($slug)
    {
        $article = Article::with('user')->where('slug',$slug)->first();
        return view('tags.article.show',compact('article'));
    }

}
