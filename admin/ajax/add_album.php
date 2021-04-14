<?php
	include ('../db.php');
	
	if (empty(trim($_POST['add_album_name']))) {
		echo "Заполните все поля!";
	} else {
		$result = mysqli_query($conn, "INSERT INTO albums (name) VALUES ('$_POST[add_album_name]')");
		echo $result;			
	} 
	mysqli_close($conn);
?>