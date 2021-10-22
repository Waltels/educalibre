<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class DeporteIndex extends Component
{
    public function render()
    {
        $deportes = Article::where('category_id', 7)->latest('id')->paginate(10);
        return view('livewire.deporte-index', compact('deportes'));
    }
}
