//just storing unused data here for refference

<?php
	session_start();
?>

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

	<form method="post" action="#">
		<div class="styledbutton1">
		<input type="text" name="q" placeholder="Enter E-mail...">
	</div><br>
		<!-- <select name="column">
			<option value="">Select filter</option>
			<option value="email">E-mail</option>
		</select> -->
		<div class="styledbutton2">
		<input type="submit" name="submit" value="Find">
		</div>
		<br><br>
	</form>

</center>
<?php

//require_once 'inc/function.inc.php';


if (isset($_POST['submit'])) {

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

// function deletePrescriptions($con){
// 		if (isset($_POST['prescriptionDelete'])){
			
// 			$q = $_POST['to_email'];
			

// 			$sql = "DELETE FROM doctor WHERE to_email='$q'";
// 			$result = $con->query($sql);
// 			header("Location: prescription.php");
// 		}
// 	}



$q = $_POST['q'];
//$q2 = $_POST['to_email'];
$sql = "SELECT to_firstname, to_lastname , to_email, to_biodata FROM doctor WHERE to_email='$q'";
$result = mysqli_query($con, $sql);
$sql2 = "DELETE FROM doctor WHERE to_email='$q'";
$result2 = $con->query($sql2);



if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

  	

    echo '<div class="commentbox">' . "  Dear " . $row["to_firstname"]. " " . $row["to_lastname"].", <br><br><br>".
    // "  E-mail: " . $row["to_email"]."<br><br>".
    "  Your prescription is : <br><br>" . $row["to_biodata"]. "<br><br><br>";

    echo '
    	<form class="delete-form" method="post" action="#">'.
    		
    		"<input type='hidden' name='to_email' value='".$row["to_email"]."'>".

    		"<button type='submit' name='submit'class='delete'>Delete</button>".
    		
    		"<br><br>".
    		"</form>".
    		'</div>';

    
  }
} else {
  echo "0 results";
}


mysqli_close($con);
}
?>
</body>
</html>