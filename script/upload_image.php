<?php
	include('connection.php');
	
	$uid_product = $_GET['uid_product'];
	
	$sql22 = "SELECT * FROM `item_images` where uid_product = '$uid_product'";

	$i=0;
	$result = mysqli_query($con, $sql22);
	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
		$uid_product = $row['uid_product'];
		$i++;
		}
		echo $i;
	}
	if($i<4)
	{
		$tagret = "image/".basename($_FILES['imageupload']['name']);
		$image = $_FILES['imageupload']['name'];
		if (move_uploaded_file($_FILES['imageupload']['tmp_name'], $tagret)) {
			$msg = "Image uploaded";
			$sql2 = "INSERT INTO `item_images` (`name_image`, `uid_product`, `link`) VALUES ( '$image', '$uid_product', '$tagret')";
				if(mysqli_query($con, $sql2))
				{
					echo "Successfully inserted";	
					//header('location : ../productdetails_seller.php');
				}
				else
				{
					echo "query problem";
				}

		}
		else
		{
			$msg= "Problem in image upload";
		}
		$msg1 = "Image uploaded";
	}
	else
	{
		$msg1 = "5 Images uploaded for this product";
	}
	echo $msg1;
?>