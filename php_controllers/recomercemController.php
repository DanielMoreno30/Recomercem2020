<?php 

require_once('../php_libraries/bd.php');

    if(isset($_POST['crearCuenta']))
    {

        if($_POST['nombre'] == "" || $_POST['email'] == "" || $_POST['confirm_contr'] == "" || $_POST['contr'] == ""){
            
                header("Refresh:0; url = '../frontend/CreateAcount.php'");
                
        }else{

            if ($_POST['confirm_contr'] == $_POST['contr']) {

                $contr = $_POST['contr'];
                $contrEncriptada = encryption($contr);


                insertUsuario($_POST['nombre'], $_POST['email'], $contrEncriptada);

                
                
                header('Location: ../index.php');
                exit();
            }
        }

        
        if ($_POST['confirm_contr'] != $_POST['contr']) {
            header("Refresh:0; url = '../frontend/CreateAcount.php'");
        }
        

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