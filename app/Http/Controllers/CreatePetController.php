<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePetController extends Controller
{
public function registroPet(){
    return  view('pet.cadastro');
}
}
