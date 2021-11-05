<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditorialIndex extends Component
{
    public function render()
    {
        $editorials = Article::where('category_id', 3)->latest('id')->paginate(4);
        $opinions = Article::where('category_id', 4)->latest('id')->paginate(4);
        return view('livewire.editorial-index', compact('editorials', 'opinions'));
    }
}
