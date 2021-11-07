<?php

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\CidadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/pais', [PaisController::class, 'getAllPais']);
Route::get('/pais{id}', [PaisController::class, 'getPaisById']);
Route::post('/pais', [PaisController::class,'createPais']);
Route::put('/pais/{id}', [PaisController::class, 'update']);
Route::delete('/pais/{id}', [PaisController::class, 'destroy']);

Route::get('/estado', [EstadoController::class, 'getAllEstado']);
Route::post('/estado', [EstadoController::class,'createEstado']);
Route::put('/estado/{id}', [EstadoController::class, 'update']);
Route::delete('/estado/{id}', [EstadoController::class, 'destroy']);

Route::get('/cidade', [CidadeController::class, 'getAllCidade']);
Route::post('/cidade', [CidadeController::class,'createCidade']);
Route::put('/cidade/{id}', [CidadeController::class, 'update']);
Route::delete('/cidade/{id}', [CidadeController::class, 'destroy']);
