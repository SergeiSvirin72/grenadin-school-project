<?php
	include ('db.php');
	
	if(isset($_GET['id'])) {
		$result = mysqli_query($conn, "SELECT id FROM news WHERE id=$_GET[id]");
		if(mysqli_num_rows($result)==0) {
			header('Location: news.php');
		}					
	} else {
		header('Location: news.php');
	}

	mysqli_close($conn);
?>
<?php include("includes/check_auth.php"); ?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/add_article.css">
	<link rel="shortcut icon" href="../images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Панель администратора</title>
</head>
<body>
	<script src="scripts/show_sidebar.js"></script>
	<script src="scripts/edit_article.js"></script>
	<main class="wrapper">
		<?php include("includes/sidebar.php"); ?>
		<section class="content">
			<?php include("includes/navbar.php"); ?>
			<section class="edit-article">
				<div class="container">
					<h1>Редактировать новость</h1>
					
					<div class="alert alert-success">
						Новость успешно отредактирована!
					</div>
					<div class="alert alert-danger">
					</div>
					<?php
						include ('db.php');
						$result = mysqli_query($conn, "SELECT * FROM news WHERE id=$_GET[id]");
						$row=mysqli_fetch_assoc($result)
					?>
					<div class="edit-article-image">
						<?php 
							if($row['img']!="false"){
								echo "<img src='../images/news/$row[img]'>";
							}
						?>						
					</div>
					<form method="post" name="edit_article_form">
						<div class="form-group">
							<label>Заголовок новости</label>
							<input type="text" name="edit_article_name" value="<?php echo $row['name'];?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Текст новости</label>
							<textarea name="edit_article_text" class="form-control"><?php echo $row['text'];?></textarea>
						</div>
						<div class="form-group">
							<label>Изображение</label>
							<input name="edit_article_image" type="file" class="form-control">
						</div>
						<input name="edit_article_hidden" type="hidden" value="<?php echo $row['id']; mysqli_close($conn);?>">
						<input type="button" name="edit_article_submit" value="Редактировать новость" class="btn btn-success">					
					</form>
				</div>
			</section>
		</section>
	</main>
</body>
</html>