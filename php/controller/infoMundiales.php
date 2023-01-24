<?php

    require_once "../conexion/conexion.php";
    global $conexion;

    $sql="SELECT id_mundiales, nombre, fecha, pais, balon FROM mundiales";
    
    $result=mysqli_query($conexion,$sql);


    // $result2 = mysqli_query($conexion,$sql2);
?>