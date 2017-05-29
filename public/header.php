<!DOCTYPE html>
<html lang="es">

<head>
	<title>Estructura B&aacute;sica</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Primer sitio con html 5" />
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="public/css/estilo.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="public/img/icono.ico"/>        
</head>

<body>
    <header>
        <h1>
            <a href="index.php">
                <img class="fade" alt="Proyecto Lenguajes" src="public/img/logo.png"/>
            </a>
        </h1>
        
        
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="?formulario">Formulario</a></li>
                <li><a href="?consulta">Consulta</a></li>
                <li><a href="ejemplojs.html">JavaScript</a></li>
            </ul>
        </nav>
        
        
    </header>
        <?php
        if (@session_start() == true) {
            if (isset($_SESSION["idUser"])) {
                ?>
                <?php
//                include 'Data/Frecuency.php';
//                $frecuency = new Frecuency();
//                $result = $frecuency->createFrecuency();
                ?>
               
                <?php
            } else {
                ?>
                
                <div>Usuario predeterminado: usuario = admin contraseña = admin</div>
                <br>
                <form id="frmLogin" method="POST" action="?login">
                    <label id="lblUser">Usuario:&emsp;</label>
                    <input type="text" id="txtUser" name="txtUser"/><br><br>
                    <label id="lblUser">Contraseña:</label>
                    <input type="text" id="txtPassword" name="txtPassword"/><br><br>
                    <input type="submit" id="btnAccept" name="btnAccept" value="Iniciar sesión"/><br>
                    <input type="hidden" id="option" name="option" value="login">
                    <label id="txtMessage"></label>
                </form>
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