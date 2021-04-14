<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/request.css">
	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/footer.css">
	<link rel="shortcut icon" href="images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Отправить заявку</title>
</head>
<body>
	<script src="scripts/send_request.js"></script>
	
	<div class="wrapper">
		<?php include 'includes/header.php'; ?>
		<main>
			<section class="request">
				<div class="container">
					<h1>Заявка на участие</h1>
					<div class="form-group">
						Зарегистрировать в качестве участника
						<select class="form-control">
							<option value="ASC">и предоставить в аренду торговую точку.</option>
							<option value="DESC">сценической программы</option>
						</select>
					</div>
					<br><br>
					
					<div class="alert alert-success">
						Заявка успешно отправлено!
					</div>
					<div class="alert alert-danger">
					</div>
					
					<form method="get" name="rent_form">
						<b>Информация об организации для выставления счета и составления договора</b>
						<div class="form-section">
							<div class="form-row">
								<div class="form-group">
									<label>Полное наименование компании*</label>
									<input type="text" name="company_name" class="form-control">
								</div>
								<div class="form-group">
									<label>Сайт</label>
									<input type="text" name="company_site" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>ИНН</label>
									<input type="text" name="company_inn" class="form-control">
								</div>
								<div class="form-group">
									<label>КПП</label>
									<input type="text" name="company_kpp" class="form-control">
								</div>
								<div class="form-group">
									<label>БИК</label>
									<input type="text" name="company_bik" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Р.С</label>
									<input type="text" name="company_rs" class="form-control">
								</div>
								<div class="form-group">
									<label>К.С</label>
									<input type="text" name="company_ks" class="form-control">
								</div>
								<div class="form-group">
									<label>Наименование банка</label>
									<input type="text" name="company_bank" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Юридический адрес</label>
									<input type="text" name="company_juridical" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Почтовый/фактический адрес</label>
									<input type="text" name="company_postal" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Телефон</label>
									<input type="text" name="company_phone" class="form-control">
								</div>
								<div class="form-group">
									<label>Факс</label>
									<input type="text" name="company_fax" class="form-control">
								</div>
								<div class="form-group">
									<label>E-mail*</label>
									<input type="text" name="company_mail" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Ф.И.О. руководителя</label>
									<input type="text" name="company_head" class="form-control">
								</div>
							</div>
						</div>
						<br><br>
						<b>Ответственное лицо за участие в фестивале</b>
						<div class="form-section">
							<div class="form-row">
								<div class="form-group">
									<label>Ф.И.О.</label>
									<input type="text" name="participant_name" class="form-control">
								</div>
								<div class="form-group">
									<label>E-mail</label>
									<input type="text" name="participant_mail" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Должность</label>
									<input type="text" name="participant_post" class="form-control">
								</div>
								<div class="form-group">
									<label>Телефон</label>
									<input type="text" name="participant_phone" class="form-control">
								</div>
							</div>
						</div>
						<br><br>
						<b>Просим зарегистрировать в качестве участника и предоставить в аренду торговую точку</b>
						<div class="form-section">
							<div class="form-row">
								<div class="form-group">
									<label>Вид продукции</label>
									<input type="text" name="product_type" class="form-control">
								</div>
								<div class="form-group">
									<label>Количество торговых точек</label>
									<input type="text" name="product_spot" class="form-control">
								</div>
								<div class="form-group">
									<label>Ширина, м</label>
									<input type="text" name="product_width" class="form-control">
								</div>
								<div class="form-group">
									<label>Длина, м</label>
									<input type="text" name="product_length" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Кол-во потребляемой электроэнергии (кВт/час)</label>
									<input type="text" name="product_electricity" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Примечание и особые пожелания</label>
									<textarea name="product_notes" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="hidden" name="form_hidden" value="rent-form">
								<input type="button" class="btn btn-danger" name="rent_submit" value="Отправить">
							</div>
						</div>
					</form>
					
					<form class="form-show" method="get" name="perf_form">
						<b>Информация об организации для выставления счета и составления договора</b>
						<div class="form-section">
							<div class="form-row">
								<div class="form-group">
									<label>Полное наименование компании*</label>
									<input type="text" name="company_name" class="form-control">
								</div>
								<div class="form-group">
									<label>Сайт</label>
									<input type="text" name="company_site" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>ИНН</label>
									<input type="text" name="company_inn" class="form-control">
								</div>
								<div class="form-group">
									<label>КПП</label>
									<input type="text" name="company_kpp" class="form-control">
								</div>
								<div class="form-group">
									<label>БИК</label>
									<input type="text" name="company_bik" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Р.С</label>
									<input type="text" name="company_rs" class="form-control">
								</div>
								<div class="form-group">
									<label>К.С</label>
									<input type="text" name="company_ks" class="form-control">
								</div>
								<div class="form-group">
									<label>Наименование банка</label>
									<input type="text" name="company_bank" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Юридический адрес</label>
									<input type="text" name="company_juridical" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Почтовый/фактический адрес</label>
									<input type="text" name="company_postal" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Телефон</label>
									<input type="text" name="company_phone" class="form-control">
								</div>
								<div class="form-group">
									<label>Факс</label>
									<input type="text" name="company_fax" class="form-control">
								</div>
								<div class="form-group">
									<label>E-mail*</label>
									<input type="text" name="company_mail" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Ф.И.О. руководителя</label>
									<input type="text" name="company_head" class="form-control">
								</div>
							</div>
						</div>
						<br><br>
						<b>Ответственное лицо за участие в фестивале</b>
						<div class="form-section">
							<div class="form-row">
								<div class="form-group">
									<label>Ф.И.О.</label>
									<input type="text" name="participant_name" class="form-control">
								</div>
								<div class="form-group">
									<label>E-mail</label>
									<input type="text" name="participant_mail" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Должность</label>
									<input type="text" name="participant_post" class="form-control">
								</div>
								<div class="form-group">
									<label>Телефон</label>
									<input type="text" name="participant_phone" class="form-control">
								</div>
							</div>
						</div>
						<br><br>
						<b>Просим зарегистрировать в качестве участника сценической программы</b>
						<div class="form-section">
							<div class="form-row">
								<div class="form-group">
									<label>Описание выступления</label>
									<textarea name="performance_description" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<label>Время выступления</label>
									<input type="text" name="performance_time" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<input type="hidden" name="form_hidden" value="perf-form">
								<input type="button" class="btn btn-danger" name="perf_submit" value="Отправить">
							</div>
						</div>
					</form>
				</div>
			</section>
		</main>
		<?php include 'includes/footer.php'; ?>
	</div>
</body>
</html>