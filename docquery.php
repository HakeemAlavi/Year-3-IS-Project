<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PATIENT QUERIES PAGE</title>
	<link rel="stylesheet" href="css/bars.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/docqueries.css">
	<link rel="stylesheet" href="css/docqbutton.css">
	<link rel="stylesheet" href="css/docqbtncolor.css">
</head>
<body>
		<div class="topnav">
		

  <a class="active" href="logout.php">Logout</a>
  <!-- <a href="newspage.php">News</a>
  <a href="contactpage.php">Contact</a>
  <a href="profilepage.php">Profile</a> -->
  <a href="adminhome.php">Home</a>
</div>
	<center>
		<br><br>
	<h2 style="color:royalblue;">Patient Queries</h2>
	<br><br><br>
	<!-- <div class="commentbox"> -->
<?php

require_once 'inc/function.inc.php';

$servername = 'localhost';

  $username = 'root';

  $serverpass = '';

  $databasename = 'isproject';

// Create connection
$con = mysqli_connect($servername, $username, $serverpass, $databasename);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$url = 'docprescription.php';
$sql = "SELECT firstname, lastname , email, biodata FROM user";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

  	

    echo '<div class="commentbox">' . "  Name: " . $row["firstname"]. " " . $row["lastname"]."<br><br>"."  E-mail: " . $row["email"]."<br><br>"."  Biodata: " . $row["biodata"]. "<br><br><br>";

    echo '
    	<form class="delete-form" method="post" action="'.deleteComments($con).'">'.
    		
    		"<input type='hidden' name='email' value='".$row["email"]."'>".

    		"<button type='submit' name='commentDelete'class='delete'>Delete</button>".
    		"<button type='submit' name='commentReply' action='".replyComments($url)."'>Reply</button>"."<br><br>".
    		"</form>".
    		'</div>';

    //echo '</div>';
  }
} else {
  echo "0 results";
}

mysqli_close($con);
?>
<!-- </div> -->
</center>
</body>
</html>