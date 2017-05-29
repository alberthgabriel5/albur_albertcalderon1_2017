<?php

class ItemsModel {
    
    protected $db;
    
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db= SPDO::singleton();
    } // constructor
    
    public function listar(){
        $consulta=$this->db->prepare('call sp_listar()');
        $consulta->execute();
        
        return $consulta;
        
    } // listar
    
} // fin clase

?>

