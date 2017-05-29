<?php
    require 'libs/Config.php';
    $config= Config::singleton();
    $config->set('controllerFolder','controller/');
    $config->set('modelFolder', 'model/');
    $config->set('viewFolder', 'view/');
    
//    $config->set('dbhost', '163.178.107.130');
//    $config->set('dbname', 'lenguajes_b21190');
//    $config->set('dbuser', 'adm');
//    $config->set('dbpass', 'saucr.092');
    
    $config->set('dbhost', '127.0.0.1');
    $config->set('dbname', 'mgasoluciones');
    $config->set('dbuser', 'root');
    $config->set('dbpass', '');
    
    
    
?>

