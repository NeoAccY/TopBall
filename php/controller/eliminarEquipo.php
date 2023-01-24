<?php
	include "../conexion/conexion.php";

$id = $_GET['id'];

$eliminar = "DELETE FROM equipo WHERE id_equipo = '$id'";

$resultadoE = mysqli_query($conexion, $eliminar);

if ($resultadoE) {
    header("Location: ../views/tablaEquipoA.php");
} else {
    echo "<script>alert('Ocurrio un error, no se pudo eliminar'); window.history.go=(-1);</script>";
}
?>

