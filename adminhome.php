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
	<title>ADMIN HOME PAGE</title>
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="css/admin.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="topnav">
		
<!-- <?php
	echo $_SESSION['username'];
	// echo "(Doctor)";
	
?> -->
  <a class="active" href="logout.php">Logout</a>
  <a href="adminhome.php">Home</a>
  <!-- <a href="newspage.php">News</a>
  <a href="contactpage.php">Contact</a>
  <a href="profilepage.php">Profile</a> -->
</div>
	


	<!-- <div class="logout">
<a href="logout.php">Logout</a>
</div> -->
	<div class="sidebar">
	  <a href="docquery.php"><i class="fas fa-chart-line"></i> Patient queries</a>
	  <a href="docprescription.php"><i class="fas fa-list-ul"></i> Prescriptions</a>

	</div>

	

</body>
</html>