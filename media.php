<?php
	include ('db.php');
	
	if(isset($_GET['id'])) {
		$result = mysqli_query($conn, "SELECT id FROM albums WHERE id=$_GET[id]");
		if(mysqli_num_rows($result)==0) {
			header('Location: albums.php');
		}					
	} else {
		header('Location: albums.php');
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
	<link rel="stylesheet" href="styles/media.css">
	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/footer.css">
	<link rel="shortcut icon" href="images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Медиа</title>
</head>
<body>
	<div class="wrapper">
		<?php include 'includes/header.php'; ?>
		<main>
			<section class="media">
				<div class="container">
					<?php
						include ('db.php');
						$result = mysqli_query($conn, "SELECT * FROM albums WHERE id=$_GET[id]");
						$name = mysqli_fetch_assoc($result);
						echo "<h1>$name[name]</h1>";
					?>
					<div class="content">
						<?php
							$result = mysqli_query($conn, "SELECT COUNT(id) AS total FROM media WHERE album=$_GET[id]");
							$total=mysqli_fetch_assoc($result);
							if($total['total'] == 0) echo 'В альбоме пока нет фотографий.';
							
							$result = mysqli_query($conn, "SELECT * FROM media WHERE album=$_GET[id]");
							$i = 1;
							while($row=mysqli_fetch_array($result))
							{
						?>
								<div class="item">
									<img src="images/media/<?php echo $row['path'];?>">
									<div class="overlay" onclick="openModal();currentSlide(<?php echo $i;?>)"></div>
								</div>
						<?php
								$i++;
							}							
						?>
						<div class="item"></div><div class="item"></div><div class="item"></div>
					</div>
				</div>
				
				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()"><i class="fas fa-times"></i></span>
					<div class="modal-content">
						<?php
							$result = mysqli_query($conn, "SELECT * FROM media WHERE album=$_GET[id]");
							$total = mysqli_num_rows($result);
							$i = 1;
							while($row=mysqli_fetch_array($result))
							{
						?>
								<div class="mySlides">
									<div class="numbertext"><?php echo $i." / ".$total;?></div>
									<div class="img-handler">
										<img src="images/media/<?php echo $row['path'];?>">
									</div>
								</div>						
						<?php
								$i++;
							}
							mysqli_close($conn);							
						?>

						<a class="prev" onclick="plusSlides(-1)"><i class="fas fa-angle-left"></i></a>
						<a class="next" onclick="plusSlides(1)"><i class="fas fa-angle-right"></i></a>
					</div>
				</div>
				<script src="scripts/lightbox.js"></script>
			</section>
		</main>
		<?php include 'includes/footer.php'; ?>
	</div>
</body>
</html>