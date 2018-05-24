<?php
	# Database connection
	include('connection.php');
	#session variable
	session_start();
	$uid_user = $_SESSION['uid'];
	# fetching Post variables
	$company_name = $_POST['company_name'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$zip = $_POST['zip'];
	

	if(isset($company_name) && isset($street) && isset($city) && isset($country) && isset($zip) && isset($_FILES['logo']) && isset($uid_user))
	{	
		$sql1 = "SELECT * FROM `company` where uid_user = '$uid_user'";
		$res = mysqli_query($con, $sql1);

		// Validating User already registered or not?
		if(mysqli_num_rows($res) > 0)
		{
			echo $com_error = "User already exists";
			$target_dir = "company_logo/";
			$target_file = $target_dir.basename($_FILES['logo']['name']);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			
    			$check = getimagesize($_FILES["logo"]["tmp_name"]);
    			if($check !== false) {
        			echo "File is an image - " . $check["mime"] . ".";
        			$uploadOk = 1;
    			} else {
        			echo "File is not an image.";
        			$uploadOk = 0;
    			}
				// Check if file already exists
				if (file_exists($target_file)) {
    				echo "Sorry, file already exists.";
    				$uploadOk = 0;
				}
				// Check file size
				if ($_FILES["logo"]["size"] > 500000) {
    				echo "Sorry, your file is too large.";
    				$uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
    				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    				$uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
    				echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
    				if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
        				echo "The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.";
    					} else {
        				echo "Sorry, there was an error uploading your file.";
    				}
				}
			}
		else
		{	
			$uid_company = sha1(uniqid());
			#uploading file into folder logo and name into databse
			$target_dir = "company_logo/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
    			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    			if($check !== false) {
        			echo "File is an image - " . $check["mime"] . ".";
        			$uploadOk = 1;
    			} else {
        			echo "File is not an image.";
        			$uploadOk = 0;
    			}
			}
			#insert data into table company
			$insert_query = "INSERT INTO `company` ( `uid_company`, `uid_user`, `company_name`, `street`, `city`, `state`, `country`, `zip`, `logo`) VALUES ( '$uid_company', '$uid_user', '$company_name', '$street', '$city', '$state', '$country', '$zip', '$logo')";
			mysqli_query($con, $insert_query);
			echo "Successfully inserted";
		}	
		
	}

	else 
	{
		echo "hmm";
	}
?>