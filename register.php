<?php

echo "<pre>";
	print_r($_POST);

	$servername = 'localhost';

	$username = 'root';

	$serverpass = '';

	$databasename = 'isproject';

	$con = mysqli_connect($servername,$username,$serverpass,$databasename);

	if(!$con){
		die("Connection Error");
	}

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	//$password = $_POST['password'];
	$biodata = $_POST['biodata'];
	//$remail = $_POST['remail'];
	//$encpassword = md5('!_?@'.$password);
	

	$sql = "INSERT INTO user (
		firstname,lastname,email,biodata) VALUES('$firstname','$lastname','$email','$biodata')";

	if(mysqli_query($con,$sql)){
		header("location:query.php?error=none");
		}else{
			echo "Error entering record";
		}
	
// if (isset($_POST["submit"])) {
// 	$firstname = $_POST["firstname"];
// 	$lastname = $_POST["lastname"];
// 	$email = $_POST["email"];
// 	$biodata = $_POST["biodata"];


// $mailTo = "hakeem.alavi@strathmore.edu";
// $headers = "From:".$mailFrom;
// $txt = "You have received an email from".$lname.".\n\n".$message;

// mail($mailTo, $biodata, $txt, $headers);
// header("Location: ../wp/contact.php?mailsend");

//}


	
		
?>