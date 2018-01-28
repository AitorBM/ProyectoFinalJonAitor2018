<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Web</title>
    <link rel="shortcut icon" href="./imagenes/favicon.ico" type="image/x-icon">

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Mi CSS -->
    <link href="./styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Contenedor -->
<div class="container-fluid">

    <!-- Menú -->
    <?php
    include "menu.inc";
    ?>
    <!-- /Menú -->

    <!-- Cuerpo -->
    <div class="contenido">
        <!-- Tercer párrafo -->
        <div class="row">
            <div class="col-sm-12">
                <?php
                // date_default_timezone... es obligatorio si usais PHP 5.3 o superior
                date_default_timezone_set('Europe/Madrid');
                $fecha_actual = date("Y-m-d H:i:s");
                ?>
                <form action="insertar.php" method="get">
                    <div>
                        <label for="titulo">Título:</label>
                        <input type="text" id="titulo" name="titulo" value=""/>
                    </div>
                    <div>
                        <label for="texto">Texto:</label>
                        <textarea id="texto" name="texto" rows="4" cols="40"></textarea>
                    </div>
                    <div>
                        <label for="activo">Activo:</label>
                        <input type="checkbox" id="activo" name="activo" checked="checked"/>
                    </div>
                    <div>
                        <input type="reset" id="limpiar" name="limpiar" value="Limpiar"/>
                        <input type="submit" id="enviar" name="enviar" value="Guardar"/>
                    </div>
                </form>

                <?php
                //Si se pulsa enviar
                if (isset($_GET['enviar']) && $_GET['enviar'] != "") {
                    // Recoger los valores
                    $titulo = "";
                    if (isset($_GET['titulo']) && $_GET['titulo'] != "")
                        $titulo = $_GET['titulo'];

                    $texto = "";
                    if (isset($_GET['texto']) && $_GET['texto'] != "")
                        $texto = $_GET['texto'];

                    $fecha = $fecha_actual;
//                    if (isset($_GET['fecha']) && $_GET['fecha'] != "")
//                        $fecha = $_GET['fecha'];

                    $activo = 0;
                    if (isset($_GET['activo']))
                        $activo = 1;

                    // Formar la consulta (insertar una fila)
                    $q = "insert into entrada values (0,'" . $titulo . "' , '" . $texto . "','" . $fecha . "','" . $activo . "')";
                    // Ejecutar la consulta en la conexión abierta. No hay "resultset"
                    mysqli_query($conexion, $q) or die(mysqli_error($conexion));
                }
                ?>
            </div>
        </div>
        <!-- /Tercer párrafo -->
    </div>
    <!-- /Cuerpo -->

    <!-- Pié de página -->
    <?php
    include "pie.inc";
    ?>
    <!-- /Pié de página -->

</div>
<!-- /Contenedor -->
</body>
</html>