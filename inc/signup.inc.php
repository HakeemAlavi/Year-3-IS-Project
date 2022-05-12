 <?php

 if(isset($_POST["submit"])){
 	$username = $_POST["username"];
    $email = $_POST["email"];
 	$password = $_POST["password"];

    $hashpassword = password_hash($password, PASSWORD_DEFAULT);
    
 	
 	require_once 'connection.inc.php';
 	require_once 'function.inc.php';

 	// if (emptyInputsSignup($username,$password) !== false) {
 	// 	header("location:../signuppage.php?error=emptyinput");
 	// 	exit();
 	// }

 	createUser($con, $username, $email, $hashpassword);

 }
 else{
 	header("location:../signuppage.php");
 	exit();
 }