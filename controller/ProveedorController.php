<?php
require_once 'model/ProveedorModel.php';


class ProveedorController{
    private $proveedorModel;
    public $result;
    public $proveedor;
    
    
    public function __construct() {
        $this->proveedorModel = new ProveedorModel();
    }
    
   public function listar(){
       if (isset($_GET['supplier'])) {
            $respuesta="";            
            if($_GET['supplier']=="insert"){
                $proveedor = new supplier();
                $proveedor->setNameSupplier($_POST['txtNameSupplier']);
                $proveedor->setEmailSupplier($_POST['txtEmailSupplier']);
                $proveedor->setTelephoneSupplier($_POST['txtTelSupplier']);
             
                if ($this->proveedorModel->insertProveedor($proveedor)) {
                    $respuesta = "Insertado";
                } else {
                    $respuesta = "No Insertado";
                }
            }
            if ($_GET['supplier'] == "update") {
                $proveedor = new supplier();
                $proveedor->setIdSupplier($_POST['idSupplier']);
                $proveedor->setNameSupplier($_POST['txtNameSupplier']);
                $proveedor->setEmailSupplier($_POST['txtEmailSupplier']);
                $proveedor->setTelephoneSupplier($_POST['txtTelSupplier']);
             
                if ($this->proveedorModel->updateProveedor($proveedor)) {
                    $respuesta = "Actualizado";
                } else {
                    $respuesta = "NO Actualizado";
                }
            }
                        
            $this->result = $this->proveedorModel->getProveedores();
            
            include 'view/Proveedor/SupplierView.php';
            
       }   
   } 

// constructor
}

