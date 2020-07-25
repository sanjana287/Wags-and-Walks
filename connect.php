<?php 
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link,"pet");
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["entry"]))
{
	$name = $_POST["name"];
	$phone= $_POST["phone"];
	echo $phone;
	$email = $_POST["email"];
    $location = $_POST["location"];
	$name = mysqli_real_escape_string($link, $name);
	$email = mysqli_real_escape_string($link, $email);
	$location = mysqli_real_escape_string($link, $location);
	$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
	$target_dir = "uploads/";
	$filename = md5($_FILES["fileToUpload"]["tmp_name"]) . "." . $imageFileType;
	$target_file = $target_dir . basename($filename);
	$uploadOk = 1;
	// Check if image file is a actual image or fake image
  	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
  	} else {
	    echo "File is not an image.";
	    $uploadOk = 0;
    }
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	  	echo "Sorry, your file is too large.";
	  	$uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
 		echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
  		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
  		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
    } else {
    	$query = "INSERT INTO user (name , phone , email, location, filename ) VALUES ('$name', '$phone','$email', '$location', '$filename')"; 
  		if ((mysqli_query($link, $query)) && (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))) {
    		echo "Your Entry has been uploaded successfully";
    	} else {
    		echo "Sorry, there was an error uploading your entry.";
  		}
	}
}