<?php

include 'poo/supplier.php';

class ProveedorModel {

    protected $db;

    public function __construct() {
        require_once 'libs/SPDO.php';

        $this->db = SPDO::singleton();
    }
    
    
    
    function insertProveedor($proveedor) {
        
        try {
            $tsql = 'sp_insert_proveedor ?,?,?;';

            $params = array($proveedor->getNameSupplier(),
                $proveedor->getEmailSupplier(),
                $proveedor->getTelephoneSupplier());
            $stmt = $this->db->prepare($tsql);
            $stmt->execute($params);
//            $Imagen =1;
//            $InsertReview->BindColumn(1,$Imagen,PDO :: PARAM_LOB,0,PDO :: SQLSRV_ENCODING_BINARY);
//            $InsertReview-> fetch (PDO :: FETCH_BOUND); 
//            $imagen = $stmt->fetch(PDO::FETCH_ASSOC);
//            IF ($imagen === 1) {
                return TRUE;
//            } else {
//                return FALSE;
//            }
        } catch (Exception $e) {
            die(print_r($e->getMessage()));
        }
    }

//fin function insertProduct
    /*
     * Función que permite la obtención de todos los registro de 
     * producto de la base de datos
     */

    function getProveedores() {
        try {
            $tsql = "sp_get_proveedores";
            $stmt = $this->db->prepare($tsql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO :: FETCH_ASSOC);
            $array = array();

            foreach ($result as $row) {
                $currentData = new supplier();
                $currentData->setIdSupplier($row['id']);
                $currentData->setNameSupplier($row['nombre']);
                $currentData->setEmailSupplier($row['email']);
                $currentData->setTelephoneSupplier($row['telefono']);                
                array_push($array, $currentData);
            }


            return $array;
        } catch (Exception $e) {
            die(print_r($e->getMessage()));
        }
    }

    /*
     * Función que permite la obtención de todos los registro de 
     * producto de la base de datos
     */

    function getProveedor($id) {
        try {
            $tsql = "sp_get_proveedor";
            $stmt = $this->db->prepare($tsql);
            $stmt->execute(array($id));
            $result = $stmt->fetchAll(PDO :: FETCH_ASSOC);
            $array = array();

            foreach ($result as $row) {
                $currentData = new supplier();
                $currentData->setIdSupplier($row['id']);
                $currentData->setNameSupplier($row['nombre']);
                $currentData->setEmailSupplier($row['email']);
                $currentData->setTelephoneSupplier($row['telefono']);                
                array_push($array, $currentData);
            }
            sqlsrv_free_stmt($stmt);
            return $array;
        } catch (Exception $e) {
            die(print_r($e->getMessage()));
        }
    }

    /*
     * Función que permite la actualización de un producto en la base de datos
     */

    function updateProveedor($proveedor) {
        try {
            $tsql = 'sp_update_proveedor ?,?,?,?';         
                
               $params = array($proveedor->getIdSupplier(),$proveedor->getNameSupplier(),
                $proveedor->getEmailSupplier(),
                $proveedor->getTelephoneSupplier());
            $InsertReview = $this->db->prepare($tsql);
            $InsertReview->execute($params);
//            $Imagen =1;
//            $InsertReview->BindColumn(1,$Imagen,PDO :: PARAM_LOB,0,PDO :: SQLSRV_ENCODING_BINARY);
//            $InsertReview-> fetch (PDO :: FETCH_BOUND); 
            //$imagen = $InsertReview->fetch(PDO::FETCH_ASSOC);
//            IF ($imagen === 1) {
                return TRUE;
//            } else {
//                return FALSE;
//            }
        } catch (Exception $e) {
//            return FALSE;
            die(print_r($e->getMessage()));
        }
    }


}
