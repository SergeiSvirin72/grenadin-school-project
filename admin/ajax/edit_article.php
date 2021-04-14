<?php
	include ('../db.php');
	
	if (empty(trim($_POST['edit_article_name'])) || empty(trim($_POST['edit_article_text']))) {
		echo "Заполните все поля!";
	} else {
		if(!file_exists($_FILES['edit_article_image']['tmp_name']) || !is_uploaded_file($_FILES['edit_article_image']['tmp_name'])){
			$result = mysqli_query($conn, "UPDATE news 
			SET name = '$_POST[edit_article_name]', text = '$_POST[edit_article_text]' 
			WHERE id = '$_POST[edit_article_hidden]';");
			echo $result;			
		} else {
			$uploaddir = '../../images/news/';
			$targetfile = basename($_FILES['edit_article_image']['name']);
			$imagefiletype = strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));
			$filename = time().'.'.$imagefiletype;
			$uploadfile = $uploaddir . $filename;

			if (move_uploaded_file($_FILES['edit_article_image']['tmp_name'], $uploadfile)) {
				$date = date("Y-m-d");
				$result = mysqli_query($conn, "UPDATE news 
				SET name = '$_POST[edit_article_name]', text = '$_POST[edit_article_text]', img = '$filename' 
				WHERE id = '$_POST[edit_article_hidden]';");
				echo $result;
			} else {
				echo "При отправке заявки произошла ошибка!";
			}	
		}
	}

	mysqli_close($conn);	
?>