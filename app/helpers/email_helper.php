<?php

require "./vendor/phpmailer/phpmailer/PHPMailerAutoload.php";

if (!function_exists('send_not_found')) {
	function send_not_found($data)
	{
		$mail = new PHPMailer;

			$mail->isSMTP();
			$mail->SMTPDebug = 0;
			$mail->Debugoutput = 'html';
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = MAIL_USERNAME;
			$mail->Password = MAIL_PASSWORD;
			$mail->setFrom(MAIL_USERNAME, AUTHOR);
			$mail->addReplyTo(MAIL_USERNAME, AUTHOR);
			$mail->addAddress($data['receipient_email'], $data['receipient_number']);
			$mail->Subject = $data['subject'];
			$mail->msgHTML(get_include_contents('app/views/templates/not_found_template.php', $data));
			if (!$mail->send()) {
				return $mail->ErrorInfo;
			} else {
				return TRUE;
			}
					
		}
	}

if (!function_exists('send_mail')) {
	function send_mail($data)
	{
		$mail = new PHPMailer;

			$mail->isSMTP();
			$mail->SMTPDebug = 0;
			$mail->Debugoutput = 'html';
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = MAIL_USERNAME;
			$mail->Password = MAIL_PASSWORD;
			$mail->setFrom(MAIL_USERNAME, AUTHOR);
			$mail->addReplyTo(MAIL_USERNAME, AUTHOR);
			$mail->addAddress($data['receipient_email'], $data['receipient_number']);
			$mail->Subject = $data['subject'];
			$mail->msgHTML(get_include_contents('app/views/templates/found_template.php', $data));
			if (!$mail->send()) {
				return $mail->ErrorInfo;
			} else {
				return TRUE;
			}
					
		}
	}
if(!function_exists('get_include_contents')){
	function get_include_contents($filename, $variablesToMakeLocal)
	{
		extract($variablesToMakeLocal);
	    if (is_file($filename)) {
	        ob_start();
	        include $filename;
	        return ob_get_clean();
	    }
	    return false;
	}
}