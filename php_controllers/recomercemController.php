<?php 

session_start();
require_once('../php_libraries/bd.php');

    if(isset($_POST['crearCuenta']))
    {

        if($_POST['nombre'] == "" || $_POST['email'] == "" || $_POST['confirm_contr'] == "" || $_POST['contr'] == ""){
                $user['nombre'] = $_POST['nombre'];
                $user['mail'] = $_POST['email'];
                $_SESSION['user'] = $user;
            
                $_SESSION['error'] = "Porfavor, rellene todos los datos.";
                header("Refresh:0; url = '../frontend/CreateAcount.php'");
                
                
        }else{
            if ($_POST['confirm_contr'] == $_POST['contr']) {

                $contr = $_POST['contr'];
                $contrEncriptada = encryption($contr);
    
    
                insertUsuario($_POST['nombre'], $_POST['email'], $contrEncriptada);
    
                if (isset($_SESSION['error'])) {
                    header('Location: ../frontend/CreateAcount.php');
                    exit();
                }else{
                    $_SESSION['mensaje'] = "La cuenta ha sido creada correctamente.";
                    header('Location: ../index.php');
                    exit();
    
                }
                
                
            }else{
                $_SESSION['error'] = "Las contraseñas no son iguales";
                header('Location: ../frontend/CreateAcount.php');
                

            }
        }

        
        
        

    }




    if(isset($_POST['login']))
    {
        login();
    }



    function login(){
        $usuarios = selectUsuarios();
        $contr = encryption($_POST['contr_login']);
        $login = false;
        

        foreach ($usuarios as $usu)
        {
            if ($usu['mail'] == $_POST['mail_login'] && $usu['contr'] == $contr) {
                $login = true;
                $usuario = $usu;
            }
    
        }
        
        if ($login == true) {
            $_SESSION['login'] = true;
            $_SESSION['user_loged'] = $usuario;
            $_SESSION['mensaje'] = "Bienvenido " . $usuario['nom_usuario'] . ".";

            if ($usuario['admin'] == 1) {
                $_SESSION['admin'] = true;
            }

            header('Location: ../index.php');
            exit();
        }

        $_SESSION['error'] = "Usuario y/o contraseña incorrectos.";
            header('Location: ../frontend/logIn.php');
            exit();

    }


	
	function encryption($string){
        $METHOD = 'AES-256-CBC';
        $SECRET_KEY = '$RECOMERCEM@2021';
        $SECRET_IV = 526341;

			$output=FALSE;
			$key=hash('sha256', $SECRET_KEY);
			$iv=substr(hash('sha256', $SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, $METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
    }
        
	function decryption($string){
        $METHOD = 'AES-256-CBC';
	    $SECRET_KEY = '$RECOMERCEM@2021';
	    $SECRET_IV = 526341;

			$key=hash('sha256', $SECRET_KEY);
			$iv=substr(hash('sha256', $SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), $METHOD, $key, 0, $iv);
			return $output;
	}





?>