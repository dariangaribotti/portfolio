<?php

$pg = "contacto";

if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];

    $para = "darian.gb03@gmail.com";
    $titulo = "Recibiste un mensaje desde tu web";

    $cuerpo = "
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br
    Mensaje: $mensaje
    ";

    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras = 'Content-type: text/html; charset=UTF-8' . "\r\n";

    //$cabeceras = 'To: darian.gb03@gmail.com' . "\r\n";
    //$cabeceras = 'From: contacto@tusitio.com' . "\r\n";
    
    //mail($para, $titulo, $cuerpo, $cabeceras);

    header("Location: confirmacion-envio.php");
}

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
    <title>Document</title>
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
       <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-5 py-3">
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
    <?php include_once "footer.php"; ?>
</body>

</html>