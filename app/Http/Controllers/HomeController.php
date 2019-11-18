<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function viewHome(){
        // $usuario = new Usuario ();
        // $listaUsuarios = $usuario->all();
        // a linha de baixo é igual as duas de cima (faz exactly same shit)
        $listaUsuarios = Usuario::all();

        return view('home',["listaUsuarios"=>$listaUsuarios]);
    }
}
