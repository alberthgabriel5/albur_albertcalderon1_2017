<?php

/* 
 * Descripcion de Tipo de producto
 * Clase donde se maneja el objeto tipo de producto,
 * @author Alberth Calderon Alvarado
 */
class typeProduct {

    private $idTypeProduct;
    private $nameTypeProduct;
    
    public function __construct() {
        $this->idTypeProduct=0;
        $this->nameTypeProduct="";
    }

    public function getIdTypeProduct() {
        return $this->idTypeProduct;
    }

    public function getNameTypeProduct() {
        return $this->nameTypeProduct;
    }

    public function setIdTypeProduct($idTypeProduct) {
        $this->idTypeProduct = $idTypeProduct;
    }

    public function setNameTypeProduct($nameTypeProduct) {
        $this->nameTypeProduct = $nameTypeProduct;
    }

    public function __toString() {
        return "id: ".$this->idTypeProduct.", nombre: ".$this->nameTypeProduct;
    }


    
}
