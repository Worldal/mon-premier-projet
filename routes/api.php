<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProduitsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/produits', [ProduitsController::class, "liste"]);
Route::get('/clients', [ClientsController::class, "liste"]);
Route::get('/produits/{id}', [ProduitsController::class, "detail"]);
Route::post('/produits/add', [ProduitsController::class, "ajouter"]);
Route::post('/clients/add', [ClientsController::class, "ajouter"]);
Route::get('/clients/{id}', [ClientsController::class, "detail"]);
Route::get('/produits/{devise}', [ProduitsController::class, "ListeDevise"]);
