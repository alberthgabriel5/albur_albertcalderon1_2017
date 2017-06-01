<?php

require_once 'POO/client.php';
require_once 'model/TypeProductModel.php';
require_once 'model/ProductModel.php';

class FrontController {
    public $result;
    public $products;   
    

    public static function main() {
        require 'libs/View.php';
        require 'libs/configuration.php';
        require_once 'controller/LoginController.php'; 
        $controllerName='ItemsController';
        $nombreAccion = 'listar';

        if (@session_start() == true) {
            if (isset($_SESSION["idClient"])) {
                //echo $_SESSION["idClient"].','.$_SESSION['user'];

                if (isset($_GET['logout'])) {
                    
                    $_SESSION['idClient'] = 0;
                    $_SESSION['user'] = 0;
                    session_destroy();                    
                    header('location: ./index.php');                    
                }
                if (@$_SESSION['user'] == 1) {
                    
                    
                    
                    if(isset($_GET['tipoProducto'])){
            $respuesta="";                   
            $respuesta="";     
            $controllerName ='Producto';
            
            $nombreAccion = 'listar';
            
        }else if (isset($_GET['producto'])) {
            $respuesta="";     
            $controllerName ='Producto';
            
            $nombreAccion = 'listar';
            
            
            
        }
                }else
                if (@$_SESSION['user'] == 2) {
                    if (!empty($_GET['controlador']) && $_GET['controlador'] != 'logout')
                        $controllerName = $_GET['controlador'] . 'Controller';
                }else
                if (@$_SESSION['user'] == 3) {
                    if (!empty($_GET['controlador']) && $_GET['controlador'] != 'logout')
                        $this->controllerName = $_GET['controlador'] . 'Controller';
                } else
                if (@$_SESSION['user'] == 3) {
                    if (!empty($_GET['controlador']) && $_GET['controlador'] != 'logout')
                        $this->controllerName = $_GET['controlador'] . 'Controller';
                }
            } else {


                if (isset($_GET['login'])) {                    
                    $user = $_POST['txtUser'];
                    $password = $_POST['txtPassword'];
                    $controllerName = new LoginController();
                    if (strlen($user) > 2 && strlen($password) > 2) {
                        $client = $controllerName->isClient($user, $password);

                        if ($client != -1) {
                            @session_start();
                            $_SESSION['idClient'] = $client[0]->getIdClient();
                            $_SESSION['user'] = $client[0]->getUserType();
                            
                            echo$_SESSION['idClient'] .'<br>'.$_SESSION['user'];

                            if ($_SESSION['user'] == 1) {
                                header('location: ./view/admin/indexView.php');
                            }
                            if ($_SESSION['user'] == 2) {
                                header('location: ./view/client/indexView.php');
                            }
                            if ($_SESSION['user'] == 3) {

                                header('location: ./view/socio/indexView.php');
                            }
                           

                            header('location: ./index.php');
                        } else {
//                            echo 'no session';
                            include_once 'indexView.php';
                        }
                    }
            }
                       
            if (isset($_GET['producto'])) {
            $respuesta="";  
            $controllerName='Producto';
            $nombreAccion = 'listar';
            
            
        }}
            
        if (isset($_GET['producto'])) {
            $respuesta="";
            $controllerName='Producto';
            $nombreAccion = 'listar';
        }elseif (!empty($_GET['controlador']) && $_GET['controlador'] != 'login')
                    $this->controllerName = $_GET['controlador'] . 'Controller';
                            
                
                
//            }
            
        }


        
            


        $rutaControlador = $config->get('controllerFolder') . $controllerName . '.php';

        if (is_file($rutaControlador))
            require $rutaControlador;
        else
            die('Controlador no encontrado - 404 not found');

        if (is_callable(array($controllerName, $nombreAccion)) == FALSE) {
            trigger_error($controllerName . '->' . $nombreAccion . ' no existe', E_USER_NOTICE);
            return FALSE;
        }
        $controller = new $controllerName();
        $controller->$nombreAccion();
    }

// main
}

?>