<?php
	
	$email = $_GET['email'];
	$uid = $_GET['uid'];
	$fname = $_GET['fname'];
	if (isset($email)==1) 
	{
		//The Message
		$msg = "Hi".$fname."\n We are Glad to have you on board. We will love to generate good deals for your Business.\n Click on link below to verify your Email address\n".'
		<html xmlns="http://www.trandhub.com">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			</head>
			<body>

				<div>
        			<p>"<a href ="validate_email.php?uid="'.$uid'>www.trandhub.com/script/validate_email.php</a>"</p>
				</div>
			</body>
		</html>'."\n Thank You\nTrandHub Team";
		$msg = wordwrap($msg,70);
		$subject = "Email Varification by TrandHub";
		$header = "info@trandhub.com";
		mail($email, $subject, $msg, $header);
		echo "Mail Sent";
		header('Location : ../account.html');
	}

?>