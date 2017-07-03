<?php
	include ('dbconn.php');
	
	$newuser = $_POST['usernameinput'];
	$newpwd = $_POST['passwordinput'];
	
	$insert = mysqli_query($con, "INSERT INTO users (`username`, `password`) VALUES ('".$newuser."', '".$newpwd."');");
	
	if ($insert) {
		header("Location: /forum/index.php");
	}
	echo "Gebruiker gemaakt ga terug naar de vorig pagina";
?>