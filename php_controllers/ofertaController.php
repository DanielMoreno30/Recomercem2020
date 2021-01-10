<?php 

require_once('../php_libraries/bd.php');

if (isset($_POST['insert'])) 
    {
        insertOferta($_POST['id_restaurante'],$_POST['id_oferta'],$_POST['nombre'],$_POST['puntos'],$_POST['codigo']);
        header('Location: ../frontend/administracion.php');
        exit();

    }
elseif (isset($_POST['delete'])) 
    {
    deleteOferta($_POST['id_oferta'],$_POST['id_restaurante']);
    header('Location: ../frontend/administracion.php');
    exit();

    }


?>