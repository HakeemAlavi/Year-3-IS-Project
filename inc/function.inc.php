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


function createUser($con,$username,$password){
		$sql="INSERT INTO login (username,password) VALUES (?,?);";
		$stmt = mysqli_stmt_init($con);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("location: ../signuppage.php?error=stmtfailed");
			exit();
		}
			// $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


		mysqli_stmt_bind_param($stmt,"ss",$username,$password);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);

		header("location: ../signuppage.php?error=none");
			exit();
	}



function uidExists($con,$username){
		$sql="SELECT * FROM users WHERE usersUid = ? ;";
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