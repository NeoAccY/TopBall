<?php 
    session_start();
    
    require_once "../conexion/conexionD.php";
    global $conexionD;

    if (!empty($_POST['nombre'])&& !empty($_POST['pais_representante'])) {
        $sql = "INSERT INTO equipo (nombre,pais_representante) VALUES (:nombre,:pais_representante)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':pais_representante', $_POST['pais_representante']);
    
        if ($stmt -> execute()) {
          $message = 'Registrado con exito :D';
        } else {
          $message = 'Lo sentimos, hay algun error :(';
        }
      }

?>
<head>
<title>Formulario Equipo</title>
<link rel="stylesheet" type="text/css" href="../../css/formStyles.css">
</head>

<body>

<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

<section class="form-register">
    <form class="formulario" name="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="row justify-content-center align-content-center text-center">
    <a class="botons" style="margin-left: 135px;" href="../views/tablaEquipoA.php">Ver Tabla de Equipos</a>
    
    <h4 style="margin-left: 100px;" >Registro Nuevo Equipo</h4>
    </div>
        <input class="controls" type="text" name="nombre" placeholder="Ingrese el Equipo">
        <input class="controls" type="text" name="pais_representante" placeholder="Ingrese el pais que representa">
        <input class="botons" type="submit" value="Registrar">
    </form>
  </section>
</body>
