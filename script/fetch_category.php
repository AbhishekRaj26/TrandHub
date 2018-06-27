<?php
	include('connection.php');
	
	$sql = "SELECT * FROM `category`";

	$result = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) 
	{
		$category = $row['category'];
	}
?>