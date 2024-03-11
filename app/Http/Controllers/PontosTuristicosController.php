<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PontosTuristicosController extends Controller
{
    
public function index(){

// dd('Listar os Pontos Turísticos');

return view("turisticos.index");

    
}

//Detalhes dos pontos turísticos
public function show(){

  
    
    return view("turisticos.show");
    
        
    }

//Carregar o formulário para cadastgro das sugestões de novos pontos turísticos
public function create(){

  
    
    return view("turisticos.create");
    
        
    }
//Cadastra no banco de dados um novo ponto turístico
    public function store(){
            dd("");
        }
    


//Carregar página para editar pontos turísticos existentes
public function edit(){ 
        
    return view("turisticos.edit");
    }

//Carregar página para atualizar pontos turísticos existentes no banco de dados
public function update(){ 
        dd("Atualizar no banco de dad");
}


//Carregar página para deletar pontos turísticos existentes
public function destroy(){ 
        dd("Deletar dados no BD");
}





}
