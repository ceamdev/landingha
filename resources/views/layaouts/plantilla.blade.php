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
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Julio Moreno - <small>Diseño Gráfico.</small></h2>
                            <img src="{{ asset('imgs/sin-foto.jpg') }}" alt="Julio Moreno, Diseño Gráfico.."/>
                            <p>Buenas tardes, el curso me parece muy entretenido las clases han sido bien estructurada y he estado, conforme con lo que hemos visto hasta lo momentos</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Sarah Khazmou - <small>Diseño Gráfico.</small></h2>
                            <img src="{{ asset('imgs/sarah-khazmou.jpg') }}" alt="Sarah Khazmou, Diseño Gráfico.."/>
                            <p>Holaa, las clases muy activas y dinámicas, el profesor excelente. De verdad estoy muy contenta con el rendimiento y todo lo aprendido!</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>José Daniel Gil - <small>Diseño Gráfico.</small></h2>
                            <img src="{{ asset('imgs/jose-daniel-gil.jpg') }}" alt="José Daniel Gil, Diseño Gráfico.."/>
                            <p>Buenos días, el curso me parece muy chévere las clases son dinámicas, ahí buen ambiente y el profesor explica de manera entretenida haciendo interesantes las clases.</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Adrianyela Reyes - <small>Diseño Gráfico.</small></h2>
                            <img src="{{ asset('imgs/adrianyela-reyes.jpg') }}" alt="Adrianyela Reyes, Diseño Gráfico.."/>
                            <p>Buenos días compañeros. Cómo integrante del grupo de diseño grafico, les comparto que hasta ahora la experiencia ha sido muy gratificante. Desde la flexibilidad que tiene nuestro profesor a la hora de realizar su clase, hasta la buena comunicación que tenemos entre los compañeros de clase. Me siento muy conforme actualmente por todo lo que estoy aprendiendo en el área de diseño y la forma en como se realizan cada una de las actividades, definitivamente hace que te guste lo que estás haciendo y le puedas poner más dedicación para seguir aprendiendo cosas nuevas y salir de nuestra zona de confort.</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Juan Guevara - <small>Diseño Gráfico.</small></h2>
                            <img src="{{ asset('imgs/juan-guevara.jpg') }}" alt="Juan Guevara, Diseño Gráfico.."/>
                            <p>Bueno, el curso yo lo veo muy bueno, el ambiente de trabajo también es demasiado bueno ☺️, estoy agradecido de poder estar en el curso y espero seguir avanzando en este mismo. Muy bueno la verdad.</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Rossany Pereira - <small>Diseño Gráfico.</small></h2>
                            <img src="{{ asset('imgs/sin-foto.jpg') }}" alt="Rossany Pereira, Diseño Gráfico.."/>
                            <p>Buenos días para todos. Las clases de diseño gráfico son excelentes, me gusta mucho la forma de estudio que implementa la institución y la forma dinámica del profesor para explicar y enseñar la clase. El ambiente también es muy agradable. 🩷</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Esther Subero - <small>Diseño Gráfico.</small></h2>
                            <img src="{{ asset('imgs/esther-subero.jpg') }}" alt="Esther Subero, Diseño Gráfico.."/>
                            <p>Buenos días!! La verdad las clases son muy chéveres, muy práctico y dinámico... El profesor es excelente y su manera de explicar es de fácil comprensión y todo en la clase siempre se ha mantenido en un ambiente muy grato... De verdad me siento muy bien de formar parte de este grupo de formacion...  Son muy excelentes!!</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Valeria Sandoval - <small>Marketing Digital</small></h2>
                            <img src="{{ asset('imgs/valeria-sandoval.jpg') }}" alt="Valeria Sandoval, Marketing Digital."/>
                            <p>Buenos dias, las clases super chéveres y dinámicas, se entiende bastante bien, y el ambiente es muy bueno✨</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>María Frias - <small>Marketing Digital</small></h2>
                            <img src="{{ asset('imgs/maria-frias.jpg') }}" alt="María Frias, Marketing Digital."/>
                            <p>Aunque no son las mismas clases ni los mismos compañeros, el ambiente es muy ameno, y bueno como ya había dicho uno interviene de forma libre aprendiendo entre todos. No hay pregunta que no se responda ni duda que quede. En conclusión, si se aprende. Gracias al equipo por este programa. Más por clases así!.</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Valeria Guzmán - <small>Marketing Digital</small></h2>
                            <img src="{{ asset('imgs/sin-foto.jpg') }}" alt="Valeria Guzmán, Marketing Digital."/>
                            <p>Buenos días, me gusta mucho la dinámica y la enseñanza que nos deja, gracias Erick Maldona, por hacer de la clase un ambiente entretenido y lleno de conocimientos ✨</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Fiorena Idrogo - <small>Marketing Digital</small></h2>
                            <img src="{{ asset('imgs/fiorela-idrogo.jpg') }}" alt="Fiorena Idrogo, Marketing Digital."/>
                            <p>Este curso de Marketing Digital me parece excelente es una forma divertida de aprender y es algo donde puedes entender , se aclaran dudas y es un espacio cómodo dónde se ven las clases y el profe es exelente 👌dando las clases y enseñando</p>
                        </cite>
                    </article>
                    <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                        <cite>
                            <h2>Daniel Ayala - <small>Gestión de Proyectos Empresariales</small></h2>
                            <img src="{{ asset('imgs/sin-foto.jpg') }}" alt="Daniel Ayala, Gestion de proyectos Empresariales."/>
                            <p>Buenas noches, las clases son bien estructuradas y divertidas, otorgan un aprendizaje óptimo. Excelentes metodologías para tener conocimiento de diversos temas con facilidad, y buena comprensión</p>
                        </cite>
                    </article>
                <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                    <cite>
                        <h2>Liliana Suarez - <small>Gestión de Proyectos Empresariales</small></h2>
                        <img src="{{ asset('imgs/liliana-suarez.jpg') }}" alt="Liliana Suarez, Gestion de proyectos Empresariales."/>
                        <p>buenas noches, he disfrutado mucho las clases que hemos tenido, han sido full interactivas lo cual nos ayuda a compartir nuestras ideas y entender más cada tema, me gusta mucho la metodología que se emplea y espero y sigamos así🫶🏻 además, estoy muy satisfecha con la interacción del grupo del que formo parte</p>
                    </cite>
                </article>
                <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                    <cite>
                        <h2>Neisbeth Hernández - <small>Gestión de Proyectos Empresariales</small></h2>
                        <img src="{{ asset('imgs/liliana-suarez.jpg') }}" alt="Neisbeth Hernández, Gestion de proyectos Empresariales."/>
                        <p>Buenas noches, súper chévere la clases que hemos tenido, nos ayudan a interactuar en grupo, compartir y aprender conocimientos, gracias Erick Maldonado, por hacer las clases dinámicas y divertidas✨🫶</p>
                    </cite>
                </article>
                <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                    <cite>
                        <h2>María Frias - <small>Gestión de Proyectos Empresariales</small></h2>
                        <img src="{{ asset('imgs/maria-frias.jpg') }}" alt="Maria Frias, Gestion de proyectos Empresariales."/>
                        <p>Buenas tardes, excelente ambiente de aprendizaje. Donde hay libre participación, se aclaran las dudas. 
                            Y las técnicas de enseñanzas son muy buenas. Gracias por todo. </p>
                    </cite>
                </article>
                <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                    <cite>
                        <h2>Carlos Guaiquire - <small>Gestión de Proyectos Empresariales</small></h2>
                        <img src="{{ asset('imgs/carlos-guaiquire.jpg') }}" alt="Carlos Guaiquire, Gestion de proyectos Empresariales."/>
                        <p>Buenas tardes, las clases muy chéveres, dinámicas, donde se aprende mucho, son excelentes la verdad.</p>
                    </cite>
                </article>
                </section>
            </section>
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
                        <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                            <cite>
                                <h2>Carlos Astudillo - <small>Diseño Gráfico</small></h2>
                                <p><iframe width="100%" height="315" src="https://www.youtube.com/embed/u2yn5tFohnw?si=Jv4WAphjtItPeP7r&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                            </cite>
                        </article>          
                        <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                            <cite>
                                <h2>Carlos Astudillo - <small>Diseño Gráfico</small></h2>
                                <p><iframe width="100%" height="315" src="https://www.youtube.com/embed/u2yn5tFohnw?si=Jv4WAphjtItPeP7r&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                            </cite>
                        </article>          
                        <article class="card border-light col-xl-6 col-md-12 col-sm-12">
                            <cite>
                                <h2>Carlos Astudillo - <small>Diseño Gráfico</small></h2>
                                <p><iframe width="100%" height="315" src="https://www.youtube.com/embed/u2yn5tFohnw?si=Jv4WAphjtItPeP7r&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                            </cite>
                        </article>          
                        <article class="card border-light col-xl-6 col-md-12 col-sm-12">
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
        &copy; 2023 - <?php echo date('Y'); ?> - Derechos Reservados - Harmony Academy - Erick Maldonado | Desarrollado y Diseñado por <a title="Desarrollado y Diseñado por CEAMDEV.COM - Carlos Astudillo " href="https://ceamdev.com" alt="Desarrollado y Diseñado por CEAMDEV.COM - Carlos Astudillo">CEAMDEV.COM</a>
    </footer>
    <!-- script -->
    <script src="{{ asset('js/popper.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>