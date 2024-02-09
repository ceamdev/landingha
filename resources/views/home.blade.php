@extends('layaouts.plantilla')
@section('title', 'Home')
@section('content')
    <h1>Vista Home desde View, y enviada por el controlador HomeController y Plantilla.</h1>
@endsection
@section('testimoniostexto')
    <section class="row">
        <cite> 
        <h2 class="col-12">Carlos Astudillo - <small>Diseño Gráfico</small></h2>
            <p class="col-6 row"><img src="../resources/imgs/carlos.png" alt="Carlos Astudillo" class="img-fluid col-3" width="100px" height="auto" border="0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam repellendus eius itaque, debitis maxime rerum blanditiis, distinctio molestiae esse et, odit facere minima inventore? Expedita maxime numquam suscipit voluptas maiores.</p>
        </cite>
    </section>
@endsection