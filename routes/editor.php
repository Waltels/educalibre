<?php

use App\Http\Controllers\Editor\ArticlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EditorArticles;

Route::redirect('', 'editor/articles');

Route::resource('articles', ArticlesController::class)->names('articles');

Route::post('articles/{article}/status', [ArticlesController::class, 'status'])->name('articles.status');

Route::get('articles/{article}/observation', [ArticlesController::class, 'observation'])->name('articles.observation');

