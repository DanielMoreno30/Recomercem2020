<?php 

require_once('../php_libraries/bd.php');

    if(isset($_POST['crearCuenta']))
    {

        insertUsuario($_POST['nombre'], $_POST['email'], $_POST['confirm_contr']);

        header('Location: index.html');
        exit();

    }





?>