<?php
$toEmail = "raulupdate@gmail.com";
$subject = $_POST["asunto"];
$mailHeaders = 'From: '.$_POST["email"]."\r\n".
'Reply-To: '.$_POST["email"]."\r\n" .
'X-Mailer: PHP/' . phpversion();

$mensaje = "Informacion del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres		:".$_POST["nombres"]."\n";
$mensaje .= "Email			:".$_POST["email"]."\n";
$mensaje .= "Telefono		:".$_POST["telefono"]."\n";
$mensaje .= "Mensaje		:".$_POST["mensaje"]."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Email Enviado Exitosamente.</div>".$mensaje;
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>