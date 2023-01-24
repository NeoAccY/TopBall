<?php 

require_once("../conexion/conexion.php");
require_once "../controller/infoJugadores.php";
global $conexion;
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Top 10 jugadores</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilos3.css">
</head>
<body>

 <!-- CSS only -->
 <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../librerias/datatable/dataTables.bootstrap4.min.css">

<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Jugador</td>
				<td>Nombre</td>
				<td>Mundial Destacado</td>
				<td>Logros</td>
                <td>Nacionalidad</td>
                <td>Posicion</td>
                <td>Equipo</td>
                <td>Alias</td>
                <td>Goles</td>
                <td>Camisa</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
                <td>Jugador</td>
				<td>Nombre</td>
				<td>Mundiales</td>
				<td>Logros</td>
                <td>Nacionalidad</td>
                <td>Posicion</td>
                <td>Equipo</td>
                <td>Alias</td>
                <td>Goles</td>
                <td>Camisa</td>
			</tr>
		</tfoot>
		<tbody >
			<?php
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[10] ?></td>
                    <td><?php echo $mostrar[11] ?></td>
                    <td><?php echo $mostrar[12] ?></td>
                    <td><?php echo $mostrar[13] ?></td>
                    <td><?php echo $mostrar[14] ?></td>
                    <td><?php echo $mostrar[15] ?></td>
                    <td><?php echo $mostrar[7] ?></td>
                    <td><?php echo $mostrar[8] ?></td>
                    <td><?php echo $mostrar[9] ?></td>
                    
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
    <div>
    <script type="text/javascript" src="../../librerias/jquery.min.js"></script>
<script type="text/javascript" src="../../bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../../bootstrap/js/fontawesome.js"></script>
<script type="text/javascript" src="../../librerias/datatable/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../librerias/datatable/dataTables.bootstrap4.min.js"></script>
    </div>
</div>



<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable({
			language: {
				url: '../controller/language.json'
			}
		});
	} );
</script>
</html>