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

	$to_firstname = $_POST['to_firstname'];
	$to_lastname = $_POST['to_lastname'];
	$to_email = $_POST['to_email'];
	//$password = $_POST['password'];
	$to_biodata = $_POST['to_biodata'];
	//$remail = $_POST['remail'];
	//$encpassword = md5('!_?@'.$password);
	

	$sql = "INSERT INTO doctor (
		to_firstname,to_lastname,to_email,to_biodata) VALUES('$to_firstname','$to_lastname','$to_email','$to_biodata')";

	if(mysqli_query($con,$sql)){
		header("location:docprescription.php?error=none");
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