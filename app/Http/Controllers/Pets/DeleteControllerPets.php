<?php

namespace App\Http\Controllers\pets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table_animais;

class DeleteControllerPets extends Controller
{
    public function delete($id)
    {
        $pet =  Table_animais::findorfail($id)->delete();

        return redirect('/listapets');
    }
}
