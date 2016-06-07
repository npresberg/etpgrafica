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

	$body = "Detalles del formulario de contacto:\n\n";
	$body .= "Nombre: " . $name . "\n";
	$body .= "Empresa: " . $company . "\n";
	$body .= "E-mail: " . $email . "\n";
	$body .= "Mensaje: " . $message . "\n\n";


	// Ahora se envía el e-mail usando la función mail() de PHP
	$headers = 'From: '.$email."\r\n".
		'Reply-To: '.$email."\r\n" .
		'X-Mailer: PHP/' . phpversion();
	$sucess = @mail($email_to, $subject, $body, 'From: <'.$email.'>');

  echo '{"type":"success","message":"Gracias, nos estaremos contactando a la brevedad!"}';
?>
