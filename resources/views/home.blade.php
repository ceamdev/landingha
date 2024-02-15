@extends('layaouts.plantilla')
@section('title', 'Home')
@section('content')
<section class="container">
    <section class="row course-info">
        <article class="col-xl-4 col-md-4 col-sm-12">
            <h3>PRÁCTICOS</h3>
            <img class="img-fluid rounded mx-auto d-block" src="{{ asset('imgs/sin-foto.jpg') }}" alt="Cursos practicos">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </article>
        <article class="col-xl-4 col-md-4 col-sm-12">
            <h3>FUNCIONALES</h3>
            <img class="img-fluid rounded mx-auto d-block" src="{{ asset('imgs/sin-foto.jpg') }}" alt="Cursos funcionales">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </article>
        <article class="col-xl-4 col-md-4 col-sm-12">
            <h3>ACTUALIZADOS</h3>
            <img class="img-fluid rounded mx-auto d-block" src="{{ asset('imgs/sin-foto.jpg') }}" alt="Cursos actualizados">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </article>
    </section>
</section>
<section class="container">
        <a name="testimonios"></a>
    <section class="row">
        <h2 class="text-center p-2 m-2">¿Qué dicen nuestros estudiantes?</h2>
    {{-- <h1>Vista Home desde View, y enviada por el controlador HomeController y Plantilla.</h1> --}}
        <article class="col-xl-6 col-md-6 col-sm-12 row">
            <article class="col-xl-12 col-md-12 col-sm-12">
                <cite>
                    <h2>María Frias - <small>Gestión de Proyectos Empresariales</small></h2>
                    <img src="{{ asset('imgs/maria-frias.jpg') }}" alt="Maria Frias, Gestion de proyectos Empresariales."/>
                    <p>Buenas tardes, excelente ambiente de aprendizaje. Donde hay libre participación, se aclaran las dudas. 
                        Y las técnicas de enseñanzas son muy buenas. Gracias por todo. </p>
                </cite>
            </article>
            <article class="col-xl-12 col-md-12 col-sm-12">
                <cite>
                    <h2>Carlos Guaiquire- <small>Gestión de Proyectos Empresariales</small></h2>
                    <img src="{{ asset('imgs/carlos-guaiquire.jpg') }}" alt="Carlos Guaiquire, Gestion de proyectos Empresariales."/>
                    <p>Buenas tardes, las clases muy chéveres, dinámicas, donde se aprende mucho, son excelentes la verdad.</p>
                </cite>
            </article>
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
