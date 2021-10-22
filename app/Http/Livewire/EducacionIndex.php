<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class EducacionIndex extends Component
{
    public function render()
    {
        $educacions = Article::where('category_id', 5)->latest('id')->paginate(10);
        return view('livewire.educacion-index', compact('educacions'));
    }
}
