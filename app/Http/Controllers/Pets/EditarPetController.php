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
        return view('pet.editar', ["infos" => $infos]);
    }

    public function  updatePets(Request $request)
    {
        $search = Table_animais::findOrFail($request->id);
        if (!$search) {

            $search->update([
                "nome" => $request->nome,
                "raça" => $request->raça,
                "peso" => $request->peso,
                "idade" => $request->idade,
                "especie" => $request->especie

            ]);
            return redirect('pets/listapets')->with('msg', "Parabens foi alterado");

        } else {
            return redirect()->back()->with('msg', 'erro ao alterar');
        }
    }
}