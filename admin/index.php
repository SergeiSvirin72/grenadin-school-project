<?php include("includes/check_auth.php"); ?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/dashboard.css">
	<link rel="shortcut icon" href="../images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Панель администратора</title>
</head>
<body>
	<script src="scripts/show_sidebar.js"></script>
	<main class="wrapper">
		<?php include("includes/sidebar.php"); ?>
		<section class="content">
			<?php include("includes/navbar.php"); ?>
			<section class="dashboard">
				<div class="container">
					<h1>Главная страница</h1>
					<div class="deck">
						<?php 
							include("db.php");
						?>
						<a href="news.php" class="panel panel-primary">
							<div>
								<span class="lead">Новостей</span><br>
								<span class="lead panel-number">
									<?php
										$result = mysqli_query($conn, "SELECT COUNT(id) FROM news");
										$total=mysqli_fetch_array($result);
										echo $total[0];
									?>
								</span>
							</div>
							<i class="fas fa-newspaper fa-4x"></i>
						</a>
						<a href="albums.php" class="panel panel-success">
							<div>
								<span class="lead">Альбомов</span><br>
								<span class="lead panel-number">
									<?php
										$result = mysqli_query($conn, "SELECT COUNT(id) FROM albums");
										$total=mysqli_fetch_array($result);
										echo $total[0];
									?>
								</span>
							</div>
							<i class="fas fa-images fa-4x"></i>
						</a>
						<a href="media.php" class="panel panel-warning">
							<div>
								<span class="lead">Фотографий</span><br>
								<span class="lead panel-number">
									<?php
										$result = mysqli_query($conn, "SELECT COUNT(id) FROM media");
										$total=mysqli_fetch_array($result);
										echo $total[0];
									?>
								</span>
							</div>
							<i class="fas fa-image fa-4x"></i>
						</a>
						<a href="requests_rent.php" class="panel panel-danger">
							<div>
								<span class="lead">Заявок на аренду торговой точки</span><br>
								<span class="lead panel-number">
									<?php
										$result = mysqli_query($conn, "SELECT COUNT(id) FROM request_rent");
										$total=mysqli_fetch_array($result);
										echo $total[0];
									?>
								</span>
							</div>
							<i class="fas fa-sticky-note fa-4x"></i>
						</a>
						<a href="requests_perf.php" class="panel panel-info">
							<div>
								<span class="lead">Заявок на сценическую программу</span><br>
								<span class="lead panel-number">
									<?php
										$result = mysqli_query($conn, "SELECT COUNT(id) FROM request_perf");
										$total=mysqli_fetch_array($result);
										echo $total[0];
										mysqli_close($conn);
									?>
								</span>
							</div>
							<i class="fas fa-sticky-note fa-4x"></i>
						</a>
					</div>
				</div>		
			</section>
		</section>
	</main>
</body>
</html>