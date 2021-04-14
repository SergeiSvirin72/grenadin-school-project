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
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/article.css">
	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/footer.css">
	<link rel="shortcut icon" href="images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Новости</title>
</head>
<body>
	<div class="wrapper">
		<?php include 'includes/header.php'; ?>
		<main>
			<?php
				include ('db.php');
				$result = mysqli_query($conn, "SELECT * FROM news WHERE id=$_GET[id]");
				$row=mysqli_fetch_assoc($result);
				mysqli_close($conn);
			?>
			
			<section class="article">
				<div class="container">
					<h3><?php echo $row['name'];?></h3>
					<span class="badge badge-danger">
						<?php echo date_format(date_create_from_format('Y-m-d', $row['date']), "d.m.Y");?>
					</span>
					<br>
					<div class="article-image">
						<?php 
							if($row['img']!="false"){
								echo "<img src='images/news/$row[img]'>";
							}
						?>
					</div>
					<p class="text"><?php echo $row['text'];?></p>
				</div>
			</section>
		</main>
		<?php include 'includes/footer.php'; ?>
	</div>
</body>
</html>