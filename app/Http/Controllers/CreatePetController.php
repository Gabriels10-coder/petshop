<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePetController extends Controller
{
    //retorna a view de cadastro
    public function telaRegistro()
    {
        return  view('pet.cadastro');
    }

    //insert dos registros
    public function Registro(Request $request)

    {
        

    }
}
