<?php
	$sql22 = "SELECT * FROM `products` where uid_product = '$uid_product'";

	$result = mysqli_query($con, $sql22);
	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
		$product_name = $row['name_product'];
		$description = $row['description'];
		$price = $row['price'];
		$maxorder = $row['max_order'];
		$minorder = $row['min_order'];
		}
	}
?>