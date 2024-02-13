<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Harmony Academy - ErickMaldonado.us</title>
    <!-- favicon -->
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <!-- header -->
    <header class="container">
        <h1>Harmony Academy</h1>
    </header>
    <nav class="container navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./#testimonios">Testimonios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cursos">Cursos</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <aside class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> 
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>   
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('imgs/1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Four slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imgs/2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>Five slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button> --}}
        </div>

    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button> --}}
    <!-- Modal texto testimonios -->
    <div class="modal fade" id="staticBackdropTexto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable ">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="staticBackdropLabel">TESTIMONIOS</h4>
            </div>
            <div class="modal-body">
            <section class="container">
                <section class="row">
                <article>
                    <cite>
                        <h2>Carlos Astudillo - <small>Diseño Gráfico</small></h2>
                        <img src="{{ asset('imgs/carlos.png') }}" alt="Carlos Astudillo"/>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam repellendus eius itaque, debitis maxime rerum blanditiis, distinctio molestiae esse et, odit facere minima inventore? Expedita maxime numquam suscipit voluptas maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maxime.</p>
                    </cite>
                    <cite>
                        <h2>Carlos Astudillo - <small>Diseño Gráfico</small></h2>
                        <img src="{{ asset('imgs/carlos.png') }}" alt="Carlos Astudillo"/>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam repellendus eius itaque, debitis maxime rerum blanditiis, distinctio molestiae esse et, odit facere minima inventore? Expedita maxime numquam suscipit voluptas maiores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maxime.</p>
                    </cite>
                </article>
                </section></section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn">Más información</button>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdropVideo">Video Testimonios</button>
                <button type="button" class="btn" data-bs-dismiss="modal">X</button>
            </div>
        </div>
        </div>
    </div>
    <!-- modal texto testimonios -->

    <!-- modal video testimonios -->    
    <div class="modal fade" id="staticBackdropVideo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable ">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">TESTIMONIOS (Videos)</h4>
                </div>
                <div class="modal-body">
                <section class="container">
                    <section class="row">                
                        <article>
                            <cite>
                                <h2>Carlos Astudillo - <small>Diseño Gráfico</small></h2>
                                <p><iframe width="100%" height="315" src="https://www.youtube.com/embed/u2yn5tFohnw?si=Jv4WAphjtItPeP7r&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                            </cite>
                        </article>
                    </section>
                </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn">Más información</button>
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdropTexto">Testimonios</button>
                    <button type="button" class="btn" data-bs-dismiss="modal">X</button>
                </div>
            </div>
            </div>
        </div>
    <!-- /modal video testimonios -->
    </aside>
        <!-- <h1>Vista Home desde View, y enviada por el controlador HomeController.</h1> -->
        @yield('content')

    <!-- footer -->
    <footer class="container">
        &copy; 2023 - <?php echo date('Y'); ?> - Derechos Reservados - Harmony Academy - Erick Maldonado 
    </footer>
    <!-- script -->
    <script src="{{ asset('js/popper.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>