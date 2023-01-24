<?php
require_once("../controller/login.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Ingresar</title>
<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>

    <form class="formulario" action="loginV.php" method="POST">
            <?php
        // if (count($error) > 0) {
            if($fallo != '') {
            // for ($i=0; $i < count($error); $i++) { 
                echo'<div class="error"> • '.$fallo.'</div>';
            // }
        }
            ?>
        
            

                <h1>Inicio de Sesión</h1>
    <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <label for="Usuario" class="text">Usuario</label>
                <input type="text" id="user" name="user" placeholder="Ingrese su Usuario" value="<?php if (isset($user)) echo $user ?>"/>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <label for="Contraseña" class="text">Contraseña</label>
                <input type="password" id="pass" name="pass" placeholder="Ingrese su Contraseña" value="<?php if(isset($pass)) echo $pass ?>"/>
            </div>
                <button class="button" type="submit" name="Ingresar">Ingresar</button>
            </form>
    </div>

</body>
</html>