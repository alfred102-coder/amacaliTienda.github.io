<?php
//Comprueba si hay campos vacíos y valida el correo electrónico
if(empty($_POST['Nombre']) || 
   empty($_POST['email']) || 
   empty($_POST['Mensaje']) || 
   !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
{
    echo "No arguments Provided!";
    return false;
}

// Desinfecta los datos de entrada para prevenir ataques XSS
$Nombre = htmlspecialchars($_POST['Nombre']);
$email_address = htmlspecialchars($_POST['email']);
$Mensaje = htmlspecialchars($_POST['Mensaje']);

// Crea el correo electrónico y envía el mensaje.
$to = 'xingujesus9@gmail.com'; // Reemplace con su dirección de correo electrónico
$email_subject = "Website Contact Form: $Nombre";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nNombre: $Nombre\n\nEmail: $email_address\n\nMensaje:\n$Mensaje";
$headers = "From: xingujuan26@gmail.com\n";// Reemplazar con un correo electrónico de remitente válido
$headers .= "Reply-To: $email_address";	

// Enviar correo electrónico
if(mail($to, $email_subject, $email_body, $headers)) {
    echo "Email sent successfully!";
    return true;
} else {
    echo "Failed to send email.";
    return false;
}
?>
