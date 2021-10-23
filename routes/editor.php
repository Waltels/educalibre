<?php

use App\Http\Controllers\Editor\ArticlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EditorArticles;

Route::redirect('', 'editor/articles');

Route::resource('articles', ArticlesController::class)->names('articles');

