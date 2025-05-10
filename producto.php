<?php

##session_start();
##//Restricción de acceso
##if(!isset($_SESSION["usuario"]) && !isset($_SESSION["password"])){
##    header("Location:index.php");
##}

session_start();
$_SESSION["nombre"] = "Emilia"; // Solo para prueba

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    <h1> PRODUCTO </h1>
    <h3> Bienvenido Usuario: <?php echo $_SESSION["nombre"]?></h3>

   
    <a href="miPanel.php"> Panel Principal</a></li>


    <p><a href="cerrarsesion.php">Cerrar sesión </a></p>

    
</body>
</html>