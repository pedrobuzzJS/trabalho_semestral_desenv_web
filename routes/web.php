<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CidadeController;
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

// Controller Pais

Route::get('/', [HomeController::class, 'index'])->name('home');

// Controller Estado

Route::get('/estado', [EstadoController::class, 'index'])->name('estado');

// Controller Cidade

Route::get('/cidade', [CidadeController::class, 'index'])->name('cidade');
