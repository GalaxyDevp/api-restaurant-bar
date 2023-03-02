<?php

use App\Http\Controllers\Api\CategoriasController;
use App\Http\Controllers\Api\CentroConsumoController;
use App\Http\Controllers\Api\CentroConsumoDetallesController;
use App\Http\Controllers\Api\CentroConsumoHorariosController;
use App\Http\Controllers\Api\HotelesController;
use App\Http\Controllers\Api\LocacionesController;
use App\Http\Controllers\Api\PropiedadesController;
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

Route::controller(CentroConsumoController::class)->group(function () {
    Route::get('/centrosConsumo', 'index');
    Route::get('/centrosConsumo/{id}', 'show');
});

Route::controller(CentroConsumoDetallesController::class)->group(function () {
    Route::get('/centrosConsumoDetalles', 'index');
    Route::get('/centrosConsumoDetalles/{id}', 'show');
});

Route::controller(CentroConsumoHorariosController::class)->group(function () {
    Route::get('/centrosConsumoHorarios', 'index');
    Route::get('/centrosConsumoHorarios/{id}', 'show');
});

Route::controller(CategoriasController::class)->group(function () {
    Route::get('/categorias', 'index');
    Route::get('/categorias/{id}', 'show');
});

Route::controller(HotelesController::class)->group(function () {
    Route::get('/hoteles', 'index');
    Route::get('/hoteles/{id}', 'show');
});


Route::controller(LocacionesController::class)->group(function () {
    Route::get('/locaciones', 'index');
    Route::get('/locaciones/{id}', 'show');
});

Route::controller(PropiedadesController::class)->group(function () {
    Route::get('/propiedades', 'index');
    Route::get('/propiedades/{id}', 'show');
});