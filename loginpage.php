<?php


	$host="localhost";
	$user="root";
	$pwd="";
	$db="isproject";

	session_start();


	$data=mysqli_connect($host,$user,$pwd,$db);
	if($data===false)
	{
		die("connection Error");
	}

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username=$_POST["username"];
		$password=$_POST["password"];

		$sql="select * from login where username='".$username."' AND password='".$password."'";
		$result=mysqli_query($data,$sql);
		$row=mysqli_fetch_array($result);

		if($row["usertype"]=="Admin")
		{	$_SESSION['username']=$username;
			header("location:adminhome.php");
		}
		elseif($row["usertype"]=="User")
		{	$_SESSION['username']=$username;
			header("location:userhome.php");
		}
		else
		{
			echo "Username or Password incorrect!";
		}
	}






?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/logandsign.css">
	<link rel="stylesheet" href="css/logandsignbtn.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>
<body>
	<header>
			<a href="landingpage.php"><img src="img/logo.png" class="logo" style="width:110px;height:75px;"></a>
			<ul>
				<li><a href="landingpage.php" style="color:royalblue;">Home</a></li>
				<li><a href="menupage.php" style="color:royalblue;">Menu</a></li>
				<li><a href="signuppage.php" style="color:royalblue;">Sign Up</a></li>
				<li><a href="loginpage.php" style="color:royalblue;">Login</a></li>
			</ul>
		</header>
	<center>
		<h2>Login Form</h2>
		<br><br><br>
	<div style="background-color: royalblue; width: 500px; border-radius: 20px;" >	<br><br>
		<form action="#" method="post">
	<div>
		<label style="color:#fff">Username</label>
		<input type="text" name="username" required>

	</div>
	<br><br>
	<div>
		<label style="color:#fff">Password</label>
		<input type="password" name="password">

	</div>
	<br><br>
	<div class="styledbutton">
		
		<input type="submit" value="Login">

	</div>
		</form>
	<br><br>
	</div>
</center>
</body>
</html>