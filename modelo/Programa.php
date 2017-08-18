<?php
require $_SERVER["DOCUMENT_ROOT"].  '/ejemplologin/lib/config.php';
class Programa extends ActiveRecord\Model{
    static $has_many = array(array("estudiantes"));
}
