<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class PolsinIndex extends Component
{
    public function render()
    {
        $polsins = Article::where('category_id', 8)->latest('id')->paginate(10);
        return view('livewire.polsin-index', compact('polsins'));
    }
}
