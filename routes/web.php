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

