<?php
	include('connection.php');

	#Getting values from ../register_buyer.php
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$agree = $_POST['checkbox'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$number = $_POST['number'];

	if (isset($_POST['submit'])) 
	{
		if(isset($fname) && isset($lname) && isset($email) && isset($agree) && isset($password) && isset($cpassword) && isset($number))
		{
			if($password == $cpassword)
			{
				$sql1 = "SELECT * FROM `buyer_signup` where email ='$email'";
				$res = mysqli_query($con, $sql1);
		
				// Validating User already registered or not?
				if(mysqli_num_rows($res) > 0)
				{
					echo $email_error = "User already registered with this email";
				}
				else
				{
					$uid_seller = sha1(uniqid());
					$sql = "INSERT INTO `buyer_signup` (`uid_buyer`, `fname`, `lname`, `email`, `email_varification`, `acceptT&C`, `password`, `cpassword`, `phone`) VALUES ('$uid_seller', '$fname', '$lname', '$email', '0', '1', '$password', '$cpassword', '$number')";
					mysqli_query($con, $sql);
					echo "Successfully inserted";
	
				}
				
			}
			else
			{
				echo $error = "Password and confirm password mismatched";
			}
		}
		else
		{
			echo "value is not get";
		}
	}
	else
	{
		echo "Submit button not pressed";
	}
?>