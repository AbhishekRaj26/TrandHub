<?php
	include('connection.php');

	session_start();
	$uid_buyer = $_SESSION['uid_buyer'];
	#Getting value from place_deal.php

	$uid_product = $_GET['uid_product'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$message = $_POST['message'];
	$product_category = $_POST['category'];


	if (isset($_POST['submit'])) 
	{
		$seller_fetch = "SELECT * FROM `products` where uid_product = '$uid_product'";
		$result = mysqli_query($con, $seller_fetch);
		if(mysqli_num_rows($result) > 0)
		{
			while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
			$uid_seller = $row['uid_user'];
			}
		}
		else
		{
			echo "User uid not fetched";
		}

		if (isset($uid_product) && isset($name) && isset($email) && isset($phonenumber) && isset($message) && isset($uid_seller) && isset($uid_buyer) && isset($product_category)) 
		{
			$uid_query = sha1(uniqid());
			$sql = "INSERT INTO `quotation`(`uid_query`, `uid_product`, `product_category`, `name`, `email`, `phone`, `uid_buyer`, `uid_seller`, `message`, `date_time`, `read_msg_sender`, `read_msg_rcv`, `status`) VALUES ('$uid_query', '$uid_product', '$product_category', '$name', '$email', '$phonenumber', '$uid_buyer', '$uid_seller', '$message', now(), '0', '0', '0')";
			if(mysqli_query($con, $sql))
			{
				$query2 = "SELECT * FROM `products` WHERE category = '$product_category'";
				$result2 = mysqli_query($con, $query2);
				if(mysqli_num_rows($result2) > 0)
				{
 					while($row2 = mysqli_fetch_array($result2))
 					{
   						$uid_product2 = $row2['uid_product'];
   						$uid_seller2 = $row2['uid_user'];
   						$product_name = $row2['name_product'];
   						$sql2 = "INSERT INTO `notifyseller`(`uid_buyer`, `uid_seller`, `uid_product`, `uid_query`, `description`, `perunitprice`, `category`, `status`, `seen`) VALUES ('$uid_buyer', '$uid_seller2', '$uid_product2', '$uid_query', '', '0', '$product_category', '0', '0')";
   						if (mysqli_query($con, $sql2)) 
   						{
   							echo "Query data stored in notifyseller";
   						}
   						else
   						{
   							echo "data not inserted into notifyseller";
   						}
   					}
   				}

   				$query3 = "SELECT * FROM `sign up` where uid = '$uid_seller2'";
   				$result3 = mysqli_query($con, $query3);
   				if (mysqli_num_rows($result3) > 0) 
   				{
   					while ($row3 = mysqli_fetch_array($result3)) 
   					{
   						$email = $row3['email'];

						echo $to = $email;
						echo $subject = "New TrandHub Prodcut Query";
						echo $txt = "Hi TrandHub User,"."\r\n". "This is to notify you that you have a new query for your product".$product_name."\r\n"."To place a bid for your new query please follow the link below:";
						echo $headers = "From: sales@trandhub.com". "\r\n" .
						"CC: abhi.rajjauhari26@gmail.com";
						//mail($to,$subject,$txt,$headers);

   					}
   				}
   			}
			else
			{
				echo "Query problem";
			}
		}
		else
		{
			echo "Value not get";
		}
		
	}
	else
		{
			echo "sumbit butoon problem";
		}
							
?>