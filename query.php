<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>QUERY PAGE</title>
	<link rel="stylesheet" href="css/user.css">
	<link rel="stylesheet" href="css/style.css">
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
<h2 style="color:royalblue;">Query station</h2>
<br>
<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p><br>Fill in all fields!</p>";
			}
			
			else if ($_GET["error"] == "none"){
				echo "<br><p>Query successfuly sent!</p>";
			}
		}

	?>
	<br><br>
	<div style="background-color: royalblue; width: 500px; border-radius: 20px;" >	<br><br>
				<form action="register.php" method="post">

			
				
				<label for="firstname" style="color:white;">Enter first name</label><br/><br/>
				<input type="text" name="firstname" required placeholder="John"/><br/><br/>

				<label for="lastname" style="color:white;">Enter last name</label><br/><br/>
				<input type="text" name="lastname"required placeholder="Doe"/><br/><br/>

				<label for="email" style="color:white;">Enter Email</label><br/><br/>
				<input type="email" name="email"required placeholder="john.doe@gmail.com"/><br/><br/>

				<!-- <label for="password" style="color:white;">Enter Password</label><br/><br/>
				<input type="password" name="password" minlength="5" maxlength="15" /><br/><br/> -->


				<!--Text Area-->
				<label for="biodata" style="color:white;">State your query</label><br/><br/><br/>
				<textarea placeholder="Type here" cols="23" rows="10" name="biodata" ></textarea><br/><br/>

				
				<!--<label>Select the Recepient's E-mail</label><br/><br/>-->
			<!-- 
					<input type="hidden" name="remail" value="hakeem.alavi@strathmore.edu"/>
			
				<br/><br/> -->




				<!-- This is where the user submits data-->
				<input type="submit" value="Send query" class="btn btn-success"/>

				<!--Reset form-->
				<input type="reset" value="Clear query" class="btn btn-outline-danger"/>

				</form>
				<br/><br/>
			</div>
			
			</center>
</body>
</html>