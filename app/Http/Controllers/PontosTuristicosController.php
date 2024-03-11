<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PontosTuristicosController extends Controller
{
    
public function index(){

// dd('Listar os Pontos Turísticos');

return view("turisticos.index");

    
}


}
