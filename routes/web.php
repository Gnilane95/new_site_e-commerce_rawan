<?php

use App\Http\Controllers\AbayaFemmeController;
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
use App\Http\Controllers\EnsCombController;
use App\Http\Controllers\PantalonJeanController;
use App\Http\Controllers\PullHautController;
use App\Http\Controllers\RobeJupeController;
use App\Http\Controllers\VesteManteauController;
use App\Models\RobeJupe;

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
Route::resource('hommes', HommeController::class);
Route::resource('enfants', EnfantController::class);
Route::get('/blog',[PostController::class, 'index'])->name('blog');

Route::middleware(['admin'])->prefix('dashboard')->group(function(){
    Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/all-bijoux',[BijouxController::class, 'allBijoux'])->name('bijoux.all');
    Route::get('/all-vetements-femmes',[FemmeController::class, 'allVetFemmes'])->name('vetfemmes.all');
    Route::get('/all-robes-jupes',[RobeJupeController::class, 'allRobesJupes'])->name('robesJupes.all');
    Route::get('/all-pulls-hauts',[PullHautController::class, 'allPullsHauts'])->name('pullsHauts.all');
    Route::get('/all-ensemble-combinaison',[EnsCombController::class, 'allEnsComb'])->name('ensComb.all');
    Route::get('/all-pantalons-jeans',[PantalonJeanController::class, 'allPantJeans'])->name('pantJeans.all');
    Route::get('/all-vestes-manteaux',[VesteManteauController::class, 'allVestesManteaux'])->name('vestesManteaux.all');
    Route::get('/all-abayas-femme',[AbayaFemmeController::class, 'allAbayasfemme'])->name('abayasFemme.all');
    Route::get('/all-aciers-inoxydables',[BijouinoxController::class, 'allAciersInox'])->name('aciersInox.all');
    Route::get('/all-argents',[BijouargentController::class, 'allArgents'])->name('argents.all');
    Route::get('/all-bijoux-personalisés',[BijoupersoController::class, 'allBijouxPerso'])->name('bijouxPerso.all');
    Route::get('/all-abayas-homme',[HommeController::class, 'allAbayasHomme'])->name('abayasHomme.all');
    Route::get('/all-vetements-enfant',[EnfantController::class, 'allVetEnfant'])->name('vetEnfant.all');
});

Route::post('/avis/{id}', [AviController::class, 'store'])->name('avi.store');
Route::get('/bijoux-inox',[BijouinoxController::class, 'index'])->name('bijoux-inox.all');
Route::get('/bijoux-argents',[BijouargentController::class, 'index'])->name('bijoux-argents.all');
Route::get('/bijoux-personalisés',[BijoupersoController::class, 'index'])->name('bijoux-perso.all');
Route::get('/robes-jupes',[RobeJupeController::class, 'index'])->name('robes_et_jupes');
Route::get('/pulls-hauts',[PullHautController::class, 'index'])->name('pulls_et_hauts');
Route::get('/ensembles-combinaisons',[EnsCombController::class, 'index'])->name('ensembles_et_combinaisons');
Route::get('/pantalons-jeans',[PantalonJeanController::class, 'index'])->name('pantalons_jeans');
Route::get('/vestes-manteaux',[VesteManteauController::class, 'index'])->name('vestes_manteaux');
Route::get('/abayas-femmes',[AbayaFemmeController::class, 'index'])->name('abayasFemme');

require __DIR__.'/auth.php';
