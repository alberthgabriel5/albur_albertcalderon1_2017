<?php
class LoginController {
    
//    private $view;
    
    public function __construct() {
        $this->view = new View();
    } // constructor
    
     public function isClient($nick,$pass){
         require 'model/LoginModel.php';
         $items=new LoginModel();
         $data=$items->isClient($nick, $pass);
         return $data;
     } // listar
} // fin clase

?>


