<?php
	// Database file include
	include("connection.php");
	// Getting name of form
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$term = $_POST['checkbox'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$phone = $_POST['number'];

	if($password == $cpassword)
	{
		// Checking Value got or not
		if(isset($fname) && isset($lname) && isset($email) && isset($term) && isset($password) && isset($cpassword) && isset($phone))
		{
			$sql = "SELECT * FROM `sign up` where email ='$email'";
			$res = mysqli_query($con, $sql);
		
			// Validating User already registered or not?
			if(mysqli_num_rows($res) > 0)
			{
				echo $email_error = "User already registered with this email";
			}
		
			else
			{
				// inserting data into table
				$uid = sha1(uniqid());
				$insert_query = "INSERT INTO `sign up` ( `uid`, `fname`, `lname`, `email`, `email_varification`, `acceptT&C`, `Password`, `Confirm_Password`, `Phone`) VALUES ( '$uid', '$fname', '$lname', '$email', '0', '1', '$password', '$cpassword', '$phone')";
				mysqli_query($con, $insert_query);
				echo "Successfully inserted";
				// User Email Validation
				header('Location: request_email_validation.php?email='.$email.'&&uid='.$uid.'&&fname='.$fname);
			}
		}

		else
		{
			echo "Error in value";
			header('Location: ../register.html?value="Error in Value please check and resubmit."');
		}
	}
	else
	{
		echo "Password does not matched. Retry...";
	}
?>