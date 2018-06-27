<?php
	include ('connection.php');
	#update password
	if (isset($_POST['submit']))
	{
		$password = $_POST['password'];
		$cpass = $_POST['cpass'];
		$uid = $_GET['uid'];
		$tmp_pass = $_GET['tmp_pass'];
		#check variables
		if (isset($password) && isset($cpass) && isset($uid) && isset($tmp_pass)) 
		{
			$sql_buyer = "SELECT * FROM `buyer_signup` WHERE uid_buyer = '$uid' AND tmp_pass = '$tmp_pass'";
			$result_buyer = mysqli_query($con, $sql_buyer);
			if(mysqli_num_rows($result_buyer) > 0)
			{
				
				$sql_tmp_pass_update = "UPDATE `buyer_signup` SET `password` = '$password', `cpassword`= '$cpass'  WHERE uid_buyer = '$uid' AND tmp_pass = '$tmp_pass'";
                if(mysqli_query($con, $sql_tmp_pass_update))
                {
                	$msg = "Password for your buyers account is successfully changed.";
                }
                else
                {
                	$msg = "Can't change password for your buyers account because of security reasons.";
                }
			}
			else if (mysqli_num_rows($result_buyer) < 0)
			{
				$sql_seller = "SELECT * FROM `sign up` WHERE uid ='$uid' AND tem_pass = '$tmp_pass'";
				$result_seller = mysqli_query($con, $sql_seller);
				if (mysqli_num_rows($result_seller) > 0) 
				{
					$sql_tmp_pass_update = "UPDATE `sign up` SET `Password` = '$password', `Confirm_Password`= '$cpass'  WHERE uid = '$uid' AND tem_pass = '$tmp_pass'";
					if (mysqli_query($con, $sql_tmp_pass_update)) 
					{
						$msg = "Password for your sellers account is successfully changed.";
					}
					else
					{
						$msg = "Can't change password for your sellers account because of security reasons.";
					}
				}
			}
 		}
	}
	header('Location: ../forgetpassword.php?msg='.$msg);
	exit;
?>