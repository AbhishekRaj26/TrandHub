<?php
	#included in seeqouatoin.php in root
	include('connection.php');
	$uid_buyer = $_SESSION['uid_buyer'];
	$query = "SELECT * FROM `messages` where uid_buyer ='uid_buyer' ORDER BY id";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
	{
 		while($row = mysqli_fetch_array($result))
 		{
   			$uid_product = $row['uid_product'];
   			$date_time = $row['date_time'];
 		}
	}

?>