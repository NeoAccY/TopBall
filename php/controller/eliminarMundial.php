<?php
	include "../conexion/conexion.php";

$id = $_GET['id'];

$eliminar = "DELETE FROM mundiales WHERE id_mundiales = '$id'";

$resultadoE = mysqli_query($conexion, $eliminar);

if ($resultadoE) {
    header("Location: ../views/tablaMundialesA.php");
} else {
    echo "<script>alert('Ocurrio un error, no se pudo eliminar'); window.history.go=(-1);</script>";
}
?>

