<?php

if (isset($_POST['email'])) {

	$email = $_POST['email'];
	$nombre = $_POST['nombre'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];
	$asunto = $_POST['asunto'];

	$email_from = "web@siderense.com";
	$email_from = "siderenselaestrella@une.net.co";

	$message = '<html>'.
	'<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">'.
	'<title>Formulario de contacto Web Siderense</title>'.
	'</head>'.
	'<body>'.
	'<p>'.'Email del cliente:' . $email . '\n\n'.'</p>'.
	'<p>'.'Nombre y apellidos del cliente:' . $nombre . '\n\n'.'</p>'.
	'<p>'.'Telefono de contacto del cliente:' . $telefono . '\n\n'.'</p>'.
	'<p>'.'Asunto:' . $asunto . '\n\n'.'</p>'.
	'<p>'.'Mensaje:' . $mensaje . '\n\n'.'</p>'.
	'</body>'.
	'</html>';

	// create email headers
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'Reply-To:'. $email_from . "\r\n" .
			'From:' . $email_from . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	$email = @mail($email_to, "Formulario de contacto web Siderense", wordwrap($message), $headers);
	if ($email) {
			echo 1;
	} else {
			echo 2;
	}
} else {
	echo 2;
}
