<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
    <title>Boletería</title>
 

</head>
<body class="fondo">
    <div class="margen">
<?php include_once 'includes/templates/header.php'; ?>
    <main>
<form action="" method="POST">

<div id="formulario" class="formulario ">

</div>
</form>


    </main>
    <br>
    </div>
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


</body>

<script src="js/script.js"></script>
<script src="js/ajax.js"></script>
<script src="js/textos.js"></script>

</html>
