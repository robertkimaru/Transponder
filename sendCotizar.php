<?php 
    $tipo = $_POST['tipo'];
	$name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
	$phone = $_POST['phone'];
	$uni = $_POST['uni'];
    $from = 'From: PAGINA WEB TRANSPONDER'; 
	$to = 'PROSSEA <design@prossea.com> , sales@transpondergps.net';
    $subject = 'Cotizacion transponder';

    $body = "Tipo de cotizacion: $tipo\n\n Nombre: $name\n\n Correo de la persona: $email\n\n Pais y Ciudad:\n $city\n\n Telefono:\n $phone\n\n #Unidades:\n $uni";
	

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
       header("Location:EnviadoCotizar.html");
    } else { 
        echo '<p>Oops! A ocurrido un error. Trata de enviar la cotizacion de nuevo.</p>'; 
    }
}
?>