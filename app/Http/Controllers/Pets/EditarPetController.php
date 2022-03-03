<?php

namespace App\Http\Controllers\pets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table_animais;

class EditarPetController extends Controller
{
    public function viewEdit($id)
    {
        $infos = Table_animais::find($id);
        return view('pet.editar',["infos" => $infos]);
    }

}
