<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CulturaIndex extends Component
{
    public function render()
    {
        $culturas = Article::where('category_id', 6)->latest('id')->paginate(10);
        return view('livewire.cultura-index', compact('culturas'));
    }
}
