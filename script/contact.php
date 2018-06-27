<?php
	#file of contact.html
	include('connection.php');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$message = $_POST['message'];

	if (isset($_POST['submit'])) 
	{
		if (isset($name) && isset($email) && isset($phonenumber) && isset($message)) 
		{
			$sql = "INSERT INTO `contact_enquiry` (`name`, `email`, `phonenumber`, `message`) VALUES ('$name', '$email', '$phonenumber', '$message')";
			if (mysqli_query($con, $sql)) 
			{
				echo $msg = "Message Sent, Concern Team will shortly contact you...";
			}
			else
			{
				echo $msg = "Message Not Sent do Live chat or call";
			}
		}
		else
		{
			echo $msg = "Message not sent, Value not get...";
		}
	}
	else 
	{
		echo $msg = "Message Not sent, Button not pressed";
	}
?>