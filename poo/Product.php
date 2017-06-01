<?php

/**
 * Description of Product
 *
 * @author Alberth
 */
class Product {

    private $idProduct;
    private $brand;
    private $name;
    private $model;
    private $serie;
    private $price;    
    private $description;    
    private $typeProduct;

    

    public function Product() {
        $this->brand = "Marca";
        $this->model = "Modelo";
        $this->price = 0;      
        $this->description ="Descripcion";
        $this->name = "Nombre";
        $this->serie = "Serie";
        $this->typeProduct =0;
        $this->typeProductName ="0";
       
    }

    static function ProductInvoice($brand, $model, $price) {
        
        return new self($brand,$model,$price,"","","","","");
       
    }
    
    static function ProductCar($idProduct,$brand, $model, $serie, $price, $name) {
        
        return new self($brand,$model,$price,"",$idProduct,$name,"",$serie);
       
    }

    public function getIdProduct() {
        return $this->idProduct;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getName() {
        return $this->name;
    }

    public function getModel() {
        return $this->model;
    }

    public function getSerie() {
        return $this->serie;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getTypeProduct() {
        return $this->typeProduct;
    }

   

    public function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setTypeProduct($typeProduct) {
        $this->typeProduct = $typeProduct;
    }

    



 

}
