<?php
	include('connection.php');
	
	$uid_company;

	$sql22 = "SELECT * FROM `company` where uid_company = '$uid_company'";

	$result = mysqli_query($con, $sql22);
	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) 
		{
			$company_name = $row['company_name'];
			$uid_company = $row['uid_company'];
			$uid_user = $row['uid_user'];
			$street = $row['street'];
			$city = $row['city'];
			$state = $row['state'];
			$country = $row['country'];
			$zip = $row['zip'];
			$logo = $row['logo'];
		}
	}
	else
	{
		$company_name = NULL;
		$street = NULL;
		$city = NULL;
		$state = NULL;
		$country = NULL;
		$zip = NULL;
		$logo = NULL;
	}
?>