<?php  
	include('connection.php');

	#file of makebid
	echo $description = $_POST['description111'];
	echo $uid_product = $_GET['uid_product'];
	echo $bid = $_POST['bid'];

	$sql = "UPDATE `notifyseller` SET `description`= '$description',`perunitprice`= '$bid',`status`= '1', `seen`='1' WHERE uid_product='$uid_product'";
	if(mysqli_query($con, $sql))
	{
		echo "Bid Placed";
	}
	else
	{
		echo "Update query problem";
	}
?>