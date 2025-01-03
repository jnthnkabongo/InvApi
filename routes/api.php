<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\inventaireController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/users', [AuthController::class, 'userconnected']);
Route::middleware('auth:sanctum')->post('inventaire', [inventaireController::class, 'inventaire']);
Route::middleware('auth:sanctum')->get('liste-materiel', [inventaireController::class, 'listemateriels']);
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
