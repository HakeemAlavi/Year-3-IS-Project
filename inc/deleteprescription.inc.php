<?php
session_start();

require_once 'connection.inc.php';
if (isset($_POST['prescriptionDelete'])){
			
			$to_email = $_POST['to_email'];
			

			$sql = "DELETE FROM doctor WHERE to_email='$to_email'";
			$result = $con->query($sql);
			header("Location: ../prescription.php");
		}
?>