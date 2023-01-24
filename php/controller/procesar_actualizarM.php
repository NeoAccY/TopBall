<?php 

require_once("../conexion/conexion.php");
require_once("../conexion/conexionD.php");

$id_mundiales = $_POST['id_mundiales'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$pais = $_POST['pais'];
$balon = $_POST['balon'];

$actualizar = "UPDATE mundiales SET nombre='$nombre', fecha='$fecha', pais='$pais', balon='$balon' WHERE id_mundiales ='$id_mundiales'";

$resultado=mysqli_query($conexion, $actualizar);

if ($resultado) {
    echo "<script>alert('Se han realizado cambios'); window.location='../views/tablaMundialesA.php';</script>";
} else {
    echo "<script>alert('Ocurrio un error, no se actualizaron los datos'); window.history.go=(-1);</script>";
}