<?php
    $pg = "inicio";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icono.png" type="image/x-icon">
    <title>Inicio</title>
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
       <div class="row">
            <div class="col-12 pt-4 text-center div-cohete">
                <a href="proyectos.html"><img src="/images/cohete.svg" alt=""></a>
            </div>
       </div>
        <div class="row">
            <div class="col-12 col-sm-6 py-sm-3 my-4 mt-sm-5 text-center mb-3 offset-sm-3">
                <p class="py-1 texto-1">Bienvenid@ a mi sitio web sobre docencia en sistemas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-7 offset-2 col-sm-2 offset-sm-5 py-2 pb-4 px-1 text-center">
                <p class="py-2 texto-2 shadow">Conoce mis proyectos</p>
            </div>
       </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class="col-12 col-sm-3">
                <a href="https://github.com/DarianGaribotti" target="_blank" title="Mira mis proyectos">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/darian-garibotti-8996bb274/" target="_blank" title="Mira mi Linkedin">
                    <i class="fa-brands fa-linkedin-in ps-3"></i>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                <p>Sponsor <a href="https://depcsuite.com/">DePC Suite</a></p>
            </div>
            <div class="col-12 col-sm-3">
                <p><a href="mailto:darian.gb03@gmail.com">darian.gb03@gmail.com</a></p>
            </div>
            <div>
                <a href="https://wa.link/zebati" target="_blank" title="Enviame un mensaje al Whatsapp">
                    <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>