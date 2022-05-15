<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PRESCRIPTION CREATION PAGE</title>
	<link rel="stylesheet" href="css/user.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/logandsignbtn.css">
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
<h2 style="color:royalblue;">Prescription station</h2>
<br>
<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p><br>Fill in all fields!</p>";
			}
			
			else if ($_GET["error"] == "none"){
				echo "<br><p>Prescription successfuly sent!</p>";
			}
		}

	?>
	<br><br>
	<div style="background-color: royalblue; width: 500px; border-radius: 20px;" >	<br><br>
				<form action="docregister.php" method="post">

			
				
				<label for="to_firstname" style="color:white;">Enter patient's first name</label><br/><br/>
				<input type="text" name="to_firstname" required placeholder="John"/><br/><br/>

				<label for="to_lastname" style="color:white;">Enter patient's last name</label><br/><br/>
				<input type="text" name="to_lastname"required placeholder="Doe"/><br/><br/>

				<label for="to_email" style="color:white;">Enter patient's Email</label><br/><br/>
				<input type="email" name="to_email"required placeholder="john.doe@gmail.com"/><br/><br/>

				<!-- <label for="password" style="color:white;">Enter Password</label><br/><br/>
				<input type="password" name="password" minlength="5" maxlength="15" /><br/><br/> -->


				<!--Text Area-->
				<label for="to_biodata" style="color:white;">Type patient's prescription</label><br/><br/><br/>
				<textarea placeholder="Type here" cols="23" rows="10" name="to_biodata" ></textarea><br/><br/>

				
				<!--<label>Select the Recepient's E-mail</label><br/><br/>-->
			<!-- 
					<input type="hidden" name="remail" value="hakeem.alavi@strathmore.edu"/>
			
				<br/><br/> -->




				<!-- This is where the user submits data-->
				<input type="submit" value="Send prescription" class="styledbutton"/>

				<!--Reset form-->
				<input type="reset" value="Clear prescription" class="styledbutton"/>

				</form>
				<br/><br/>
			</div>
			
			</center>


</body>
</html>