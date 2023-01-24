<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$database = "topball";

$conexion = mysqli_connect($hostname, $user, $pass, $database) or die ("No se pudo conectar con el servidor: " .mysqli_error($conexion));

mysqli_select_db($conexion, $database) or die ("No pudo seleccionarse la base datos");
mysqli_set_charset($conexion, "utf8mb4");

?>