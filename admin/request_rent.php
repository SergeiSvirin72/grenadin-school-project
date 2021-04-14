<?php
	include ('db.php');
	
	if(isset($_GET['id'])) {
		$result = mysqli_query($conn, "SELECT id FROM request_rent WHERE id=$_GET[id]");
		if(mysqli_num_rows($result)==0) {
			header('Location: requests_rent.php');
		}					
	} else {
		header('Location: requests_rent.php');
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
	<link rel="stylesheet" href="styles/request.css">
	<link rel="shortcut icon" href="../images/gre-logo.ico" type="image/x-icon">	
	<title>Гренадин | Панель администратора</title>
</head>
<body>
	<script src="scripts/show_sidebar.js"></script>
	<main class="wrapper">
		<?php include("includes/sidebar.php"); ?>
		<section class="content">
			<?php include("includes/navbar.php"); ?>
			<section class="request">
				<div class="container">
					<h1>Заявка на аренду торговой точки</h1>
					<?php
						include ('db.php');
						$result = mysqli_query($conn, "SELECT * FROM request_rent WHERE id=$_GET[id]");
						$row=mysqli_fetch_assoc($result)
					?>
					<form method="get" name="rent_form">
						<b>Информация об организации для выставления счета и составления договора</b>
						<div class="form-section">
							<div class="form-row">
								<div class="form-group">
									<label>Полное наименование компании</label>
									<input type="text" value="<?php echo $row['company_name'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Сайт</label>
									<input type="text" value="<?php echo $row['company_site'];?>" class="form-control" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>ИНН</label>
									<input type="text" value="<?php echo $row['company_inn'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>КПП</label>
									<input type="text" value="<?php echo $row['company_kpp'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>БИК</label>
									<input type="text" value="<?php echo $row['company_bik'];?>" class="form-control" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Р.С</label>
									<input type="text" value="<?php echo $row['company_rs'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>К.С</label>
									<input type="text" value="<?php echo $row['company_ks'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Наименование банка</label>
									<input type="text" value="<?php echo $row['company_bank'];?>" class="form-control" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Юридический адрес</label>
									<input type="text" value="<?php echo $row['company_juridical'];?>" class="form-control" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Почтовый/фактический адрес</label>
									<input type="text" value="<?php echo $row['company_postal'];?>" class="form-control" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Телефон</label>
									<input type="text" value="<?php echo $row['company_phone'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Факс</label>
									<input type="text" value="<?php echo $row['company_fax'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>E-mail</label>
									<input type="text" value="<?php echo $row['company_mail'];?>" class="form-control" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Ф.И.О. руководителя</label>
									<input type="text" value="<?php echo $row['company_head'];?>" class="form-control" readonly>
								</div>
							</div>
						</div>
						<br><br>
						<b>Ответственное лицо за участие в фестивале</b>
						<div class="form-section">
							<div class="form-row">
								<div class="form-group">
									<label>Ф.И.О.</label>
									<input type="text" value="<?php echo $row['participant_name'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>E-mail</label>
									<input type="text" value="<?php echo $row['participant_mail'];?>" class="form-control" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Должность</label>
									<input type="text" value="<?php echo $row['participant_post'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Телефон</label>
									<input type="text" value="<?php echo $row['participant_phone'];?>" class="form-control" readonly>
								</div>
							</div>
						</div>
						<br><br>
						<b>Просим зарегистрировать в качестве участника и предоставить в аренду торговую точку</b>
						<div class="form-section">
							<div class="form-row">
								<div class="form-group">
									<label>Вид продукции</label>
									<input type="text" value="<?php echo $row['product_type'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Количество торговых точек</label>
									<input type="text" value="<?php echo $row['product_spot'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Ширина, м</label>
									<input type="text" value="<?php echo $row['product_width'];?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label>Длина, м</label>
									<input type="text" value="<?php echo $row['product_length'];?>" class="form-control" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Кол-во потребляемой электроэнергии (кВт/час)</label>
									<input type="text" value="<?php echo $row['product_electricity'];?>" class="form-control" readonly>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Примечание и особые пожелания</label>
									<textarea class="form-control" readonly><?php echo $row['product_notes'];?></textarea>
								</div>
							</div>
						</div>
					</form>				
				</div>
			</section>
		</section>
	</main>
</body>
</html>