<?php
    $pg = "contacto";
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
                <h1>Gracias por enviarme un mensaje,</h1>
            </div>
            <div class="col-6">
                <p>te estaré respondiendo a la brevedad.</p>
            </div>
        </div>
    </main>
    <?php include_once "footer.php"; ?>
</body>

</html>