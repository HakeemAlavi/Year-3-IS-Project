<?php
require_once 'inc/connection.inc.php';
require_once 'inc/function.inc.php';

if (isset($_SESSION["username"])) {
				
				
				echo '<div class="profile"><p>' . "Name:  " . $_SESSION["username"] . '</p></div>';
				//echo "<p> E-mail: " . $_SESSION["email"] . "</p>";
				// echo "<p> UID: " . $_SESSION[""] . "</p>";
				// echo "<p> ID: " .$_SESSION["id"] . " </p>";
				
			}

?>