<?php
require $_SERVER["DOCUMENT_ROOT"].  '/ejemplologin/lib/config.php';
require_once 'Estudiante.php';

class Usuario extends ActiveRecord\Model{
    static $belongs_to = array(array("Estudiante"));
}
