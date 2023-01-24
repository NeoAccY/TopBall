<?php

$fallo='';
session_start();

if(!empty($_POST)){

    $user = ($_POST['user']);
    $pass = ($_POST['pass']);
    // $error = array();
    if (empty($user) && empty($pass)) {
        $fallo = "Ingrese usuario y contraseña.";
        // array_push($error, $fallo);
    } elseif (empty($user)) {
        $fallo = "Ingrese su usuario.";
        // array_push($error, $fallo);
    } elseif (empty($pass)){
        $fallo = "Ingrese una contraseña.";
        // array_push($error, $fallo);
    } else {

        require_once("../conexion/conexion.php");
        global $conexion;

        $user = trim($_POST['user']);
        $pass = trim($_POST['pass']);

        $sql = sprintf("SELECT usuarioAdmin.id_usuarioAdmin, usuarioAdmin.correo, usuarioAdmin.contrasena  FROM usuarioAdmin WHERE usuarioAdmin.correo = '%s' AND usuarioAdmin.contrasena = '%s'", 
        mysqli_real_escape_string($conexion, $user),
        mysqli_real_escape_string($conexion, $pass));

        $result = mysqli_query($conexion,$sql);
        $rows = mysqli_num_rows($result);

            if ($rows) {
                $array = mysqli_fetch_array($result);
                $_SESSION["id_user"] = $array["id_usuario"];
                $_SESSION["user_name"] = $array["correo"];
                // Línea Modificada

                
                    header("Location:../views/main.php");
              
                
            } else {
                $fallo = "El Usuario o Contraseña, tan malitos. Adiuuuuuuuuuuuu";
                // array_push($error,$fallo);
            }
        }
    }

?>