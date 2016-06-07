<?php
	$name = $_POST['name'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Aquí se deberían validar los datos ingresados por el usuario
	if(!isset($name) || !isset($email) ||!isset($message)) {
		echo '{"type":"error","message":"El formulario tiene un error, por favor corrijalo y vuela a enviarlo"}';
		die();
	}

	// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
	$email_to = "npresberg@gmail.com";//"info@etpgrafica.com.ar";
	$subject = "Contacto desde el sitio web";

	$email_message = "Detalles del formulario de contacto:\n\n";
	$email_message .= "Nombre: " . $name . "\n";
	$email_message .= "Empresa: " . $company . "\n";
	$email_message .= "E-mail: " . $email . "\n";
	$email_message .= "Mensaje: " . $message . "\n\n";


	// Ahora se envía el e-mail usando la función mail() de PHP
	$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
	$sucess = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

  echo '{"type":"success","message":"Mail enviado!"}';
?>