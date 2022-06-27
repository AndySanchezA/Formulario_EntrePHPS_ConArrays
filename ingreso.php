<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <title>Show</title>
 

</head>

<body>

<?php

        session_start();

        if (!isset($_SESSION['clientes'])) {
            $_SESSION['clientes'] = array();
        }

    if (isset($_REQUEST['insertar'])) {

        $nombre = $_REQUEST['nombre'];
        $cedula = $_REQUEST['cedula'];
        $entrada = $_REQUEST['entrada'];
        $precio = $_REQUEST['precio'];

        if (empty($nombre) || empty($cedula) || empty($entrada) || empty($precio)) {
            echo "Rellena todos los valores";
        } else {

            $cliente = array(
                "nombre" => $nombre,
                "cedula" => $cedula,
                "entrada" => $entrada,
                "precio" => $precio
            );

            if (isset($_SESSION['clientes'][$nombre])) {
                echo "Se ha modificado el cliente con DNI: " . $nombre;
            } else {
                echo "Se ha insertado el nuevo cliente";
            }

            $_SESSION['clientes'][$nombre] = $cliente;

            print_r($_SESSION['clientes']);
            header('Location: /deb/ingreso.php');
        }
    }


    ?>
<br>

     <?php



    if (count($_SESSION['clientes']) === 0) {
        echo "<p>No hay clientes</p>";
    } else {


        echo "<table class='tabla' > ";
        echo "<tr>";
     
        echo "<th>Nombre</th>";
        echo "<th>Cedula</th>";
        echo "<th>Entrada</th>";
        echo "<th>Fecha</th>";
        echo "<th>Precio</th>";
        echo "</tr>";

        foreach ($_SESSION['clientes'] as $key => $value) {
            ?>
            <tr>
         
                <td><?php echo $value['nombre']; ?></td>
                <td><?php echo $value['cedula']; ?></td>
                <td><?php echo $value['entrada']; ?></td>
                <td><?php echo $value['precio']; ?></td>
                <td><?php echo $value['precio']*$value['entrada']; ?></td>
            </tr>
<?php
        }

        echo "</table>";
echo   "  <p>REGRESAR <a href='index.php'> Insertar mas clientes </a>";
    }


?>


</body>
</html>