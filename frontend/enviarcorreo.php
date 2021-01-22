<?php
require("../php_mailer/class.phpmailer.php");
require("../php_mailer/src/phpmailer.php");
require("../php_mailer/class.smtp.php");
require_once('../php_libraries/bd.php');
	    $usuarios = selectUsuarios();
        $ofertas = selectAllofertas();

if($_SESSION['user_loged']['puntos'] >=$_POST['puntos']){
    $_SESSION['user_loged']['puntos'] = $_SESSION['user_loged']['puntos'] - $_POST['puntos'];
    updateUsuariosmiCuenta($_SESSION['user_loged']['id_usuario'],$_SESSION['user_loged']['nom_usuario'],$_SESSION['user_loged']['contr'],$_SESSION['user_loged']['admin'],$_SESSION['user_loged']['puntos'],$_SESSION['user_loged']['mail'], $_POST["codigo"]);
    $strNombre = $_SESSION['user_loged']['nom_usuario'];
    $strEmail = $_SESSION['user_loged']['mail'];
    $strNombreOferta = $_POST['nombre'];
    $strMensaje = $_POST["codigo"];
    $strid = $_POST["id_oferta"];

$txtid = '<p value="@strid"></p>';
$txtNombre = '<p value="@strNombre"></p>';
$txtEmail = '<p value="@strEmail"></p>';
$txtNombreOferta = '<p>'.$strNombreOferta.'</p>';
$txtConsulta = '<p>'.$strMensaje.'</p>';


$txtNombre = str_replace("@strNombre",$strNombre,$txtNombre);
$txtNombreOferta = str_replace("@strNombreOferta",$strNombreOferta,$txtNombreOferta);
$txtEmail = str_replace("@strEmail",$strEmail,$txtEmail);
$txtConsulta = str_replace("@strMensaje",$strMensaje,$txtConsulta);
?>  



        

<?php

    $destino = $_SESSION['user_loged']['mail'];


    // Datos de la cuenta de correo utilizada para enviar via SMTP
    $smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
    $smtpUsuario = "recomercem2021@gmail.com";  // Mi cuenta de correo
    $smtpClave = "Peluca1234";  // Mi contraseña




$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $smtpUsuario;
$mail->AddAddress($destino); // Esta es la direcci�n a donde enviamos los datos del formulario

$mail->Subject = "Oferta canjeada de la página Recomercem."; // Este es el titulo del email.
$mail->Body = "
<html> 

<body> 

<h1>CANJEASTE LA OFERTA, ¡AQUÍ TENEMOS TU CUPÓN!</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>Hola {$_SESSION['user_loged']['nom_usuario']}, aquí tienes tu código canjeado de nuestra página web.
¡Esperamos que lo disfrutes!</p>

<p>Oferta: {$txtNombreOferta}</p>
<p>Código: {$txtConsulta}</p>

</body> 
</html>

<br />";
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

if(!$mail->send()) {
    header("Location:../index.php");
    exit();
} else {
    echo "Ocurrio un error inesperado.";
}


}else{
    echo'<script type="text/javascript">
    alert("¡No tienes puntos suficientes para canjear esta oferta!");
    window.location.href="../frontend/micuenta.php";
    </script>';
}
?>
