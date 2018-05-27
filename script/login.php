<?php
	
	include('connection.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `sign up` where email = '$email' and password = '$password'";
	$result = mysqli_query($con, $sql);
	$flag = FALSE;
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
		$uid = $row['uid'];
		$flag = TRUE;
	}

	if($flag == TRUE)
	{
		SESSION_START();
		$_SESSION['uid'] = $uid;
		header('location : ../profile.php');
	}
	else
	{
		echo "incorrect username or password";
	}
?>