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
	<script src="scripts/add_article.js"></script>
	<main class="wrapper">
		<?php include("includes/sidebar.php"); ?>
		<section class="content">
			<?php include("includes/navbar.php"); ?>
			<section class="add-article">
				<div class="container">
					<h1>Добавить новость</h1>
					
					<div class="alert alert-success">
						Новость успешно добавлена!
					</div>
					<div class="alert alert-danger">
					</div>
					<form method="post" name="add_article_form">
						<div class="form-group">
							<label>Заголовок новости</label>
							<input type="text" name="add_article_name" class="form-control">
						</div>
						<div class="form-group">
							<label>Текст новости</label>
							<textarea name="add_article_text" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Изображение</label>
							<input name="add_article_image" type="file" class="form-control">
						</div>
						<input type="button" name="add_article_submit" value="Добавить новость" class="btn btn-success">					
					</form>
				</div>
			</section>
		</section>
	</main>
</body>
</html>