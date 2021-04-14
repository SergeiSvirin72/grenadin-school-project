<?php
	include ('../db.php');
	$time = time();
	$errors = 0;
	
	foreach ($_FILES['add_media_images']['error'] as $key => $error) {
		if ($error == UPLOAD_ERR_OK) {
			
			$uploaddir = '../../images/media/';
			$tmp_name = $_FILES["add_media_images"]["tmp_name"][$key];
			
			$targetfile = basename($_FILES['add_media_images']['name'][$key]);
			$imagefiletype = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));
			
			$filename = $time.'.'.$imagefiletype;
			$uploadfile = $uploaddir . $filename;	
			
			move_uploaded_file($tmp_name, $uploadfile);
			$time += 1;
			
			$result = mysqli_query($conn, "INSERT INTO media (path, album) 
			VALUES ('$filename', '$_POST[add_media_select]')");
			$errors += $result;
		}
	}
	echo $errors;
	mysqli_close($conn);
?>