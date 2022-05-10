<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("location:loginpage.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>USER HOME PAGE</title>
		<link rel="stylesheet" href="css/user.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="topnav">
		
<!-- <?php
	echo $_SESSION['username'];
	// echo "(Doctor)";
	
?> -->
  <a class="active" href="logout.php">Logout</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#profile">Profile</a>
</div>
	
<!-- <div class="logout">
<a href="logout.php">Logout</a>
</div> -->
<div class="sidebar">
	  <a href="#queries"><i class="fas fa-chart-line"></i> Your queries</a>
	  <a href="#prescriptions"><i class="fas fa-list-ul"></i> Your Prescriptions</a>

	</div>

</body>
</html>