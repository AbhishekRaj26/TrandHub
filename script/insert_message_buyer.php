<?php
	include('connection.php');

	$uid_query = $_GET['uid_query'];
	$uid_product = $_GET['uid_product'];
	$uid_seller = $_GET['uid_seller'];
	$uid_buyer = $_GET['uid_buyer'];
	$buyer_reply = $_POST['buyer_reply'];

	if (isset($_POST['submit']))
	{
		if (isset($uid_buyer) && isset($uid_query) && isset($uid_product) && isset($uid_seller) && isset($buyer_reply))
		{
			$sql = "INSERT INTO `messages`(`uid_query`, `uid_product`, `uid_buyer`, `uid_seller`, `message_original`, `time`, `user_identify`) VALUES ('$uid_query', '$uid_product', '$uid_buyer', '$uid_seller', '$buyer_reply', now(), '1')";
			if (mysqli_query($con, $sql)) 
			{
				echo "messages sent";
			}
		}
		else
		{
			echo "Some value missing";
		}
	
	}
	else
	{
		echo "Submit not pressed";
	}
	
?>