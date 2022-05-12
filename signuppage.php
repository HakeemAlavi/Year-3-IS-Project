<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SIGN UP PAGE</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/logandsign.css">
</head>
<body>
	
	<header>
			<a href="#"><img src="img/logo.png" class="logo" style="width:110px;height:75px;"></a>
			<ul>
				<li><a href="landingpage.php" style="color:royalblue;">Home</a></li>
				<li><a href="menupage.php" style="color:royalblue;">Menu</a></li>
				<li><a href="signuppage.php" style="color:royalblue;">Sign Up</a></li>
				<li><a href="loginpage.php" style="color:royalblue;">Login</a></li>
			</ul>
		</header>
	<center>
		<h2>Sign Up Form</h2>
		<br><br><br>
	<div style="background-color: royalblue; width: 500px; border-radius: 20px;" >	<br><br>
		<form action="inc/signup.inc.php" method="post">
	<div>
		<label style="color:#fff">Username</label>
		<input type="text" name="username" required>

	</div>
	<br><br>
	<div class="email">
		<label style="color:#fff">Email</label>
		<input type="text" name="email" required>

	</div>
	<br><br>
	<div>
		<label style="color:#fff">Password</label>
		<input type="password" name="password" required>

	</div>
	<br><br>
	<div>
		
		<button type="submit" name="submit">Sign Up</button>

	</div>
		</form>
	<br><br>
	</div>
	<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p><br>Fill in all fields!</p>";
			}
			
			else if ($_GET["error"] == "none"){
				echo "<br><p>You have signed up!</p>";
			}
		}

	?>
</center>
</body>
</html>
