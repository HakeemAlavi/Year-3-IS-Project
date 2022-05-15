<?php
// function emptyInputsSignup($username,$password){
// 		$result;
// 		if (empty($username) || empty($password)) {

// 			$result = true;
// 		}
// 		else{
// 			$result = false;
// 		}
// 		return $result;
// 	}


function createUser($con,$username,$email, $password){
		$sql="INSERT INTO login (username,useremail,password) VALUES (?,?,?);";
		$stmt = mysqli_stmt_init($con);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("location: ../signuppage.php?error=stmtfailed");
			exit();
		}
			 //$hashedPwd = password_hash($password, PASSWORD_DEFAULT);


		mysqli_stmt_bind_param($stmt,"sss",$username,$email,$password);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);

		header("location: ../signuppage.php?error=none");
			exit();
	}



function uidExists($con,$username){
		$sql="SELECT * FROM login WHERE username = ? ;";
		$stmt = mysqli_stmt_init($con);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("location: ../signuppage.php?error=stmtfailed");
			exit();
		}
		mysqli_stmt_bind_param($stmt,"s",$username);
		mysqli_stmt_execute($stmt);

		$resultData = mysqli_stmt_get_result($stmt);

		if ($row = mysqli_fetch_assoc($resultData)) {
			return $row;
		}
		else{
			$result = false;
			return $result;
		}

		mysqli_stmt_close($stmt);
	}

	function deleteComments($con){
		if (isset($_POST['commentDelete'])){
			
			$email = $_POST['email'];
			

			$sql = "DELETE FROM user WHERE email='$email'";
			$result = $con->query($sql);
			header("Location: docquery.php");
		}
	}

	function replyComments($url){
		if (isset($_POST['commentReply'])){

			$url = 'docprescription.php';
			
			header('Location: ' . $url);
		}
	}

	function deletePrescriptions($con){
		if (isset($_POST['prescriptionDelete'])){
			
			$to_email = $_POST['to_email'];
			

			$sql = "DELETE FROM doctor WHERE to_email='$to_email'";
			$result = $con->query($sql);
			header("Location: prescription.php");
		}
	}