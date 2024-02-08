<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //creo los metodos para invocar a la vista home, se __invoke (solo cuando es una vista simple).
    public function __invoke(){
        //return "Vista desde Controlador al Home. ";
        return view('home');
    }
}
