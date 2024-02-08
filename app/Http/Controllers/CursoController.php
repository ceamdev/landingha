<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index(){
        //return "Página de Cursos desde el controlador";
        return view('cursos.index');
    }
    public function create(){
        //return "Página de crear un página de cursos desde el controlador";
        return view('cursos.create');

    }
    public function show($curso){
        //return "Página del curso de $curso";
        return view('cursos.show', ['curso' => $curso]);
    }
}
