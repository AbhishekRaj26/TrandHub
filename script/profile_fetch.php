<?php
	include('connection.php');
	$uid = $_SESSION['uid'];
	
	$sql = "SELECT * FROM `sign up` where uid = '$uid'";

	$result = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
		$fname = $row['fname'];
		$lname = $row['lname'];
		$email = $row['email'];
		$phone = $row['Phone'];
	}
?>