<?php

if (isset($_POST['email'])) {

	$email = $_POST['email'];

	$email_from = "web@siderense.com";
	$email_from = "siderenselaestrella@une.net.co";

	$asunto = "Suscripci贸n a newsletter Sidenrense";

	$message = '<html>'.
	'<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">'.
	'<title>Suscripción a newsletter Sidenrense</title>'.
	'</head>'.
	'<body>'.
	'<p>'.'Este correo se ha inscrito desde a el newsletter de Siderense: ' . $email . '\n\n'.'</p>'.
	'</body>'.
	'</html>';

	// create email headers
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n".
			'Reply-To:'. $email_from . "\r\n" .
			'From:' . $email_from . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
	$email = @mail($email_to, $asunto, wordwrap($message), $headers);
	if ($email) {
			echo 1;
	} else {
			echo 2;
	}
} else {
	echo 2;
}