@extends('layaouts.plantilla')
@section('title', 'Curso de '.$curso)
@section('content')
    <h1>Vista Cursos de {{$curso}} desde View, y enviada por el controlador CursosController.</h1>
@endsection