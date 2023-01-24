<?php 

require_once("../conexion/conexion.php");
require_once("../conexion/conexionD.php");

$id_partidos = $_POST['id_partidos'];
$nombre = $_POST['nombre'];
$equipo1 = $_POST['equipo1'];
$equipo2 = $_POST['equipo2'];
$favorito = $_POST['favorito'];
$tiempos = $_POST['tiempos'];

$actualizar = "UPDATE partidos SET nombre='$nombre', equipo1='$equipo1', equipo2='$equipo2', favorito='$favorito', tiempos='$tiempos' WHERE id_partidos ='$id_partidos'";

$resultado=mysqli_query($conexion, $actualizar);

if ($resultado) {
    echo "<script>alert('Se han realizado cambios'); window.location='../views/tablaPartidosA.php';</script>";
} else {
    echo "<script>alert('Ocurrio un error, no se actualizaron los datos'); window.history.go=(-1);</script>";
}