<?php
	include('connection.php');
	$email = $_POST['email'];

	if (isset($_POST['submit'])) 
	{
		if (isset($email)) 
		{
			$sql = "SELECT * FROM `newsletter` where email ='$email'";
			$res = mysqli_query($con, $sql);
		
			// Validating User already registered or not?
			if(mysqli_num_rows($res) > 0)
			{
				echo $email_error = "Already Subscribed";
			}
			else
			{
				$sql1 = "INSERT INTO `newsletter` (`email`) VALUES ('$email');";
				if(mysqli_query($con, $sql1))
				{
					echo $msg = "Successfully Subscribed";
				}
				else
				{
					echo $msg = "Query Problem";
				}
			}
		}
		else
		{
			echo "email value not found";
		}
	}
	else
	{
		echo "Button not pressed";
	}

?>