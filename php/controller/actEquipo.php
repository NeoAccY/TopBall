<?php

    require_once "../conexion/conexion.php";
    global $conexion;

    $id= $_GET["id"];
    $sql="SELECT * FROM equipo WHERE id_equipo = '$id'";
    
    $result=mysqli_query($conexion,$sql);


    // $result2 = mysqli_query($conexion,$sql2);
?> 