<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\errorController;
use App\Http\Controllers\inventaireController;
use App\Http\Controllers\localisationController;
use App\Http\Controllers\materielController;
use App\Http\Controllers\parametreController;
use App\Http\Controllers\utilisateurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'create'])->name('soumission');
Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('liste-inventaires', [inventaireController::class, 'index'])->name('liste-inventaires');
    Route::get('liste-materiels', [materielController::class, 'index'])->name('liste-materiels');
    Route::get('creation-qr', [materielController::class, 'store'])->name('create-qr');
    Route::get('liste-utilisateurs', [utilisateurController::class, 'index'])->name('liste-utilisateurs');
    Route::get('liste-parametres', [parametreController::class, 'index'])->name('liste-parametres');
    Route::get('liste-localisations', [localisationController::class, 'index'])->name('liste-localisations');
});
Route::get('404', [errorController::class, 'index'])->name('error');
