<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

//Agrupando la rutas por el controlador porque tenemos un controlador comun.
Route::controller(CursoController::class)->group( function(){
    //index de pagina cursos.
    Route::get('/cursos', 'index');
    //create ruta para crear una landing de curso, especifica para backend.
    Route::get('/cursos/create', 'create');
    //show para mostrar información de landing de curso.
    Route::get('/cursos/{curso}', 'show');
});
