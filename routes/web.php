<?php

use  App\Http\Controllers\Pets\CreatePetController;
use App\Http\Controllers\Pets\ListaPetsController;
use App\Http\Controllers\pets\DeleteControllerPets;
use App\Http\Controllers\pets\EditarPetController;
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
Route::get('pets/cadastropet',[CreatePetController::class,'telaRegistro'])->name('registro.tela');
Route::post('pets/cadastropet/registro',[CreatePetController::class,"Registro"])->name('registro.pet');
Route::get('pets/listapets',[ListaPetsController::class,"ViewListaPets"])->name('lista.tela');
Route::get('pets/testepet',[ListaPetsController::class,"jsonlist"])->name('testepet');
Route::get('pets/{id}/editarpet/',[EditarPetController::class,"viewEdit"])->name("editar.pet");
Route::delete('pets/deletepet/{id}',[DeleteControllerPets::class,"delete"])->name("delete.pets");

