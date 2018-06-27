<?php
	include('connection.php');

	echo $uid_query = $_GET['uid_query'];

	$sql = "SELECT COUNT(*) AS total FROM `notifyseller` WHERE uid_query = 'a9310edc62c0484a060a3c7475b5303577f2ae20'";
	$result = mysqli_query($con, $sql);
	$values = mysqli_fetch_assoc($result);
	$count = $values['total'];
	echo json_encode($count);
	
?>