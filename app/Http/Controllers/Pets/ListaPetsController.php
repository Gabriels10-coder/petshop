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
        $lista =  Table_animais::all();


        //retorno a view e mando a lista junto

        return view('pet.lista', ['pets' => $lista]);
    }

    public function lista()
    {
        $listaJson = DB::table('table_animais');
        $filtrado = $listaJson->where('idade','>',14)->first();

      return response()->json($filtrado,200);
    }
}
