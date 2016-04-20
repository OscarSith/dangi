<?php
if(!$_POST) exit;

require '../SendMail/PHPMailerAutoload.php';

// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['name'];
$email    = $_POST['email'];
$empresa    = $_POST['subject'];
$message = $_POST['massage'];

if(trim($name) == '') {
	echo '<div class="error_message alert alert-warning"><p>El nombre es requerido.</p></div>';
	exit();
} else if(trim($email) == '') {
	echo '<div class="error_message alert alert-warning"><p>Ingresa un correo electrónico.</p></div>';
	exit();
} else if(!isEmail($email)) {
	echo '<div class="error_message alert alert-warning"><p>El correo electronico escrito es inválido. Intente con otro.</p></div>';
	exit();
}

if(trim($message) == '') {
	echo '<div class="error_message" class="alert alert-warning">Por favor, ingrese su mensaje.</div>';
	exit();
}

if(get_magic_quotes_gpc()) {
	$message = stripslashes($message);
}

try {
	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = 'smtp.zoho.com';
	$mail->Username = 'root@agenciadangi.com';
	$mail->Password = '';
	$mail->SMTPSecure = 'tls';
	$mail->CharSet = 'UTF-8';
	$mail->Port = 587;

	$mail->From     = 'root@agenciadangi.com';
	$mail->FromName = 'Agencia Dangi';

	$body = '<h2>De: '.$name.'</h2>'
			.'<ul><li>Correo electrónico: '.$email.'</li>'
			.'<li>Empresa: '.$empresa.'</li>'
			.'<li>Mensaje<p>'. $message .'</p></li></ul>';

	$text_body = 'De: '.$name."\n\n"
			.'Correo electrónico: '.$email."\n"
			.'Empresa: '.$empresa."\n"
			."Mensaje\n". $message;

	$mail->Subject = 'Mensaje enviado desde la web agenciadangi.com';
	$mail->Body    = $body;
    $mail->AltBody = $text_body;
    $mail->addAddress('dbecerra@agenciadangi.com', 'Dante Raul');
    $mail->AddCC('larriega@gmail.com', 'Oscar Larriega');

    if ($mail->send())
	{
		echo "<div id='success_page' class='alert alert-success'>";
		echo "<h3>Su correo ha sido enviado exitosamente.</h3>";
		echo "<p>Gracias <strong>$name</strong>, nos comunicaremos con usted a la brevedad posible.</p>";
		echo "</div>";
    }
    else
    {
    	echo "<div id='success_page' class='alert alert-danger'><p>Ups.. no se pudo enviar el correo, intentelo de nuevo</p></div>";
    }

    // Clear all addresses and attachments for next loop
    $mail->clearAddresses();
} catch (phpmailerException $e) {
	echo "<div id='success_page' class='alert alert-danger'><p>" + $e->getMessage() + "</p></div>";
}