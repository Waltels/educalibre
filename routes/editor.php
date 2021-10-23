<?php
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EditorArticles;

Route::redirect('', 'editor/articles');
Route::get('articles', EditorArticles::class)->name('articles.index');