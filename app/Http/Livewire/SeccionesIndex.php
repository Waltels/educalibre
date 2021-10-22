<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class SeccionesIndex extends Component
{
    public function render()
    {

        $educacions = Article::where('category_id', 5)->latest('id')->paginate(3);
        $culturas = Article::where('category_id', 6)->latest('id')->paginate(3);
        $deportes = Article::where('category_id', 7)->latest('id')->paginate(3);
        $polsins = Article::where('category_id', 8)->latest('id')->paginate(3);
        $libres = Article::where('category_id', 9)->latest('id')->paginate(3);
        return view('livewire.secciones-index', compact('educacions', 'culturas', 'deportes', 'polsins', 'libres'));
    }
}
