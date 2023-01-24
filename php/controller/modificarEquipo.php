<?php 

require_once("../conexion/conexion.php");
require_once "../controller/actEquipo.php";
global $conexion;
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tabla Equipo</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilos3.css">
</head>
<body>

 <!-- CSS only -->
 <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../librerias/datatable/dataTables.bootstrap4.min.css">
<form action="procesar_actualizarE.php" method="POST">
<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
                <td>Numero de equipo</td>
				<td>Nombre</td>
				<td>Pais representante</td>
				<td>Actualizar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
                <td>Numero de equipo</td>
				<td>Nombre</td>
				<td>Pais representante</td>
				<td>Actualizar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><input type="hidden" value="<?php echo $mostrar[0]?>" name="id_equipo" ></td>
                    <td><input type="text" value="<?php echo $mostrar[1]?>" name="nombre" ></td>
                    <td><input type="text" value="<?php echo $mostrar[2]?>" name="pais_representante" ></td>
                    <td><input type="submit" value="Actualizar"></td>
				</tr>
				<?php
			}
			?>
		</tbody>
        </form>
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