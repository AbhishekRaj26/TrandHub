<?php
	#including connection file
	include ('connection.php');

	if (isset($_POST['submit'])) 
	{
		$email = $_POST['email'];
		$number = $_POST['number'];
		if (isset($email) && isset($number)) 
		{
			$sql_seller = "SELECT * FROM `sign up` WHERE email = '$email' AND Phone = '$number'";
			$result_seller = mysqli_query($con, $sql_seller);
			if(mysqli_num_rows($result_seller) > 0)
            {
            	while ($row_seller = mysqli_fetch_array($result_seller, MYSQLI_BOTH)) 
                {
                    $uid_seller = $row_seller['uid'];
                    $tmp_pass = sha1(uniqid());
                    $fname = $row_seller['fname'];
                    $sql_tmp_pass = "UPDATE `sign up` SET `tem_pass`='$tmp_pass' WHERE uid = '$uid_seller'";
                    mysqli_query($con, $sql_tmp_pass);
					$to = $email;
					$subject = "Change Password TrandHub";
					$txt = "Dear ".$fname." 

							You recently requested to reset your password for your TrandHub sellers account. Click the link below to reset it.
							www.trandhub.com/updatepassword.php?uid=".$uid_seller."&&tmp_pass=".$tmp_pass."

							If you did not requested a password reset, please ignore this email or reply to let us know.

							Thanks
							Support
							TrandHub Team

							We also love hearing from you and helping you with any issues you have. Please click on: http://trandhub.com/contact.html";
					$headers = "From: support@trandhub.com";

					if(mail($to,$subject,$txt,$headers))
					{	
						$msg = "We have sent you a link to reset the password to you registered email. Please follow the link and reset your Password.";
					}
					else
					{
						$msg = "Mail not send now, Try Again.";
					}
                }
            }
            else if (mysqli_num_rows($result_seller) < 0)
            {
            	$sql_buyer = "SELECT * FROM `buyer_signup` WHERE email = '$email' AND phone = '$number'";
            	$result_buyer = mysqli_query($con, $sql_buyer);
				if(mysqli_num_rows($result_buyer) > 0)
            	{
            		while ($row_buyer = mysqli_fetch_array($result_buyer, MYSQLI_BOTH)) 
                	{
	                    $uid_buyer = $row_buyer['uid_buyer'];
	                    $tmp_pass_buyer = sha1(uniqid());
	                    $fname = $row_buyer['fname'];
	                    $sql_tmp_pass_buyer = "UPDATE `buyer_signup` SET `tmp_pass`='$tmp_pass_buyer' WHERE uid_buyer = '$uid_buyer'";
	                    mysqli_query($con, $sql_tmp_pass_buyer);
						$to = $email;
						$subject = "Change Password TrandHub";
						$txt = "Dear ".$fname." 

								You recently requested to reset your password for your TrandHub sellers account. Click the link below to reset it.
								www.trandhub.com/updatepassword.php?uid=".$uid_buyer."&&tmp_pass=".$tmp_pass_buyer."

								If you did not requested a password reset, please ignore this email or reply to let us know.

								Thanks
								Support
								TrandHub Team

								We also love hearing from you and helping you with any issues you have. Please click on: http://trandhub.com/contact.html";
						$headers = "From: support@trandhub.com";

						if(mail($to,$subject,$txt,$headers))
						{	
							$msg = "We have sent you a link to reset the password to you registered email. Please follow the link and reset your Password.";
						}
						else
						{
							$msg = "Mail not send now, Try Again.";
						}
					}
                }
            }
            else
            {
            	$msg = "Incorrect email address or phone number. Please check and try again...";
            }
		}
	}
	header('Location: ../forgetpassword.php?msg='.$msg);
	exit;
?>