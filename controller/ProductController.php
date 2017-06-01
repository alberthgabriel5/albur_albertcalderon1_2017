<?php

require 'model/DefaultModel.php';
require 'model/TypeProductModel.php';
require 'model/ProductModel.php';

class ProductController {
    
    private $model;
    private $tipoProductoModel;
    private $productoModel;
    public $result;
    public $products;


    public function __construct() {
        $this->model=new DefaultModel();
        $this->tipoProductoModel=new TypeProductModel();
        $this->productoModel=new ProductModel();
        
    } // constructor
    
    public function listar(){
        echo "**************<br><br><br>";
        if(isset($_GET['tipoProducto'])){
            $respuesta="";                   
                
            
            if($_GET['tipoProducto']=="registrar"){
                if($this->tipoProductoModel->insertTypeProduct($_POST['txtNameTypeProductInsert']))
                    $respuesta="Insertado";
                else 
                    $respuesta="No Insertado";
            }
            if ($_GET['tipoProducto'] == "actualizar") {
                $typeProduct = new typeProduct();
                $typeProduct->setIdTypeProduct($_POST['idType']);
                $typeProduct->setNameTypeProduct($_POST['txtNameType']);
                if ($this->tipoProductoModel->updateTypeProduct($typeProduct)) {
                    $respuesta = "Actualizado";
                } else {
                    $respuesta = "NO Actualizado";
                }
            }
            $this->result = $this->tipoProductoModel->getTypeProduct();
            include 'view/TypeProduct/typeProductInterface.php';
            
        }elseif (isset($_GET['producto'])) {
            $respuesta="";            
            if($_GET['producto']=="registrar"){
                $product = new Product();
                $product->setName($_POST['txtNameProduct']);
                $product->setBrand($_POST['txtBrand']);
                $product->setModel($_POST['txtModel']);
                $product->setSerie($_POST['txtSerie']);                
                $product->setDescription($_POST['txtDescription']);
                $product->setPrice($_POST['txtPrice']);
                $product->setTypeProduct($_POST['cbTypeProduct']);
                if ($this->productoModel->insertProduct($product)) {
                    $respuesta = "Insertado";
                } else {
                    $respuesta = "No Insertado";
                }
            }
            if ($_GET['producto'] == "actualizar") {
                $product = new Product();
                $product->setIdProduct($_POST['idProduct']);
                $product->setName($_POST['txtName']);
                $product->setBrand($_POST['txtBrand']);
                $product->setModel($_POST['txtModel']);
                $product->setSerie($_POST['txtSerie']);                
                $product->setDescription($_POST['txtDescription']);
                $product->setPrice(str_replace(",", "", $_POST['txtPrice']));
                $product->setTypeProduct($_POST['cbTypeProduct2']);
                if ($this->productoModel->updateProduct($product)) {
                    $respuesta = "Actualizado";
                } else {
                    $respuesta = "NO Actualizado";
                }
            }
            
            
            $this->result = $this->tipoProductoModel->getTypeProduct();            
            $this->products = $this->productoModel->getProducts();            
            include 'view/Product/ProductView.php';
            
        }else{
            include 'view/indexView.php';
        } // if-else 
        
        
    } // invoke
    
} // fin clase

?>
