<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/news.css">
	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/footer.css">
	<link rel="shortcut icon" href="images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Новости</title>
</head>
<body>
	<script src="scripts/load_news.js"></script>
	<div class="wrapper">
		<?php include 'includes/header.php'; ?>
		<main>
			<section class="news">
				<div class="container">
					<h1>Новости</h1>
					<div class="form-group">
						Сортировать по дате: 
						<select class="form-control">
							<option value="ASC">Сначала старые</option>
							<option value="DESC">Сначала новые</option>
						</select>
					</div>
					<div class="content">
					</div>
					<div class="load-more">
						<a href="javascript:void(0);" class="btn btn-danger">Загрузить еще...</a>
					</div>
				</div>
			</section>
		</main>
		<?php include 'includes/footer.php'; ?>
	</div>
</body>
</html>