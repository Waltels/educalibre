<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\CulturaController;
use App\Http\Controllers\Pages\DeportesController;
use App\Http\Controllers\Pages\EducacionController;
use App\Http\Controllers\Pages\NosotrosController;
use App\Http\Controllers\Pages\PolsinController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/* ruta del home de la aplicacion*/
Route::get('users/{editorial}', [ArticlesController::class, 'editorial'])->name('article.editorial');
Route::get('articles/{article}', [ArticlesController::class, 'show'])->name('article.show');


/* paginas de la aplicacion*/

Route::get('/educacion', [EducacionController::class, 'education'])->name('educacion');

Route::get('/cultura', [CulturaController::class, 'cultura'])->name('cultura');

Route::get('/deportes', [DeportesController::class, 'deportes'])->name('deportes');

Route::get('/politicosindical', [PolsinController::class, 'polsin'])->name('polsin');

Route::get('/nosotros', [NosotrosController::class, 'nosotros'])->name('nosotros');

/*Route::get('/contactos', [ContactController::class, 'contact'])->name('contactos');*/

Route::resource('/contactos', ContactController::class)->names('contacts');
/*Route::post('/contactos', [ContactController::class, 'store'])->name('contactos.store');*/
