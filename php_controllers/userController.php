<?php 

session_start();

require_once('../php_libraries/bd.php');

if (isset($_POST['insert'])) 
    {
        if($_POST['nom_usuario'] == "" || $_POST['contr'] == "" || $_POST['admin'] == "" ||  $_POST['puntos'] == "" || $_POST['mail'] == "")
        {
            $usuarios['nom_usuario'] = $_POST['nom_usuario'];
            $usuarios['contr'] = $_POST['contr'];
            $usuarios['admin'] = $_POST['admin'];
            $usuarios['puntos'] = $_POST['puntos'];
            $usuarios['mail'] = $_POST['mail'];
            $_SESSION['usuario'] = $usuarios;
        
 
            header("Refresh:0; url = '../frontend/usuario.php'");
            
            
        }
        else
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