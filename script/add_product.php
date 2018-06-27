<?php
	#including connection file
	include('connection.php');
	
	#starting session get UID
	session_start();
	$uid = $_SESSION['uid'];
	
	#Getting values from uploadprodcuts.php
	$product_name = $_POST['product_name'];
	$desctiption = $_POST['desctiption'];
	$maxorder = $_POST['maxorder'];
	$minorder = $_POST['minorder'];
	$category = $_POST['category'];
	$price = $_POST['perunitprice'];
	$msg = "";
	if(isset($_POST['add_product']))
	{
		if(isset($uid) && isset($product_name) && isset($desctiption) && isset($maxorder) && isset($minorder) && isset($category) && isset($price))
		{
			#fetching Unique ID of company
			$sql = "SELECT * FROM `company` where uid_user = '$uid'";
			$result = mysqli_query($con, $sql);
			if(mysqli_num_rows($result) > 0)
			{
				while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) 
				{
					$uid_company = $row['uid_company'];
				}
			}
			
			
			
			else
			{
				$msg = "Image uploade problem";
			}
			#Creating unique id for prodcut
			$uid_product = sha1(uniqid());
			$sql2 = "INSERT INTO `products` (`uid_company`, `uid_user`, `uid_product`, `name_product`, `price`, `description`, `max_order`, `min_order`, `category`) VALUES ( '$uid_company', '$uid', '$uid_product', '$product_name', '$price', '$desctiption', '$maxorder', '$minorder', '$category')";
			if(mysqli_query($con, $sql2))
			{
			
	
				echo "Successfully inserted";	
			}
			else
			{
				echo "query problem";
			}
			
		}
		else
		{
			echo "Value not get";
		}
	}

?>