<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::controller(MateriaController::class)->group(function(){
    Route::get('/','index')->name("materia.index");
    Route::get('/crear','create')->name("materia.create");
    Route::post('/materiaCreada','store')->name("materia.store");
    Route::delete('/materiaEliminar/{materia}','destroy')->name("materia.destroy");
    Route::get('/editando/{materia}','edit')->name("materia.edit");
    Route::put('/materiaCambiada/{materia}','update')->name("materia.update");
});