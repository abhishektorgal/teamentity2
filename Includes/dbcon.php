<?php
	$host = "sql108.infinityfree.com";
	$user = "if0_36001121";
	$pass = "0mEpIizMR2C";
	$db = "if0_36001121_attendencemsystem";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Seems like you have not configured the database. Failed To Connect to database:" . $conn->connect_error;
	}
?>
