<?php

class LoginModel {
    
    protected $db;
    
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db= SPDO::singleton();
    } // constructor
    
    public function isClient($nick,$pass){
        $consulta=$this->db->prepare('call sp_is_client('.$nick.','.$pass.')');        
        $consulta->execute();        
        $id = 0;
        if (sizeof($consulta) >= 1) {
            $id = $consulta['idClient'];
        } else {
            $id = -1;
        }
        return $id;
       
        
    } // listar
    
} // fin clase

?>

