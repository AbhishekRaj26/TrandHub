<?php
	include('connection.php');
	$uid_buyer = $_SESSION['uid_buyer'];
	
	$sql = "SELECT * FROM `buyer_signup` where uid_buyer = '$uid_buyer'";

	$result = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
		$fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$phone = $row['phone'];
	}
?>