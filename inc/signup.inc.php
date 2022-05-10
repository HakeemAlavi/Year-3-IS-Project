 <?php

 if(isset($_POST["submit"])){
 	$username = $_POST["username"];
 	$password = $_POST["password"];
    
 	
 	require_once 'connection.inc.php';
 	require_once 'function.inc.php';

 	// if (emptyInputsSignup($username,$password) !== false) {
 	// 	header("location:../signuppage.php?error=emptyinput");
 	// 	exit();
 	// }

 	createUser($con, $username, $password);

 }
 else{
 	header("location:../signuppage.php");
 	exit();
 }