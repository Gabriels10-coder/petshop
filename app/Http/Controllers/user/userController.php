<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{

    public function index(){
        return view('usuario.registrousuario');
    }
    public function createUser(Request $request)
    {
        User::create([
          "name"=>$request->nome ,
          "email"=>$request->email,
          "password"=>$request->password
        ]);
        return redirect('/');
    }
}