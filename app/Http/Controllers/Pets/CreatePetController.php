<?php

namespace App\Http\Controllers\Pets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Table_animais;


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
            'nome' => $request->nome,
            'raça' => $request->raca,
            'peso' => $request->peso,
            'idade' => $request->idade,
            'dono' => $request->dono
        ]);
        


        return redirect('/listapets');
    }
}
//c
