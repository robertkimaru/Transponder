<?php
	$empresa = $_POST['empresa'];
    $name = $_POST['nombre'];
	$phone = $_POST['phone'];
    $email = $_POST['mail'];
    $city = $_POST['pais'];
    $from = 'From: PAGINA WEB TRANSPONDER'; 
	$to = 'PROSSEA <design@prossea.com> , sales@transpondergps.net';
    $subject = 'Demo transponder';

    $body = "Empresa: $empresa\n\nNombre: $name\n\n Correo de la persona: $email\n\n Pais y Ciudad:\n $city\n\n Telefono:\n $phone\n\n";
	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       header("Location:EnviadoDemo.html");
    } else { 
        echo '<p>Oops! A ocurrido un error. Trata de enviar la cotizacion de nuevo.</p>'; 
    }
}
?>

