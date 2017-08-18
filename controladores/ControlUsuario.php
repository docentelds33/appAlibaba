<?php

session_start();
require_once '../modelo/Usuario.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlUsuario
 *
 * @author PROFESOR PC
 */
class ControlUsuario {

    //put your code here

    public function recuperarAccion() {
        $accion = $_REQUEST["accion"];
        switch ($accion) {
            case "Login":
                $this->iniciar_session();
                break;

            default:
                break;
        }
    }

    public function iniciar_session() {
        $id = @$_REQUEST["id"];
        $pass = @$_REQUEST["pass"];
//        $alguien = new Usuario();
        try {
            $alguien = @Usuario::find($id);
            if ($alguien != NULL) {
                if ($alguien->password == $pass) {
                    $alguien = serialize($alguien);
                    $_SESSION["usuario.login"] = $alguien;
                    header("Location: ../web/validarrol.php");
                    exit;
                } else {
                    $msg = "CLAVE INCORRECTA";
                    throw new Exception($msg);
                }
            }
        } catch (Exception $ex) {
            $msg = "USTED NO ESTA REGISTRADO";
            unset($_SESSION["usuario.login"]);
//           $_SESSION["usuario.login"] = NULL;
            header("Location: ../web/validarrol.php");
        }
    }

}

$control = new ControlUsuario();
$control->recuperarAccion();
