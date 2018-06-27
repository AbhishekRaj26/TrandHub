<?php
	include('connection.php');

	#get value form ../login_buyer.php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$remember_me = $_POST['remember_me'];

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
		if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on')
        {
            $hour = time() + 3600 * 24 * 30;
            setcookie('username', $email, $hour);
        	setcookie('password', $password, $hour);
        }
		echo "Login buyer successful";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	else
	{
		echo "Incorrect Username or Password";
	}
?>