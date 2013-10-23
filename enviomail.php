<?php

// Especificamos el destinatario (nuestro email) y el asunto.
$email_para = "miemail@midominio.com";
$email_de = "Mi Pagina Web";
$email_asunto = "Formulario de contacto desde mi sitio web";

// Pasamos a validar los datos enviados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['asunto']) ||
!isset($_POST['mensaje'])) {

echo "<b>El formulario no pudo ser enviado. </b>
";
echo "Por favor, verifique que ha rellenado todos los datos
";
die();
}

//Si todos los datos están rellenados y bien,
//pasamos a especificar el cuerpo del mensaje
$email_mensaje = "Formulario de contacto desde mi sitio web:\n\n";
$email_mensaje .= "Nombre: " . $_POST['nombre'] . "\n";
$email_mensaje .= "E-mail: " . $_POST['email'] . "\n";
$email_mensaje .= "Asunto: " . $_POST['asunto'] . "\n";
$email_mensaje .= "Mensaje: " . $_POST['mensaje'] . "\n\n";

// Enviamos el formulario usando la función mail() de PHP
$headers = 'From: '.$email_de."\r\n".
'X-Mailer: PHP/' . phpversion();
@mail($email_para, $email_asunto, $email_mensaje, $headers);

echo "¡El formulario se ha enviado con éxito!";
?>