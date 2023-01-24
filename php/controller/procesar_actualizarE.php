<?php 

require_once("../conexion/conexion.php");
require_once("../conexion/conexionD.php");

$id_equipo = $_POST['id_equipo'];
$nombre = $_POST['nombre'];
$pais_representante = $_POST['pais_representante'];

$actualizar = "UPDATE equipo SET nombre='$nombre', pais_representante='$pais_representante' WHERE id_equipo ='$id_equipo'";

$resultado=mysqli_query($conexion, $actualizar);

if ($resultado) {
    echo "<script>alert('Se han realizado cambios'); window.location='../views/tablaEquipoA.php';</script>";
} else {
    echo "<script>alert('Ocurrio un error, no se actualizaron los datos'); window.history.go=(-1);</script>";
}