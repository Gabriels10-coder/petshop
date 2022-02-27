<?php

namespace App\Http\Controllers\Pets;

use App\Http\Controllers\Controller;
use App\Models\Table_animais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaPetsController extends Controller
{
    //Mostrar view da lista
    public function ViewListaPets()
    {
        //trago a lista

        $lista = Table_animais::get();

        //retorno a view e mando a lista junto

        return view('pet.lista',["animais"=>$lista]);
    }
    public function jsonlist()
    {

        $listaanimal = Table_animais::all();
        $conversao  =  json_encode($listaanimal);

        return response()->json($conversao, 200);
    }
}
