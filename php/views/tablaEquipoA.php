<?php 

require_once("../conexion/conexion.php");
require_once "../controller/infoEquipo.php";
global $conexion;
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tabla Equipos</title>
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
				<td>Numero Equipo</td>
				<td>Nombre</td>
				<td>Pais representante</td>
				<td>Actualizar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
                <td>Numero Equipo</td>
				<td>Nombre</td>
				<td>Pais representante</td>
				<td>Actualizar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
                    <td><?php echo $mostrar[2] ?></td>
					<td style="text-align: center;">
					<a href="../controller/modificarEquipo.php?id=<?php echo $mostrar[0]; ?>"
					>
						<span class="btn btn-warning btn-sm">
						<span class="fa fa-pencil-square-o"></span>
						</span>
						</a>
					</td>
					<td style="text-align: center;">
					<a href="../controller/eliminarEquipo.php?id=<?php echo $mostrar[0]; ?>"
					class="table__item__link">
						<span class="btn btn-danger btn-sm" >
						<span class="fa fa-trash"></span>
						</span>
						</a>
					</td>
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

<script src="../controller/confirmacion.js"></script>

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