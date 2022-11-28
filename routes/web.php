<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AviController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FemmeController;
use App\Http\Controllers\HommeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\BijouxController;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BijouinoxController;
use App\Http\Controllers\BijoupersoController;
use App\Http\Controllers\BijouargentController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('articles', ArticleController::class);
Route::resource('bijoux', BijouxController::class);
Route::resource('images', ImageController::class);
Route::resource('users', UserController::class);
Route::resource('femmes', FemmeController::class);
// Route::get('/collectionsFemme',[FemmeController::class, 'index'])->name('femmes');
Route::get('/abayasHomme',[HommeController::class, 'index'])->name('hommes');
Route::get('/enfants',[EnfantController::class, 'index'])->name('enfants');
Route::get('/blog',[PostController::class, 'index'])->name('blog');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['admin'])->prefix('dashboard')->group(function(){
    // Route::get('/', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/all-bijoux',[BijouxController::class, 'allBijoux'])->name('bijoux.all');
    Route::get('/all-vetfemmes',[FemmeController::class, 'allVetFemmes'])->name('vetfemmes.all');
    // Route::get('/all-images',[ImageController::class, 'allImages'])->name('images.all');
});

Route::post('/avis/{id}', [AviController::class, 'store'])->name('avi.store');
Route::get('/bijoux-inox',[BijouinoxController::class, 'index'])->name('bijoux-inox.all');
Route::get('/bijoux-argents',[BijouargentController::class, 'index'])->name('bijoux-argents.all');
Route::get('/bijoux-perso',[BijoupersoController::class, 'index'])->name('bijoux-perso.all');

require __DIR__.'/auth.php';
