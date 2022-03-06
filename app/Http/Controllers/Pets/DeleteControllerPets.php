<?php

namespace App\Http\Controllers\pets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table_animais;

class DeleteControllerPets extends Controller
{
    public function delete($id)
    {
        $pet =  Table_animais::findorfail($id);

        if ($pet) {
            $pet->delete();
            $resposta = [
                "success" => true,
                "mensagem" => "Sucesso ao excluir"
            ];
            return response()->json($resposta, 200);
        } else {
            $resposta = [
                "success" => false,
                "mensagem" => "Falha ao excluir"
            ];
            return response()->json($resposta, 200);
        }
    }
}