<?php
	include('connection.php');

	#editproduct script
	echo $uid_product = $_GET['uid_product'];
	$product_name = $_POST['product_name'];
	$price = $_POST['perunitprice'];
	$description = $_POST['desctiption'];
	$maxorder = $_POST['maxorder'];
	$minorder = $_POST['minorder'];
	$category = $_POST['category'];

	$sql1 = "UPDATE `products` SET `name_product` = '$product_name', `price` = '$price', `description` = '$description', `max_order` = '$maxorder', `min_order` = '$minorder', `category` = '$category' WHERE `products`.`uid_product` = '$uid_product'";
	if(mysqli_query($con, $sql1))
	{
		echo "Successfully inserted";
	}
	else
	{
		echo "problem in query";
	}

?>