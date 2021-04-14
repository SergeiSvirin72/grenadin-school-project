<?php
	$host = 'localhost';
	$user = 'admin';
	$pwsd = "admin";
	$db = 'grenadin'; 
	$conn = mysqli_connect($host, $user, $pwsd, $db);
	mysqli_query($conn, "SET NAMES utf8");
?>