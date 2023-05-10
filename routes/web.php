<?php

use Illuminate\Support\Facades\Route;
use App\Models\agendamento;
use App\Http\Controllers\AgendamentoController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/agendamentos', [AgendamentoController::class, 'index']);
Route::post('adicionar-agendamento',[AgendamentoController::class,'create']);
Route::get('consultar',[AgendamentoController::class,'listar']);