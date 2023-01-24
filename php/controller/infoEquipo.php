<?php

    require_once "../conexion/conexion.php";
    global $conexion;

    $sql="SELECT id_equipo, nombre, pais_representante FROM equipo";
    
    $result=mysqli_query($conexion,$sql);


    // $result2 = mysqli_query($conexion,$sql2);
?>