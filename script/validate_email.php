<?php
	// including database connection file
	include('connection.php');
	$uid = $_GET['uid'];

	$sql = "SELECT * FROM `sign up` where uid ='$uid'";
	$res = mysqli_query($con, $sql);
	if(mysqli_num_rows($res) > 0)
	{
		$sql1 = "UPDATE `sign up` SET `email_varification` = '1' WHERE uid = '$uid'";
		$res1 = mysqli_query($con, $sql1);
		echo "Email Successfully varified";
		//header('location : /profile.php');
		session_start();
		$_SESSION['uid']=$uid;
	}
	else
	{
		echo "Uid Mismatched";
	}


		echo "\n".$_SESSION['uid'];

?>