<?php

namespace App\Http\Controllers\Pets;

use App\Http\Controllers\Controller;
use App\Models\Table_animais;
use Illuminate\Http\Request;

class ListaPetsController extends Controller
{
    //Mostrar view da lista
    public function ViewListaPets()
    {
        //trago a lista
        $lista =  Table_animais::all();

        //retorno a view e mando a lista junto

        return view('pet.lista', ['pets' => $lista]);

 
    }

}
