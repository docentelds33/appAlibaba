<?php
session_start();
require_once '../modelo/Usuario.php';
$alguien = @$_SESSION["usuario.login"];
$alguien = @unserialize($alguien);
if($alguien != NULL){
    if($alguien->rol == "Estudiante"){
//       echo "ES UN ESTUDIANTE ";
        header("Location: estudiantes/menu.php");
    }  else if($alguien->rol == "admin"){
        header("Location: admin/menu.php");
//        echo "ES UN ADMIN ";
    }
    else{
       echo "DEBE LOGIN";
    }
}
else{
    echo "NO ESTA REGITRADO";
}