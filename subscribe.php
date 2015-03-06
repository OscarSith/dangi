<?php
ini_set('display_errors', 'on');
if (isset($_POST)) {
	require 'SendMail/class.phpmailer.php';
	if (empty($_POST['name']) || empty($_POST['telefono']) || empty($_POST['email']) || empty($_POST['mensaje'])) {
		$json = array('type'=>2, 'message'=>'Todos los campos son requeridos.');
	} else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$adminEmail = 'dantebecerra2013@gmail.com';//dantebecerra2013@gmail.com
		$asunto = 'Mensaje enviado desde la web de DANGI';
		$message = '<h4>De: '.$_POST['name'].'</h4>
						<ul>
						<li><b>Correo:</b> '.$_POST['email'].'</li>
						<li><b>Tel&eacute;fono:</b> '.$_POST['telefono'].'</li><li>'.$_POST['mensaje'].'</li><ul>';

		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Cabeceras adicionales
		$cabeceras .= 'To: Oscar Larriega <'.$adminEmail.'>' . "\r\n";
		$cabeceras .= 'From: Recordatorio' . "\r\n";
		$cabeceras .= 'Cc: dbecerra@artedangi.com' . "\r\n";

		if(mail($adminEmail, $asunto, $message, $cabeceras)) {
			$json = array('type'=>1, 'message'=>'Gracias, en breve nos estaremos comunicando');
		} else {
			$json = array('type'=>3, 'message'=>'No se pudo enviar el mensaje, intentelo de nuevo');
		}

			/*$altMessage = "De: ".$_POST['name']."\n\n
							Correo:</b> ".$_POST['email']."\n
							Tel&eacute;fono:</b> ".$_POST['phone']."\n\n
							".$_POST['mensaje'];*/

		/*$mail = new PHPMailer(true);
		$mail->isSMTP();
		$mail->CharSet = 'UTF-8';
		$mail->Host = '127.0.0.1';//Aqui va el ip o nombre del servidor
		$mail->SMTPAuth = true;
		$mail->Username = 'artedang'; //Usuario
		$mail->Password = 'ad_03_2012'; // Contraseña

		$mail->From = 'no-reply@artedangi.com';
		$mail->FromName = 'DANGI';
		$mail->addAddress($adminEmail);
		$mail->isHTML(true);

		$mail->Subject = $asunto;
		$mail->Body = $message;
		$mail->AltBody = $altMessage;

		try {
			if ($mail->send()) {
				$json = array('type'=>1, 'message'=>'Gracias, en breve nos estaremos comunicando');
			} else {
				$json = array('type'=>3, 'message'=>'No se pudo enviar el mensaje, intentelo de nuevo');
			}
		} catch (phpmailerException $pex) {
			$json = array('type'=>4, 'message'=>$pex->getMessage());
		}*/
	} else {
		$json = array('type'=>4, 'message'=>'El correo es inválido, escriba uno válido por favor.');
	}
} else {
	$json = array('type'=>4, 'message'=>'Petición inválida');
}

echo json_encode($json);
?>