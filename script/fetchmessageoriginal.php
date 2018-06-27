<?php
	include('connection.php');

	
	$sql11 = "SELECT * FROM `messages` where uid_query = '$uid_query' and uid_product = '$uid_product' and uid_buyer='$uid_buyer' and uid_seller='$uid_seller'";

	$result11 = mysqli_query($con, $sql11);
	while ($row11 = mysqli_fetch_array($result11, MYSQLI_BOTH)) 
	{
		$message = $row11['message_original'];
		$time = $row11['time'];
	}
?>