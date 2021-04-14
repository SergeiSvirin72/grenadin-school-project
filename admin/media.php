<?php include("includes/check_auth.php"); ?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/news.css">
	<link rel="shortcut icon" href="../images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Панель администратора</title>
</head>
<body>
	<script src="scripts/show_sidebar.js"></script>
	<script src="scripts/get_media.js"></script>
	<main class="wrapper">
		<?php include("includes/sidebar.php"); ?>
		<section class="content">
			<?php include("includes/navbar.php"); ?>
			<section class="media">
				<div class="container">
					<h1>Медиа</h1>
					<a href="add_media.php" class="btn btn-success"><i class="fas fa-plus"></i> Добавить фотографии</a>
					<div class="media-table">
						<table class="table">
							<thead>
								<tr>
									<th>id</th>
									<th>Фото</th>
									<th>Альбом</th>
									<th>Удалить</th>
								</tr>
							</thead>
							<tbody>									
							</tbody>
						</table>
					</div>
				</div>
			</section>
		</section>
	</main>
</body>
</html>