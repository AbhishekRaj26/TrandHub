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
		$i;
	}
	if($i<4)
	{
		//$tagret = "image/".basename($_FILES['imageupload']['name']);

		$image_name = $_FILES['imageupload']['name'];
		$image_tmpname = $_FILES['imageupload']['tmp_name'];
		$image_size = $_FILES['imageupload']['size'];
		$image_type = $_FILES['imageupload']['type'];

		$image_name = preg_replace("/\s+/", "_", $image_name);
		$image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
		$image_name = pathinfo($image_name, PATHINFO_FILENAME);
		$image_final =  $image_name."_".date("mjYHisu").".".$image_ext;
		if (!empty($image_name)) 
		{
			if ($image_size <= 1000000) 
			{
				if ($image_ext == "jpg" || $image_ext == "jpeg" || $image_ext == "png") 
				{	
					$final_file = "image/".$image_final;

					if (move_uploaded_file($image_tmpname, $final_file)) 
					{
						$msg = "Image uploaded";
						$sql2 = "INSERT INTO `item_images` (`name_image`, `uid_product`, `link`) VALUES ( '$image_final', '$uid_product', '$final_file')";
						if(mysqli_query($con, $sql2))
						{
							echo "Successfully inserted";
							$msg1 = "Image uploaded";	
							header('Location: ' . $_SERVER['HTTP_REFERER']);
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
				}
				else
				{
					$msg = "Image format not matched";
				}
			}
			else
			{
				$msg = "File is too large, Choose image less than 1mb";
			}
		}
		else
		{
			$msg = "File is Empty";
		}
		
	}
	else
	{
		$msg = "5 Images uploaded for this product";
	}
	echo $msg;
?>