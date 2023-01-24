<?php

    require_once "../conexion/conexion.php";
    global $conexion;

    $sql="SELECT id_partidos, nombre, equipo1, equipo2, favorito, tiempos FROM partidos";
    
    $result=mysqli_query($conexion,$sql);


    // $result2 = mysqli_query($conexion,$sql2);
?>