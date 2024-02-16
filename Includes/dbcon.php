<?php
	$host = "sql210.infinityfree.com";
	$user = "if0_35990446";
	$pass = "4mxNFpqjAd3RIMT";
	$db = "if0_35990446_attendancemsystem";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Seems like you have not configured the database. Failed To Connect to database:" . $conn->connect_error;
	}
?>
