<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fotos</title>
    <link rel="shortcut icon" href="./imagenes/favicon.ico" type="image/x-icon">

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Mi CSS -->
    <link href="./styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid"><!-- Contenedor -->

    <!-- Menú -->
    <?php
    include "menu.inc";
    ?>
    <!-- /Menú -->

    <div class="contenido">

    <div class="row"><!-- Primera fila de imágenes -->
        <!-- Izq -->
        <div class="col-sm-4">
            <a href="./imagenes/ajedrez.png"><img src="./imagenes/ajedrez.png"/></a>
        </div>
        <!-- Medio -->
        <div class="col-sm-4">
            <a href="./imagenes/logox6_positivo.png"><img src="./imagenes/logox6_positivo.png"/></a>
        </div>
        <!-- Drch -->
        <div class="col-sm-4">
            <a href="./imagenes/logox6-2.png"><img src="./imagenes/logox6-2.png"/></a>
        </div>
    </div><!-- /Primera fila de imágenes -->

    <div class="row"><!-- Segunda fila de imágenes -->
        <!-- Izq -->
        <div class="col-sm-4">
            <a href="./imagenes/ajedrez2.png"><img src="./imagenes/ajedrez2.png"/></a>
        </div>
        <!-- Medio -->
        <div class="col-sm-4">
            <a href="./imagenes/ajedrez3.png"><img src="./imagenes/ajedrez3.png"/></a>
        </div>
        <!-- Drch -->
        <div class="col-sm-4">
            <a href="./imagenes/logox6_negativo.png"><img src="./imagenes/logox6_negativo.png"/></a>
        </div>
    </div><!-- /Segunda fila de imágenes -->

    </div>

    <!-- Pié de página -->
    <?php
    include "pie.inc";
    ?>
    <!-- /Pié de página -->

</div><!-- /contenedor -->
</body>
</html>