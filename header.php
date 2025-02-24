<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundesotec</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts y Bootstrap Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- -------------------- -->
    <!-- script correo -->
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

    <script type="text/javascript">
        emailjs.init('a8kALHJN1zzwKpep0')
    </script>
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="EstilosCss/Index.css">
</head>

<body>

    <!-- Barra superior con slogan -->
    <div class="text-end inicioFundesotec">
        <p class="font-weight-bold slogan">Fundesotec <span>|</span> Ayudanos a Ayudar</p>
    </div>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="Img/LogoFundesotec.png" alt="Logo Fundesotec"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Inicio.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Nosotros.html">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Proyectos.html">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Donaciones.html">Donaciones</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Noticias.html">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Estructura.html">Estructura</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/CACFundesotec.html">CAC. Fundesotec</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=Vista/Contactos.html">Contactos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Script para cerrar el menú en móviles -->
    <script>
        function cerrarMenu() {
            let navbarToggler = document.querySelector('.navbar-toggler');
            let navbarCollapse = document.querySelector('.navbar-collapse');

            if (navbarToggler && navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
            return false;
        }
    </script>

</body>

</html>