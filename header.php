<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundesotec</title>

    <!-- --------ICON FUNDESOTEC------------ -->
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts y Bootstrap Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!-- EmailJS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        emailjs.init('a8kALHJN1zzwKpep0');
    </script>

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="EstilosCss/Index.css">

    <!-- Estilo extra para navbar scrolled -->
    <style>
        .navbar.scrolled {
            background-color: #fff !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .navbar-brand img {
            max-height: 50px;
        }
    </style>
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php?page=Vista/Inicio.html">
            <img src="Img/FUNDESOTEC.png" alt="Logo Fundesotec" class="img-fluid" id="logo">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Inicio.html" onclick="cerrarMenu()">INICIO</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Nosotros.html" onclick="cerrarMenu()">NOSOSTROS</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Proyectos.html" onclick="cerrarMenu()">PROYECTOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Donaciones.html" onclick="cerrarMenu()">DONACIONES</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Noticias.html" onclick="cerrarMenu()">NOTICIAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Estructura.html" onclick="cerrarMenu()">ESTRUCTURA</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/CACFundesotec.html" onclick="cerrarMenu()">CAC. FUNDESOTEC</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Contactos.html" onclick="cerrarMenu()">CONTACTOS</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Script para mejorar navegación responsiva -->
    <script>
        function cerrarMenu() {
            let navbarToggler = document.querySelector('.navbar-toggler');
            let navbarCollapse = document.querySelector('.navbar-collapse');

            if (navbarToggler && navbarCollapse.classList.contains('show')) {
                navbarToggler.click(); // Cierra el menú
            }
        }

        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-GYFjcBsIWpB8jR+aK+UJppNAm0SdbONs0Fbi2HG8p06FzncQ3nSOVv+yjCV5KfEe" crossorigin="anonymous"></script>

</body>

</html>
