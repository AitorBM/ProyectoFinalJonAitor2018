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
                // Borrado, si es que nos pasan un id
                if (isset($_GET['id'])) {
                    // Borramos los comentarios correspondientes a la entrada
                    $q = "delete from comentario where entrada_id='" . $_GET['id'] . "'";
                    // Ejecutar la consulta en la conexión abierta. No hay "resultset"
                    mysqli_query($conexion, $q) or die(mysqli_error($conexion));

                    // Formar la consulta (borrado de una fila)
                    $q = "delete from entrada where id='" . $_GET['id'] . "'";

                    // Ejecutar la consulta en la conexión abierta. No hay "resultset"
                    mysqli_query($conexion, $q) or die(mysqli_error($conexion));

                    // Comprobar si hemos afectado a alguna fila
                    echo "<p class='red'>";

                    if (mysqli_affected_rows($conexion) > 0)
                        echo "Se ha borrado la entrada con ID " . $_GET['id'] . ".";
                    else
                        echo "No se ha borrado ninguna entrada.";

                    echo "</p>";
                }

                // Formar la consulta (seleccionando todas las filas)
                $q = "select * from entrada";

                // Ejecutar la consulta en la conexión abierta y obtener el "resultset" o abortar y mostrar el error
                $r = mysqli_query($conexion, $q) or die(mysqli_error($conexion));

                // Calcular el número de filas y mostrarlo
                $total = mysqli_num_rows($r);
                echo "<p>Total de filas: $total</p>
                  <hr/>
                  ";

                // Mostrar el contenido de las filas
                if ($total > 0) {
                    while ($fila = mysqli_fetch_assoc($r)) {
                        echo "<strong>" . $fila['titulo'] . "</strong>
                          <p>Texto: " . $fila['texto'] . "</p>
                          <p>Fecha: " . $fila['fecha'] . "</p>
                          <hr/>
                          ";
                    }
                }

                //Vuelvo a generar el cursor por haberlo recorrido ya
                $r = mysqli_query($conexion, $q) or die(mysqli_error($conexion));
                // Mostrar el contenido de las filas, creando una tabla XHTML
                if ($total > 0) {
                    echo "<table border=\"1\">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Fecha</th>
                        <th>Activo</th>
                    </tr>
                    ";

                    while ($fila = mysqli_fetch_assoc($r)) {
                        echo "<tr>
                        <td>
                            <form action='mostrar.php' method='get'>
                                <input type='submit' id='borrar' name='id' value='" . $fila['id'] . "'/>
                            </form>
                        </td>
                        <td>" . $fila['titulo'] . "</td>
                        <td>" . $fila['texto'] . "</td>
                        <td>" . $fila['fecha'] . "</td>
                        <td>" . $fila['activo'] . "</td>
                        </tr>
                        ";
                    }
                    echo "
                    </table>
                    ";
                }
                // Cerrar la conexión
                //mysqli_close($conexion);
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