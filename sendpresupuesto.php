<?php
	$name = $_POST['name'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$message = $_POST['message'];
	$medium = $_POST['medium'];
	$product = $_POST['product'];
	$size = $_POST['size'];
	$quantity = $_POST['quantity'];
	$salesman = $_POST['salesman'];
	$byemail = $_POST['by-email'];

	// Aquí se deberían validar los datos ingresados por el usuario
	if(!isset($name) || !isset($email) ||!isset($message) ||!isset($product) ||!isset($size) ||!isset($quantity)) {
		echo '{"type":"error","message":"El formulario tiene un error, por favor corrijalo y vuela a enviarlo"}';
		die();
	}

	// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
	$email_to = "info@etpgrafica.com.ar";
	$subject = "Presupuesto desde el sitio web";

	$body = "Detalles:\n\n";
	$body .= "Nombre: " . $name . "\n";
	$body .= "Empresa: " . $company . "\n";
	$body .= "E-mail: " . $email . "\n";
	$body .= "Tel: " . $telephone . "\n";
	$body .= "Producto: " . $product . "\n";
	$body .= "Tamaño: " . $size . "\n";
	$body .= "Cantidad: " . $quantity . "\n";
	$body .= "Conocio por: " . $medium . "\n";
	$body .= "Contacto vendedor: " . $salesman . "\n";
	$body .= "Contacto por mail: " . $byemail . "\n";
	$body .= "Mensaje: " . $message . "\n\n";


	// Ahora se envía el e-mail usando la función mail() de PHP
	$headers = 'From: '.$email."\r\n".
		'Reply-To: '.$email."\r\n" .
		'X-Mailer: PHP/' . phpversion();
	$sucess = @mail($email_to, $subject, $body, 'From: <'.$email.'>');

  echo '{"type":"success","message":"Gracias, nos estaremos contactando a la brevedad!"}';
?>
