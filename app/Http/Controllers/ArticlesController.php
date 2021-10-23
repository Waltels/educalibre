<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article){
        return view('articles.show', compact('article'));
    }
    public function editorial(Article $editorial){
        return view('articles.editorial', compact('editorial'));
    }
      
}
