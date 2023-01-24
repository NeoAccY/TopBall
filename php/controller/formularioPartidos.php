<?php 
    session_start();
    
    require_once "../conexion/conexionD.php";
    global $conexionD;

    if (!empty($_POST['nombre'])&& !empty($_POST['equipo1'])&& !empty($_POST['equipo2'])&& !empty($_POST['favorito'])&& !empty($_POST['tiempos'])) {
        $sql = "INSERT INTO partidos (nombre, equipo1, equipo2, favorito, tiempos) VALUES (:nombre, :equipo1, :equipo2, :favorito, :tiempos)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':equipo1', $_POST['equipo1']);
        $stmt->bindParam(':equipo2', $_POST['equipo2']);
        $stmt->bindParam(':favorito', $_POST['favorito']);
        $stmt->bindParam(':tiempos', $_POST['tiempos']);
    
        if ($stmt -> execute()) {
          $message = 'Registrado con exito :D';
        } else {
          $message = 'Lo sentimos, hay algun error :(';
        }
      }

?>

<head>
<title>Formulario Partidos</title>
<link rel="stylesheet" type="text/css" href="../../css/formStyles.css">
</head>

<body>

<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

<section class="form-register">
    <form class="formulario" name="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="row justify-content-center align-content-center text-center">
    <a class="botons" style="margin-left: 135px;" href="../views/tablaPartidosA.php">Ver Tabla de Partidos</a>
    
    <h4 style="margin-left: 100px;" >Registro Nuevo Partido</h4>
    </div>
        <input class="controls" type="text" name="nombre" placeholder="Nombre de encuentro">
        <input class="controls" type="text" name="equipo1" placeholder="Equipo contendiente">
        <input class="controls" type="text" name="equipo2" placeholder="Equipo contrincante">
        <input class="controls" type="text" name="favorito" placeholder="Equipo con mayor apuesta">
        <input class="controls" type="text" name="tiempos" placeholder="Tiempos del partido">
        <input class="botons" type="submit" value="Registrar">
    </form>
  </section>
</body>
