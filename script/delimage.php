<?php
	include('connection.php');
	#file of editproduct.php

	$image_name = $_GET['image'];
	$image_link = $_GET['image_link'];

	$sql = "DELETE FROM `item_images` WHERE name_image = '$image_name' and link = '$image_link'";
	if (mysqli_query($con, $sql)) 
	{
		$msg = "Image Record deleted from table";
		if(unlink($image_link))
		{
			$msg = "Image deleted successfully";
		}
		else
		{
			$msg = "Image not deleted but table record deleted";
		}

	}
	else
	{
		$msg = "Image record not deleted";
	}
	echo $msg;
?>