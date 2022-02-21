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
        


        //retorno a view e mando a lista junto

        return view('pet.lista');
    }
//     public function jsonlist()
//     {

//         $listaanimal = Table_animais::all();
//         $convertido = json_encode($listaanimal);

//             return response()->json($convertido,200);
//     }
 }
