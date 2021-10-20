<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class ArticlesIndex extends Component
{
    public function render()
    {
        $articles = Article::where('category_id', 3)->latest('id')->paginate();
        $destacados = Article::where('category_id', 2)->latest('id')->paginate(2);
        $editorials = Article::where('category_id', 3)->latest('id')->paginate(1);
        $opinions = Article::where('category_id', 4)->latest('id')->paginate(1);

        return view('livewire.articles-index', compact('articles', 'destacados', 'editorials', 'opinions'));
    }
}
