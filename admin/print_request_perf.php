<?php
	include ('db.php');
	
	if(isset($_GET['id'])) {
		$result = mysqli_query($conn, "SELECT id FROM request_perf WHERE id=$_GET[id]");
		if(mysqli_num_rows($result)==0) {
			header('Location: requests_perf.php');
		}					
	} else {
		header('Location: requests_perf.php');
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
	<link rel="stylesheet" href="styles/print_request.css">
	<link rel="shortcut icon" href="../images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Панель администратора</title>
</head>
<body>
	<script src="scripts/print_request.js"></script>
	<div class="wrapper">
		<main>
			<section class="content">
				<section class="request">
					<div class="container">
						<div class="print-header">
							<div class="print-header-upper">
								<img src="../images/grenadin_logo_rus_short.png">
								<div class="print-header-text">
									<h1 class="print-h2">Гастрономический фестиваль<br>«ГРЕНАДИН»</h1>
									<h1 class="print-h2 h2-danger">17-18 августа 2019 г.</h1>
									<h2 class="print-h3">МОСКВА<br>ПКиО «Сокольники»</h2>
									<h2 class="print-h3 h3-danger">grenadinfest.ru</h2>
								</div>
								<img src="../images/grenadin_logo_rus_short.png">
							</div>
							<div class="hr"></div>
							<p>ООО «АСПЕКТ», Россия, 109388, г.Москва, ул.Гурьянова, 17, корп. 1, тел. +7(985)415-59-75, office@aspect.msk.ru</p>
						</div>
						<h1 class="print-h1 h1-danger">ЗАЯВКА НА УЧАСТИЕ</h1>
						<?php
							include ('db.php');
							$result = mysqli_query($conn, "SELECT * FROM request_perf WHERE id=$_GET[id]");
							$row=mysqli_fetch_assoc($result)
						?>
						
						
						<b class="print-b">Информация об организации для выставления счета и составления договора</b>
						<table>
							<tbody>
								<tr>
									<td>Полное наименование компании: <?php echo $row['company_name'];?></td>
									<td>Сайт: <?php echo $row['company_site'];?></td>
								</tr>
							</tbody>
						</table>
						<table>
							<tbody>
								<tr>
									<td>ИНН: <?php echo $row['company_inn'];?></td>
									<td>КПП: <?php echo $row['company_kpp'];?></td>
									<td>БИК: <?php echo $row['company_bik'];?></td>
								</tr>
							</tbody>
						</table>
						<table>
							<tbody>
								<tr>
									<td>Р.С: <?php echo $row['company_rs'];?></td>
									<td>К.С: <?php echo $row['company_ks'];?></td>
									<td>Наименование банка: <?php echo $row['company_bank'];?></td>
								</tr>
							</tbody>
						</table>
						<table>
							<tbody>
								<tr>
									<td>Юридический адрес: <?php echo $row['company_juridical'];?></td>
								</tr>
								<tr>
									<td>Почтовый/фактический адрес: <?php echo $row['company_postal'];?></td>
								</tr>
							</tbody>
						</table>
						<table>
							<tbody>
								<tr>
									<td>Телефон: <?php echo $row['company_phone'];?></td>
									<td>Факс: <?php echo $row['company_fax'];?></td>
									<td>E-mail: <?php echo $row['company_mail'];?></td>
								</tr>
							</tbody>
						</table>
						<table>
							<tbody>
								<tr>
									<td>Ф.И.О. руководителя: <?php echo $row['company_head'];?></td>
								</tr>
							</tbody>
						</table>

						<b class="print-b">Ответственное лицо за участие в фестивале</b>
						<table>
							<tbody>
								<tr>
									<td>Ф.И.О.: <?php echo $row['participant_name'];?></td>
									<td>E-mail: <?php echo $row['participant_mail'];?></td>
								</tr>
							</tbody>
						</table>
						<table>
							<tbody>
								<tr>
									<td>Должность: <?php echo $row['participant_post'];?></td>
									<td>Телефон: <?php echo $row['participant_phone'];?></td>
								</tr>
							</tbody>
						</table>

						<b class="print-b">Просим зарегистрировать в качестве участника сценической программы</b>
						<table>
							<tbody>
								<tr>
									<td>Описание выступления: <?php echo $row['performance_description'];?></td>
									<td>Время выступления: <?php echo $row['performance_time'];?></td>
								</tr>
							</tbody>
						</table>						
					</div>
				</section>
			</section>
		</main>
		<footer>
			<div class="container">
				<div class="print-sign-row">
					<div>Организатор</div>
					<div>_______________________    /   _______________   /   </div>
				</div>
				<div class="print-sign-row">
					<div style="flex-grow: 1;">« ___ »_______________  2019 г. </div>
					<div style="flex-grow: 1; margin-left: 120px;">М. П.</div>
				</div>
			</div>
		</footer>
	</div>

</body>
</html>