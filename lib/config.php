<?php
 require_once 'php-activerecord/ActiveRecord.php';
 
 ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory('../modelo');
     $cfg->set_connections(array(
         'development' => 'mysql://root:@localhost/ejemplofinal'));
 });