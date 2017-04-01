
<?php
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "mail.tecshopsystems.com"; // SMTP a utilizar. Por ej. smtp.elserver.com
$mail->Username = "correos@tecshopsystems.com"; // Correo completo a utilizar
$mail->Password = "Anabantha666"; // Contraseña
$mail->Port = 587; // Puerto a utilizar
$mail->From = "correos@tecshopsystems.com"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "ELSERVER.COM";
$mail->AddAddress("ventas@tecshopsystems.com"); // Esta es la dirección a donde enviamos
$mail->AddCC("cuenta@dominio.com"); // Copia
$mail->AddBCC("cuenta@dominio.com"); // Copia oculta
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = "Titulo"; // Este es el titulo del email.
$body = "Hola mundo. Esta es la primer línea<br />";
$body .= "Acá continuo el <strong>mensaje</strong>";
$mail->Body = $body; // Mensaje a enviar
$mail->AltBody = "Hola mundo. Esta es la primer línean Acá continuo el mensaje"; // Texto sin html
$mail->AddAttachment("imagenes/imagen.jpg", "imagen.jpg");
$exito = $mail->Send(); // Envía el correo.

if($exito){
echo'<script type="text/javascript">
            alert("Enviado Correctamente");
            window.location="http://www.aloaguasfrescas.com"
         </script>';
}else{
 echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
            window.location="http://www.aloaguasfrescas.com"
         </script>';
}

?>
