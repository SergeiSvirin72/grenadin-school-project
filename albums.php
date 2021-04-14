<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/albums.css">
	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/footer.css">
	<link rel="shortcut icon" href="images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Альбомы</title>
</head>
<body>
	<div class="wrapper">
		<?php include 'includes/header.php'; ?>
		<main>
			<section class="albums">
				<div class="container">
					<h1>Альбомы</h1>
					<?php
						include ('db.php');
						$result = mysqli_query($conn, "SELECT COUNT(id) AS total FROM albums");
						$total=mysqli_fetch_assoc($result);
						if($total['total'] == 0) {
							echo 'Здесь пока нет альбомов.';
						} else {
							$result = mysqli_query($conn, "SELECT * FROM albums");
							while($row=mysqli_fetch_array($result))
							{												
					?>
								<h5>
									<a href="media.php?id=<?php echo $row['id'];?>">
										<?php echo $row['name'];?>
									</a>
								</h5>
					<?php
							}
						}
						mysqli_close($conn);						
					?>					
				</div>
			</section>
		</main>
		<?php include 'includes/footer.php'; ?>
	</div>
</body>
</html>