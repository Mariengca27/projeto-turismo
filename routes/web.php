<?php
use App\Http\Controllers\PontosTuristicosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Rotas para pegar os pontos turísticos:

Route::get('/index-turismo',[PontosTuristicosController::class,'index']);
Route::get('/show-detalhes-turismo',[PontosTuristicosController::class,'show']);
Route::get('/create-turismo',[PontosTuristicosController::class,'create']);
Route::post('/store-novo-registro-turismo',[PontosTuristicosController::class,'store']);
Route::get('/edit-detalhes-turismo',[PontosTuristicosController::class,'edit']);
Route::put('/put-detalhes-turismo',[PontosTuristicosController::class,'update']);
Route::delete('/delete-turismo',[PontosTuristicosController::class,'destroy']);