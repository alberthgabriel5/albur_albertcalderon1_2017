<?php

require_once 'poo/client.php';

class LoginModel {

    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';

        $this->db = SPDO::singleton();
    }

// constructor

    public function isClient($nick, $pass) {

        try {
            $tsql = 'sp_is_client ? , ? ';
            $GetResult = $this->db->prepare($tsql);
            $GetResult-> execute(array($nick , $pass));

            $result = $GetResult->fetchAll(PDO :: FETCH_ASSOC);
            $ResultCount = count($result);

            $id = array();
            $currentData = new client();
            $currentData->setIdClient(-1);
            $currentData->setUserType(-1);
            if ($ResultCount > 0) {

                foreach ($result as $consultas) {
                    $currentData->setIdClient($consultas['id']);
                    $currentData->setUserType($consultas['userType']);
                    array_push($id, $currentData);
                }
            } else {
                $currentData->setIdClient(-1);
                $currentData->setUserType(-1);
                array_push($id, $currentData);
            }

            return $id;
        } catch (Exception $e) {
            die(print_r($e->getMessage()));
        }
    }

}

// fin clase
?>

