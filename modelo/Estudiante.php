<?php
require $_SERVER["DOCUMENT_ROOT"].  '/ejemplologin/lib/config.php';
require_once 'Usuario.php';
require_once 'Programa.php';

class Estudiante extends ActiveRecord\Model{
    static $has_one   = array(
                                array("Usuario") , 
                                 array("Programa")
                            );
}
