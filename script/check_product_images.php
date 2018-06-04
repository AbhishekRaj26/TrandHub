<?php
	include('connection.php');
	
	$flag = 0;
	$sql22 = "SELECT * FROM `item_images` where uid_product = '$uid_product' order by id";
	$i=0;
	$link = array();
	$result = mysqli_query($con, $sql22);
	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
		$link = $row['link'];
		$flag = 1;
		}
	}
	else 
	{

	}
	
?>