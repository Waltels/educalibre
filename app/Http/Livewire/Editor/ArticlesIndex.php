<?php

namespace App\Http\Livewire\Editor;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticlesIndex extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        $articles = Article::where('title','LIKE','%'.$this->search.'%')
                            ->latest('id')
                            ->where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.editor.articles-index', compact('articles'));
    }
    public function limpiar_page(){
        $this->reset('page');
    }
}
