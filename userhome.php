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
		<link rel="stylesheet" href="css/bars.css">
	
	<link rel="stylesheet" href="css/userhome.css">
</head>
<body>
	<div class="topnav">
		
<!-- <?php
	//echo $_SESSION['username'];
	// echo "(Doctor)";
	
?> -->
  <a class="active" href="logout.php">Logout</a>
  <a href="newspage.php">News</a>
  <a href="contactpage.php">Contact</a>
  <a href="profilepage.php">Profile</a>
  <a href="userhome.php">Home</a>
</div>
	
<!-- <div class="logout">
<a href="logout.php">Logout</a>
</div> -->
<div class="sidebar">
	  <a href="query.php"><i class="fas fa-chart-line"></i> Query station</a>
	  <a href="prescription.php"><i class="fas fa-list-ul"></i> Your Prescriptions</a>

	</div>
<section>
	<div class="content2">
			<div class="textBox2">
				<h2><br><span>PAY FIRST ! </span><br> Then get your prescription</h2><br><br>
				<p>Prescriptions will ONLY be sent once payments are received.

Mobile money is ONLY accepted i.e M-Pesa and Airtel Money, and should be sent to the following number: 0713289333.<br><br>If you are paying on behalf of someone, please send a message with the same phone number used previously indicating the patient's names.
</p>
				
			
		</div>
		</section>
</body>
</html>