<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\InspeccionesUnidadController as APIInspeccionesUnidadController;
use App\Http\Controllers\Api\NivelesAceiteController as APINivelesAceiteController;
use App\Http\Controllers\Api\NivelesGasolinaController as APINivelesGasolinaController;
use App\Http\Controllers\Api\UnidadesController as APIUnidadesController;

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

Route::post('/inspeccionesunidad',[APIInspeccionesUnidadController::class,'store'])->name('api.inspeccionesunidad.store');

Route::get('/nivelesdeaceite',[APINivelesAceiteController::class,'index'])->name('api.nivelesdeaceite.index');

Route::get('/nivelesdegasolina',[APINivelesGasolinaController::class,'index'])->name('api.nivelesdegasolina.index');

Route::get('/unidades',[APIUnidadesController::class,'index'])->name('api.unidades.index');
