<?php
include 'poo/typeProduct.php';

/**
 * Descripcion de TypeProductData
 * Clase donde se realizan las conexiones con la base de datos, 
 * para llevar a cabo el CRUD que corresponde a tipo de productos 
 * @author Alberth Calderon Alvarado
 */
class TypeProductModel {

   
    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';

        $this->db = SPDO::singleton();
    }
// constructor

    /*     * *
     * Función que permite el registro de los tipos de productos en la base de datos
     * primeo consulta el id para crear un consecutivo y luego registra el nuevo
     */

    public function insertTypeProduct($typeProduct) {
try{
            $tsql = "sp_insert_tipo_producto '?';";

            $GetResult = $this->db->prepare($tsql);
            $GetResult->execute(array($typeProduct));

            if ($GetResult === false) {
                return false;
            } else {
                return true;
            }
        } catch (Exception $e) {
            die(print_r($e->getMessage()));
        }
    


    }//fin function insertProduct
    
    
    /**
     * metodo para consultar si existe el dato ya registrado en la base de datos
     * @param type $nameTypeProduct nombre del nuevo tipo de producto
     * @return type regresa
     */

    public function isExist($nameTypeProduct) {

        $query = "select count(nombre_tipo_producto) as total from tb_tipo_producto where nombre_tipo_producto='" . $nameTypeProduct . "';";
        $resultID = sqlsrv_query($this->conn, $query);
        //Se consulta por el ultimo id registrado para generar el consecutivo
        $exist = 'NoExiste';
        while ($total = sqlsrv_fetch_array($resultID)) {

            if ($total['total'] >= 1) {
                $exist = 'Existe';
            }
        }
        return $exist;
    }

    /*
     * Función que permite la obtención de todos los registro de 
     * producto de la base de datos
     */

    public function getTypeProduct() {

        $query = 'sp_get_tipos_de_productos;';
        $stmt = sqlsrv_query($this->conn, $query);
        $array = array();
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $currentData = new typeProduct();
            $currentData->setIdTypeProduct($row['id']);
            $currentData->setNameTypeProduct($row['nombre']);
            array_push($array, $currentData);
        }
        sqlsrv_free_stmt($stmt);



        return $array;
    }
//fin función getTypeProducts



    /*
     * Función que permite la actualización de un tipo de producto en la base de datos
     */
    public function updateTypeProduct($typeProduct) {


        $query = "sp_update_tipo_producto "
                . $typeProduct->getIdTypeProduct() . ",'"
                . $typeProduct->getNameTypeProduct() . "';";
        $queryUpdate = sqlsrv_query($this->conn, $query);  
        if ($queryUpdate) {
            return true;
        } else {
            return false;
        }
    }

    //fin función updateTypeProduct

    /*
     * Función que permite realizar la eliminación de algun registro en la base de datos
     */

    /* public function deleteTypeProduct($idTypeProduct) {
      $info = array('Database' => $this->db, 'UID' => $this->user, 'PWD' => $this->password);
      $conn = sqlsrv_connect($this->server, $info);
      /**$conn = new mysqli($this->server, $this->user, $this->password, $this->db);
      $conn->set_charset('utf8');
      //Se realiza la eliminación en la base de datos
     * 
      $query = "update tb_tipo_producto set active=0 where idtypeproduct = "
      . $idTypeProduct . ";";

      $queryDelete=sqlsrv_query($conn,$query);
      mysqli_close($conn);

      if ($queryDelete) {
      return true;
      } else {
      return false;
      }
      }

      //fin función deleteTypeProduct */
}
