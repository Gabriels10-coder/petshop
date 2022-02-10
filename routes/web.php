<?php

use  App\Http\Controllers\Pets\CreatePetController;
use App\Http\Controllers\Pets\ListaPetsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name("home");
Route::get('/cadastropet',[CreatePetController::class,'telaRegistro'])->name('registro.tela');
Route::post('/cadastropet/registro',[CreatePetController::class,"Registro"])->name('registro.pet');
Route::get('/listapets',[ListaPetsController::class,"ViewListaPets"])->name('lista.tela');

