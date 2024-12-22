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
    //Inventaires
    Route::get('liste-inventaires', [inventaireController::class, 'index'])->name('liste-inventaires');
    //Materiels
    Route::get('liste-materiels', [materielController::class, 'index'])->name('liste-materiels');
    Route::get('creation-materiel', [materielController::class, 'store'])->name('creer-materiel');
    Route::post('soumission-creation-materiel', [materielController::class, 'create'])->name('soumission-materiels');
    Route::get('modification-materiel-{itemsQr}', [materielController::class, 'edit'])->name('modification-materiel');
    Route::post('soumission-modification-materiel-{}', [materielController::class, 'update'])->name('soumission-modification-materiels');
    Route::get('supprimer-materiel-{itemsQr}', [materielController::class, 'destroy'])->name('supprimer-materiel');
    Route::get('generation-QR', [materielController::class, 'generationQR'])->name('generation-qr');
    Route::get('creation-qr', [materielController::class, 'store'])->name('create-qr');
    //Utilisateur
    Route::get('liste-utilisateurs', [utilisateurController::class, 'index'])->name('liste-utilisateurs');
    Route::get('creation-utilisateur', [utilisateurController::class, 'create'])->name('creation-utilisateurs');
    Route::get('detail-utilisateur-{utilisateur}', [utilisateurController::class, 'show'])->name('detail-utilisateurs');
    Route::post('soumission-utilisateurs', [utilisateurController::class, 'soumission'])->name('soumission-utilisateurs');
    Route::get('modification-utilisateur-{utilisateur}', [utilisateurController::class, 'store'])->name('afficher-modification-utilisateurs');
    Route::get('soumission-modification-utilisateurs-{utilisateur}', [utilisateurController::class, 'update'])->name('modification-utilisateurs');
    Route::get('supprimer-utilisateur-{utilisateur}', [utilisateurController::class, 'destroy'])->name('supprimer-utilisateurs');
    //Parametres
    Route::get('liste-parametres', [parametreController::class, 'index'])->name('liste-parametres');
    //Localisations
    Route::get('liste-localisations', [localisationController::class, 'index'])->name('liste-localisations');
    Route::get('creation-localisation', [localisationController::class, 'create'])->name('creation-localisation');
    Route::post('soumission-localisation', [localisationController::class, 'soumission'])->name('soumission-localisation');
    Route::post('detail-localisation-{region}', [localisationController::class, 'show'])->name('detail-localisation');
    Route::get('modification-localisation-{region}', [localisationController::class, 'store'])->name('afficher-modification-localisation');
    Route::post('soumission-modification-localisation-{region}', [localisationController::class, 'update'])->name('modifier-localisation');
    Route::get('supprimer-localisation-{region}', [localisationController::class, 'destroy'])->name('supprimer-localisation');

});
Route::get('404', [errorController::class, 'index'])->name('error');
Route::get('logout', [AuthController::class, 'destroy'])->name('logout');
