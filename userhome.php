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
</head>
<body>
	<h2>Welcome Patient</h2>
<?php
	echo $_SESSION['username'];
?>
<a href="logout.php">Logout</a>
</body>
</html>