<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BijouxController;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\FemmeController;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\PostController;
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

Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::resource('articles', ArticleController::class);
Route::get('/bijoux',[BijouxController::class, 'index'])->name('bijoux');
Route::get('/collectionsFemme',[FemmeController::class, 'index'])->name('femmes');
Route::get('/abayasHomme',[HommeController::class, 'index'])->name('hommes');
Route::get('/enfants',[EnfantController::class, 'index'])->name('enfants');
Route::get('/blog',[PostController::class, 'index'])->name('blog');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
