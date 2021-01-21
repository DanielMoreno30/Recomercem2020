<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

require("../php_mailer/class.phpmailer.php");
require("../php_mailer/class.smtp.php");

        if($_POST){
            $destino = "danimoreno80@gmail.com";
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];
            $id_usuario = $_POST['id_usuario'];
            $id_oferta = $_POST['id_oferta'];

            // Datos de la cuenta de correo utilizada para enviar vía SMTP
        $smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
        $smtpUsuario = "dmorenof2021@cepnet.net";  // Mi cuenta de correo
        $smtpClave = "61723-9999";  // Mi contraseña




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

$mail->Subject = "Email de Recomercem"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);

$mail->Body = "
<html> 

<body> 

<h1>Recibiste un nuevo mensaje desde el formulario de contacto</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>nombre: {$nombre}</p>

<p>email: {$email}</p>

<p>asunto: {$asunto}</p>

<p>mensaje: {$mensaje}</p>

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
} else {
    echo "No se ha podido enviar";
}

        

            $envio = mail($destino, "Email de Recomercem", $contenido, $cabecera);
            if($envio){
                header("Location:../index.php");
                exit();
            }else{
                echo "No se ha podido enviar";
                exit();
                }
            }else{
                echo "No hay datos que procesar";
                exit();
            }
    ?>
</body>
</html>