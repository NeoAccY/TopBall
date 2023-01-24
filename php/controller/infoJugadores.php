<?php

    require_once "../conexion/conexion.php";
    global $conexion;

    $sql="SELECT jugadores.*,personas.nombre, mundiales.nombre, logros.nombre, nacionalidad.nombre, posicionCampo.nombre, equipo.nombre
    FROM jugadores inner join personas on jugadores.id_personas = personas.id_personas INNER JOIN mundiales ON jugadores.id_mundiales = mundiales.id_mundiales
    INNER JOIN logros ON jugadores.id_logros = logros.id_logros INNER JOIN nacionalidad ON jugadores.id_nacionalidad = nacionalidad.id_nacionalidad
    INNER JOIN posicionCampo ON jugadores.id_posicionCampo = posicionCampo.id_posicionCampo INNER JOIN equipo ON jugadores.id_equipo = equipo.id_equipo";
    
    $result=mysqli_query($conexion,$sql);


    // $sql="SELECT id_jugadores, id_personas, id_mundiales, id_logros, id_nacionalidad, id_posicionCampo, id_equipo, nombre, goles, numero_camisa FROM jugadores";

    // $result2 = mysqli_query($conexion,$sql2);
?>

