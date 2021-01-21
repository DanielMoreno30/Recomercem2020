<?php
require("../php_mailer/class.phpmailer.php");
require("../php_mailer/class.smtp.php");
require_once('../php_libraries/bd.php');
	    $usuarios = selectUsuarios();
        $ofertas = selectAllofertas();

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["id_usuario"]) || !isset($_POST["id_oferta"]) || !isset($_POST["email"]) || !isset($_POST["nombreoferta"]) || !isset($_POST["asunto"]) ) {
    die ("Es necesario completar todos los datos del formulario");
}





$nombre = $_POST["nombre"];

$email = $_POST["email"];

$nombreoferta = $_POST["nombreoferta"];

$asunto = $_POST["asunto"];

$id_usuario = $_POST['id_usuario'];

$id_oferta = $_POST['id_oferta'];


    $destino = "danimoreno80@gmail.com";


    // Datos de la cuenta de correo utilizada para enviar v�a SMTP
    $smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
    $smtpUsuario = "danimoreno80@gmail.com";  // Mi cuenta de correo
    $smtpClave = "danidani30";  // Mi contrase�a




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


$mail->From = $email; // Email desde donde env�o el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destino); // Esta es la direcci�n a donde enviamos los datos del formulario

$mail->Subject = "Oferta canjeada de la página Recomercem."; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>CANJEASTE LA OFERTA, ¡AQUÍ TENEMOS TU CUPÓN!</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>Hola {$nombre}, aquí tienes tu código {$id_oferta} canjeado de nuestra página web.
¡Esperamos que lo disfrutes!</p>

<p>Oferta: {$nombreoferta}</p>
<p>Código: {$asunto}</p>

</body> 

</html>

<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    header("Location:../index.php");
    exit();
} else {
    echo "Ocurrio un error inesperado.";
}
?>

