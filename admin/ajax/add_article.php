<?php
	include ('../db.php');
	
	if (empty(trim($_POST['add_article_name'])) || empty(trim($_POST['add_article_text']))) {
		echo "Заполните все поля!";
	} else {
		$date = date("Y-m-d");
		if(!file_exists($_FILES['add_article_image']['tmp_name']) || !is_uploaded_file($_FILES['add_article_image']['tmp_name'])){
			$result = mysqli_query($conn, "INSERT INTO news (name, text, date, img) 
			VALUES ('$_POST[add_article_name]', '$_POST[add_article_text]', '$date', 'false')");
			echo $result;			
		} else {
			$uploaddir = '../../images/news/';
			$filename = basename($_FILES['add_article_image']['name']);
			$uploadfile = $uploaddir . $filename;

			if (move_uploaded_file($_FILES['add_article_image']['tmp_name'], $uploadfile)) {
				$result = mysqli_query($conn, "INSERT INTO news (name, text, date, img) 
				VALUES ('$_POST[add_article_name]', '$_POST[add_article_text]', '$date', '$filename')");
				echo $result;
			} else {
				echo "При отправке заявки произошла ошибка!";
			}	
		}
	} 	
	mysqli_close($conn);	
?>