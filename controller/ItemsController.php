<?php
class ItemsController {
    
    private $view;
    
    public function __construct() {
        $this->view = new View();
    } // constructor
    
     public function listar(){
         
         
         if (@$_SESSION['user'] == 1) {
             if (isset($_GET['controlador']) && $_GET['controlador']= 'producto'){
             }
             
            $this->view->show('admin/indexView.php');
            
        }else
        if (@$_SESSION['user'] == 2) {
            $this->view->show('client/indexView.php');
        }else
        if (@$_SESSION['user'] == 3) {

            $this->view->show('socio/indexView.php');
        }     
        else {
//            $this->view->show('indexView.php');
            $this->view->show('indexView.php');
        }
    } // listar
} // fin clase

?>
