<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
	$pais = $_POST['pais'];
	$message = $_POST['message'];
    $from = 'From: PAGINA WEB TRANSPONDER'; 
	$to = 'PROSSEA <design@prossea.com> , sales@transpondergps.net';
    $subject = 'Contacto';

    $body = "Nombre: $name\n\n Correo de la persona: $email\n\n Telefono:\n $phone\n\n Pais:\n $pais\n\n Mensaje:\n $message";
	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       header("Location:EnviadoContacto.html");
    } else { 
        header("Location:error.html");
    }
}
?>