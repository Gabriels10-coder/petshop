<?php

namespace App\Http\Controllers\pets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditarPetController extends Controller
{
    public function viewEdit()
    {

        return view('pet.editar');
    }
   
}
