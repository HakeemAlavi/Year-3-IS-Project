<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PRESCRIPTION PAGE</title>
	<link rel="stylesheet" href="css/user.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/docqueries.css">
	<link rel="stylesheet" href="css/docqbutton.css">
	<link rel="stylesheet" href="css/docqbtncolor.css">
</head>
<body>
		<div class="topnav">
		

  <a class="active" href="logout.php">Logout</a>
  <a href="newspage.php">News</a>
  <a href="contactpage.php">Contact</a>
  <a href="profilepage.php">Profile</a>
  <a href="userhome.php">Home</a>
</div>
	
	<center>
		<br><br>
	<h2 style="color:royalblue;">Patient Prescriptions</h2>
	<br><br><br>
	<!-- <div class="commentbox"> -->
<?php

require_once 'inc/function.inc.php';
//require_once 'profilepage.php';
require_once 'inc/connection.inc.php';

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
//$to_email = $_POST['to_email'];
//$username = isset($_SESSION["username"]);
$sql = "SELECT to_firstname, to_lastname , to_email, to_biodata FROM doctor ";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

  	

    echo '<div class="commentbox">' . "  Dear " . $row["to_firstname"]. " " . $row["to_lastname"].", <br><br><br>".
    // "  E-mail: " . $row["to_email"]."<br><br>".
    "  Your prescription is : <br><br>" . $row["to_biodata"]. "<br><br><br>";

    echo '
    	<form class="delete-form" method="post" action="'.deletePrescriptions($con).'">'.
    		
    		"<input type='hidden' name='to_email' value='".$row["to_email"]."'>".

    		"<button type='submit' name='prescriptionDelete'class='delete'>Delete</button>".
    		
    		"<br><br>".
    		"</form>".
    		'</div>';

    
  }
} else {
  echo "0 results";
}

mysqli_close($con);
?>

</center>


</body>
</html>