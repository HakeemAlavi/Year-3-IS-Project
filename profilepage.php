<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/admin.css">
	<title>PROFILE PAGE</title>
</head>
<body>
	<div class="topnav">
	  <a class="active" href="logout.php">Logout</a>
	  <a href="newspage.php">News</a>
	  <a href="contactpage.php">Contact</a>
	  <a href="profilepage.php">Profile</a>
	  <a href="userhome.php">Home</a>
	</div>

	<h1 style="color:royalblue;">USER PROFILE</h1>



<?php
require_once 'inc/connection.inc.php';
require_once 'inc/function.inc.php';

if (isset($_SESSION["username"])) {
				
				
				echo "<p>Name:  " . $_SESSION["username"] . "</p>";
				//echo "<p> E-mail: " . $_SESSION["email"] . "</p>";
				// echo "<p> UID: " . $_SESSION[""] . "</p>";
				// echo "<p> ID: " .$_SESSION["id"] . " </p>";
				
			}
// if (isset($_SESSION["email"])) {
				
				
// 				echo "<p>Email:  " . $_SESSION["email"] . "</p>";
// 			}
?>
</body>
</html>