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
    <title>Document</title>
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
       <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Contacto</h1>
            </div>
            <div class="col-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                            class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp"
                            class="form-control shadow" required>
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control shadow" required></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" id="btnEnviar" name="btnEnviar"
                            class="btn btn-blanco px-3 shadow">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto">
        <div class="row">
            <div class="col-12 col-sm-3 pb-4">
                <a href="https://github.com/DarianGaribotti" target="_blank" title="Mira mis proyectos">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/darian-garibotti-8996bb274/" target="_blank"
                    title="Mira mi Linkedin">
                    <i class="fa-brands fa-linkedin-in ps-3"></i>
                </a>
            </div>
            <div class="col-12 col-sm-3">
                <p>Sponsor <a href="https://depcsuite.com/">DePC Suite</a></p>
            </div>
            <div class="col-12 col-sm-3">
                <p><a href="mailto:darian.gb03@gmail.com">darian.gb03@gmail.com</a></p>
            </div>
            <a href="https://wa.link/zebati" target="_blank" title="Enviame un mensaje al Whatsapp">
                <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
            </a>
        </div>
    </footer>
</body>

</html>