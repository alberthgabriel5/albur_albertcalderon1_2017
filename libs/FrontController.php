<?php

class FrontController {

    static function main() {
        require 'libs/View.php';
        require 'libs/configuration.php';
        
        
            if (isset($_GET['controlador']) == 'login') {
                echo '+++++++++++++';
                $user = $_POST['txtUser'];
                $password = $_POST['txtPassword'];
                $controllerName = new LoginController();
                if (strlen($user) > 2 && strlen($password) > 2) {
                    $client = $controllerName->isClient($user, $password);

                    if ($client != -1) {
                        session_start();
                        $_SESSION['idUser'] = $client;

                        echo 'session start';
                        include 'index.php';
                    } else {
                        echo 'no session';
                        include 'indexView.php';
                    }
                }
            }
        

        if (@session_start() == true) {
            if (isset($_SESSION["idUser"])) {
                echo 'session started';
            }else{
           
    
                echo 'cccccccccccccc';

            
            }
        }
        if (!empty($_GET['controlador']))
            $controllerName = $_GET['controlador'] . 'Controller';
        else
            $controllerName = 'ItemsController';
//                $controllerName='IndexController';

        if (!empty($_GET['accion']))
            $nombreAccion = $_GET['accion'];
        else
            $nombreAccion = 'listar';


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