<?php
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;


Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->only(['index', 'edit','update'])->names('users');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::post('articles/{article}/approved', [ArticleController::class, 'approved'])->name('articles.approved');

Route::get('articles/{article}/observation', [ArticleController::class, 'observation'])->name('articles.observation');

Route::post('articles/{article}/reject', [ArticleController::class, 'reject'])->name('articles.reject');