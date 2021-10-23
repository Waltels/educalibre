<?php
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class, 'index'])->name('home');
Route::resource('roles', RoleController::class)->names('roles');