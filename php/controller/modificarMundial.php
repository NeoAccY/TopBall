<?php 

require_once("../conexion/conexion.php");
require_once "../controller/actMundial.php";
global $conexion;
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tabla Mundiales</title>
	<link rel="stylesheet" type="text/css" href="../../css/estilos3.css">
</head>
<body>

 <!-- CSS only -->
 <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../librerias/datatable/dataTables.bootstrap4.min.css">
<form action="procesar_actualizarM.php" method="POST">
<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
                <td>Numero Mundial</td>
				<td>Nombre</td>
				<td>Fecha</td>
                <td>Pais</td>
                <td>Balon</td>
				<td>Actualizar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
                <td>Numero Mundial</td>
				<td>Nombre</td>
				<td>Fecha</td>
                <td>Pais</td>
                <td>Balon</td>
				<td>Actualizar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><input type="hidden" value="<?php echo $mostrar[0]?>" name="id_mundiales" ></td>
                    <td><input type="text" value="<?php echo $mostrar[1]?>" name="nombre" ></td>
                    <td><input type="date" value="<?php echo $mostrar[2]?>" name="fecha" ></td>
                    <td><input type="text" value="<?php echo $mostrar[3]?>" name="pais" ></td>
                    <td><input type="text" value="<?php echo $mostrar[4]?>" name="balon" ></td>
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