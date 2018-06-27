<?php
	include ('../../script/connection.php');

	if (isset($_POST['submit'])) 
	{
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		if (isset($subject) && isset($message)) 
		{
			#fetching Newsletter Emails and sending bulk emails
			$sql = "SELECT * FROM `newsletter`";
			$result = mysqli_query($con, $sql);
			if(mysqli_num_rows($result) > 0)
			{
				while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) 
				{
					$email = $row['email'];
					$to = $email;
					$txt = $message;
					$headers = "From: info@trandhub.com";
					mail($to,$subject,$txt,$headers);
					echo "Sent to all";
				}
			}
			else
			{
				echo "No User Found";
			}

			#inserting Email into table Newsletters_email
			$sql2 = "INSERT INTO `newsletter_emails`(`subject`, `message`, `date_time`) VALUES ('$subject', '$txt', now())";
			if (mysqli_query($con, $sql2)) 
			{
				echo "Email inserted";
				header('Location: mailbox.php');
				exit;
			}
		}

	}
?>