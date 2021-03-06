<?php

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
use App\Http\Controllers\OrcamentosController;
use App\Models\Orcamento;

Route::get('/',[OrcamentosController::class,'index']);
Route::post('/orcamentos',[OrcamentosController::class,'store']);
Route::get('/consulta',[OrcamentosController::class,'consulta']);
Route::get('/{id}',[OrcamentosController::class,'edit']);
Route::put('/orcamentos/update/{id}',[OrcamentosController::class,'update']);
Route::delete('orcamentos/{id}',[OrcamentosController::class,'destroy']);

