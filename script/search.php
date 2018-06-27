<?php
	#including database
	include ('connection.php');
	$keyword = $_GET['keyword'];

	if (isset($keyword)) 
	{
		#searching keyword in table product
		$sql = "SELECT * FROM `products` WHERE name_product LIKE '%$keyword%' OR category LIKE '%$keyword%'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) 
			{
				$uid_product = $row['uid_product'];
				header('Location: ../searchresult.php?uid_product='.$uid_product);
				exit;
			}
		}
		else
		{
			echo $msg = "No product found.";
		}	
	}
	else
	{
		echo $msg = "No Match Found.";
	}
?>