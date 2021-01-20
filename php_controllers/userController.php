<?php 

session_start();

require_once('../php_libraries/bd.php');

if (isset($_POST['insert'])) 
    {
        insertUsuarioAdmin($_POST['id_usuario'],$_POST['nom_usuario'],$_POST['contr'],$_POST['admin'],$_POST['puntos'],$_POST['mail']);

        if (isset($_SESSION['error'])) 
        {
            
            header('Location: ../frontend/usuario.php');
            exit();
        }
        else
        {

            header('Location: ../frontend/adminUser.php');
            exit();

        }

    }
elseif (isset($_POST['delete'])) 
    {
    deleteUsuario($_POST['id_usuario']);
    header('Location: ../frontend/adminUser.php');
    exit();

    }
elseif(isset($_POST['update']))
    {
        updateUsuarios($_POST['id_usuario'],$_POST['nom_usuario'],$_POST['contr'],$_POST['admin'],$_POST['puntos'],$_POST['mail']);
        header('Location: ../frontend/adminUser.php');
        exit();
    }


?>