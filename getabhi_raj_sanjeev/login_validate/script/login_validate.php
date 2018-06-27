<?php
	#connecting database
	include 'connection.php';
	#Getting value
	$username = $_POST['username'];
	$password = $_POST['password'];
	$flag = 0;

	if (isset($_POST['saveForm'])) 
	{
		if (isset($username) && isset($password)) 
		{
			$sql = "SELECT * FROM `super_admin_info` WHERE username = '$username' AND password = '$password'";
			$res = mysqli_query($con, $sql);
			if (mysqli_num_rows($res) > 0) 
			{
				$flag = 1;
				SESSION_START();
				$_SESSION['username'] = $username;
				header('Location: ../panel_admin/');
				exit;
			}
		}
	}

?>