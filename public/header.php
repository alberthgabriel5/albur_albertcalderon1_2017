<!DOCTYPE html>
<html lang="es">

    <head>
        <title >Albur Store</title>
        <meta charset="utf-8"/>
        <meta name="description" content="Tienda Online" />
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="public/css/estilo.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="public/img/cash_512.ico"/>        
    </head>

    <body>
        <header>
            <h1>
                <a href="index.php">
                    <img class="fade" alt="Proyecto Lenguajes" src="public/img/logo2.png"/>
                </a>

            </h1>


            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>               

                    <?php
                    if (@session_start() == true) {
                        if (isset($_SESSION["idClient"])) {
                            if ($_SESSION['user'] == 1) {
                                ?>
                                <li><a href="?tipoProducto">Tipo de Producto</a></li>
                                <li><a href="?producto">Producto</a></li>
                                <li><a href="?supplier">Proveedor</a></li>
                                <?php
                            } else
                            if ($_SESSION['user'] == 2) {
                                ?> <?php
                            } else
                            if ($_SESSION['user'] == 3) {
                                ?> 
                                <li><a href="?producto">Producto</a></li>
                                    <?php
                }
                            ?>
                            <li><a href="?logout">Cerrar</a>

                        </ul>
                    </nav>


                </header>
        <?php
//                include 'Data/Frecuency.php';
//                $frecuency = new Frecuency();
//                $result = $frecuency->createFrecuency();
        ?>

                <?php
            } else {
                ?>
            <li><a href="?producto">Producto</a></li>


            <li>
                <form id="frmLogin" method="POST" action="?login">
                    <label id="lblUser"></label><label id="lblUser"></label>
                    <input type="text" id="txtUser" name="txtUser" placeholder="Usuario" /> &nbsp;                    
                    <input type="password" id="txtPassword" placeholder="Contraseña" name="txtPassword"/>
                    <input type="submit" id="btnlogin" name="btnlogin" value="Ingresar"/>
                    <input type="hidden" id="option" name="option" value="login">
                    <label id="txtMessage"></label>
                </form>
            </li>
        </ul>
        </nav>
        <br><br>
        <?php
    }
}
?>
<?php
if (isset($_GET['errorData'])) {
    echo ' <script>                
               document.getElementById("txtMessage").innerHTML = "Error el usuario no existe";
           </script>';
}
?>

<section id="contenido">
    <section id="principal">