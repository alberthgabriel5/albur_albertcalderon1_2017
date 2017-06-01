<?php

class ItemsModel {
    
    protected $db;
    
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db= SPDO::singleton();
    } // constructor
    
    public function listar(){
        
        
        return null;
        
    } // listar
    
} // fin clase

?>

