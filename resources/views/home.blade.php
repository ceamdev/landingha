@extends('layaouts.plantilla')
@section('title', 'Home')
@section('content')
<section class="container">
        <a name="testimonios"></a>
    <section class="row">
        <h2 class="text-center p-2 m-2">¿Qué dicen nuestros estudiantes?</h2>
    {{-- <h1>Vista Home desde View, y enviada por el controlador HomeController y Plantilla.</h1> --}}
        <article class="col-xl-6 col-md-6 col-sm-12">
            <cite>
                <h2>Carlos Astudillo - <small>Diseño Gráfico</small></h2>
                <img src="../resources/imgs/carlos.png" alt="Carlos Astudillo"/>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam repellendus eius itaque, debitis maxime rerum blanditiis, distinctio molestiae esse et, odit facere minima inventore? Expedita maxime numquam suscipit voluptas maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maxime.</p>
            </cite>
            <cite>
                <h2>Carlos Astudillo - <small>Diseño Gráfico</small></h2>
                <img src="../resources/imgs/carlos.png" alt="Carlos Astudillo"/>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam repellendus eius itaque, debitis maxime rerum blanditiis, distinctio molestiae esse et, odit facere minima inventore? Expedita maxime numquam suscipit voluptas maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maxime.</p>
            </cite>
        </article>
        <article class="col-xl-6 col-md-6 col-sm-12">
            <cite>
                <h2>Carlos Astudillo - <small>Diseño Gráfico</small></h2>
                <p><iframe width="100%" height="315" src="https://www.youtube.com/embed/u2yn5tFohnw?si=Jv4WAphjtItPeP7r&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
            </cite>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdropTexto">MÁS TESTIMONIOS</button>
            </div>
        </article>
    </section>
</section>
@endsection
