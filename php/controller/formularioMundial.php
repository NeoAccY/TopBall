<?php 
    session_start();
    
    require_once "../conexion/conexionD.php";
    global $conexionD;

    if (!empty($_POST['nombre'])&& !empty($_POST['fecha'])&& !empty($_POST['pais'])&& !empty($_POST['balon'])) {
        $sql = "INSERT INTO mundiales (nombre, fecha, pais, balon) VALUES (:nombre, :fecha, :pais, :balon)";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':fecha', $_POST['fecha']);
        $stmt->bindParam(':pais', $_POST['pais']);
        $stmt->bindParam(':balon', $_POST['balon']);
    
        if ($stmt -> execute()) {
          $message = 'Registrado con exito :D';
        } else {
          $message = 'Lo sentimos, hay algun error :(';
        }
      }

?>
<head>
    <title>Formulario Mundial</title>
<link rel="stylesheet" type="text/css" href="../../css/formStyles.css">
</head>
<body>

<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

<section class="form-register">
    <form class="formulario" name="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="row justify-content-center align-content-center text-center">
    <a class="botons" style="margin-left: 150px;" href="../views/tablaMundialesA.php">Ver Tabla Mundial</a>
    
        <h4 style="margin-left: 100px;" >Registro Nuevo Mundial</h4>
    </div>
        <input class="controls" type="text" name="nombre" placeholder="Nombre del mundial">
        <input class="controls" type="date" name="fecha" placeholder="Ingrese la fecha del mundial">
        <input class="controls" type="text" name="pais" placeholder="Pais del mundial">
        <input class="controls" type="text" name="balon" placeholder="Balon utilizado">
        <input class="botons" type="submit" value="Registrar">
    </form>
  </section>
</body>
