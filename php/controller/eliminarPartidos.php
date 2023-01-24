<?php
	include "../conexion/conexion.php";

$id = $_GET['id'];

$eliminar = "DELETE FROM partidos WHERE id_partidos = '$id'";

$resultadoE = mysqli_query($conexion, $eliminar);

if ($resultadoE) {
    header("Location: ../views/tablaPartidosA.php");
} else {
    echo "<script>alert('Ocurrio un error, no se pudo eliminar'); window.history.go=(-1);</script>";
}
?>
