<?php
	include('connection.php');

	#get value form ../login_buyer.php
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `buyer_signup` where email = '$email' and password = '$password'";
	$result = mysqli_query($con, $sql);
	$flag = FALSE;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
		$uid_buyer = $row['uid_buyer'];
		$flag = TRUE;
	}

	if($flag == TRUE)
	{
		SESSION_START();
		$_SESSION['uid_buyer'] = $uid_buyer;
		echo "Login buyer successful";
		//header('location : ../profile.php');
	}
	else
	{
		echo "Incorrect Username or Password";
	}
?>