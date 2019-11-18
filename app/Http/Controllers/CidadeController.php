<?php

namespace App\Http\Controllers;

use App\Cidade;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function viewCidades(){
        $listaCidades = Cidade::all(); //o Cidade eh o nome da classe
        return view('cidade',["listaCidades"=>$listaCidades]); // aqui o cidade eh o nome da view
    }
}
