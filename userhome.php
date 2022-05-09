<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("location:loginpage.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.logout
		{
			display: inline-block;
			margin-top: 0px;
			padding: 0px 20px;
			background: royalblue;
			color: #fff;
			border-radius: 40px;
			font-weight: 500;
			letter-spacing: 1px;
			text-decoration: none;
			position: absolute;
			right: 0;
			top: 0;
			text-align: center;
		}
		a 
		{
			display: inline-block;
			margin-top: 20px;
			padding: 8px 20px;
			background: royalblue;
			color: #fff;
			border-radius: 40px;
			font-weight: 500;
			letter-spacing: 1px;
			text-decoration: none;
		}
		.sidebar {
		  height: 89.8%;
		  width: 170px;
		  position: fixed;
		  z-index: 1;
		  bottom: 0;
		  left: 0;
		  background-color: #123456;
		  overflow-x: hidden;
		  padding-top: 16px;
		}

		.sidebar a {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 14px;
		  color: #fff;
		  display: block;
		}

		.sidebar a:hover {
		  color: #f1f1f1;
		}
	</style>
	<meta charset="utf-8">
	<title>USER HOME PAGE</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h2>Welcome Patient</h2>
<?php
	echo $_SESSION['username'];
?>
<br><br>
<div class="logout">
<a href="logout.php">Logout</a>
</div>
<div class="sidebar">
	  <a href="#queries"><i class="fas fa-chart-line"></i> Your queries</a>
	  <a href="#prescriptions"><i class="fas fa-list-ul"></i> Your Prescriptions</a>

	</div>

</body>
</html>