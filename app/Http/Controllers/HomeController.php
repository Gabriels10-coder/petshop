<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function auth(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            dd("logou");
        } else {
            dd(" não logou");
        }
    }
}