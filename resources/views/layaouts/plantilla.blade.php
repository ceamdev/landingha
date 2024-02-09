<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Harmony Academy - ErickMaldonado.us</title>
    <!-- favicon -->
    <!-- style css -->
    <link rel="stylesheet" href="../resources/css/app.css">
</head>
<body>
    <!-- header -->
    <header class="container">
        <h1>Harmony Academy</h1>
    </header>
    <!-- nav -->
    <nav class="navbar">
        <ul>
            <li><a href="./">Inicio</a></li>
            <li><a href="#testimonios">Testimonios</a></li>
            <li><a href="cursos">Cursos</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>
    <main class="container">
    <!-- <h1>Vista Home desde View, y enviada por el controlador HomeController.</h1> -->
    @yield('content')
    @yield('testimoniostexto')
    @yield('testimoniosvideo')
    </main>
    <!-- footer -->
    <footer class="container">
        &copy; 2023 - <?php echo date('Y'); ?> - Derechos Reservados - Harmony Academy - Erick Maldonado 
    </footer>
    <!-- script -->
    <script src="../resources/js/app.js"></script>
    <script src="../resources/js/bootstrap.js"></script>
</body>
</html>