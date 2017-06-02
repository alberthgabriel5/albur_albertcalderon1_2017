<?php

include 'poo/Product.php';

class FacturaModel {

    protected $db;

    public function __construct() {
        require_once 'libs/SPDO.php';

        $this->db = SPDO::singleton();
    }
    
    function insertFactura($factura) {

        try {
            $tsql = 'sp_insert_producto ?,?,?,?,?,?,?;';

            $params = array($factura->getName(),
                $factura->getBrand(),
                $factura->getModel(),
                $factura->getSerie(),
                $factura->getDescription(),
                $factura->getTypeProduct(),
                $factura->getPrice());
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

    function getProducts() {
        try {
            $tsql = "sp_get_productos";
            $stmt = $this->db->prepare($tsql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO :: FETCH_ASSOC);
            $array = array();

            foreach ($result as $row) {
                $currentData = new Product();
                $currentData->setIdProduct($row['id']);
                $currentData->setName($row['nombre']);
                $currentData->setBrand($row['marca']);
                $currentData->setModel($row['modelo']);
                $currentData->setSerie($row['serie']);
                $currentData->setDescription($row['descripcion']);
                $currentData->setPrice($row['precio']);
                $currentData->setTypeProduct($row['tipo']);
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

    function getProduct($id) {
        try {
            $tsql = "sp_get_producto";
            $stmt = $this->db->prepare($tsql);
            $stmt->execute(array($id));
            $result = $stmt->fetchAll(PDO :: FETCH_ASSOC);
            $ResultCount = count($result);
            $array = array();
            if ($ResultCount > 0) {
                foreach ($result as $row) {
                    $currentData = new Product();
                    $currentData->setIdProduct($row['id']);
                    $currentData->setName($row['nombre']);
                    $currentData->setBrand($row['marca']);
                    $currentData->setModel($row['modelo']);
                    $currentData->setSerie($row['serie']);
                    $currentData->setDescription($row['descripcion']);
                    $currentData->setPrice($row['precio']);
                    $currentData->setTypeProduct($row['tipo']);
                    array_push($array, $currentData);
                }
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

    function updateProduct($product) {

        try {
            $tsql = 'sp_update_producto ?,?,?,?,?,?,?,?';

            $params = array(
                $product->getIdProduct(),
                $product->getName(),
                $product->getBrand(),
                $product->getModel(),
                $product->getSerie(),
                $product->getDescription(),
                $product->getTypeProduct(),
                $product->getPrice());
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