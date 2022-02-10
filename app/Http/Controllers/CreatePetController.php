<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table_animais;
use Illuminate\Support\Facades\Redirect;

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
        $pet = new Table_animais();
        $pet->create([
            'nome'=> $request->nome,
            'raça'=>$request->raca,
            'peso'=>$request->peso,
            'idade'=>$request->idade,
            'dono'=> $request->dono
        ]);
        return redirect('/');
}
}
