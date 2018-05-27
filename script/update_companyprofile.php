<?php
	include('connection.php');

	session_start();
	$uid = $_SESSION['uid'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$company_name = $_POST['company_name'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$zip = $_POST['zip'];

	$tagret = "company_logo/".basename($_FILES['logo']['name']);
	$image = $_FILES['logo']['name'];
	if (move_uploaded_file($_FILES['logo']['tmp_name'], $tagret)) {
		
		$sql = "UPDATE `company` SET `company_name` = '$company_name', `street` = '$street', `city` = '$city', `state` = '$state', `country` = '$country', `zip` = '$zip', `logo` = '$tagret' WHERE `company`.`uid_user` = '$uid'";
		if(mysqli_query($con, $sql))
		{
			$sql1 = "UPDATE `sign up` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `Phone` = '$number' WHERE `sign up`.`uid` = '$uid';";
			if(mysqli_query($con, $sql1))
			{
				echo "Successfully inserted";
			}
			//header('location : ../productdetails_seller.php');
		}
		else
		{
			echo "query problem";
		}
	}
?>