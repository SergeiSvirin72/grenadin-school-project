<?php
	include ('../db.php');
	
	if (empty(trim($_POST['company_name'])) || empty(trim($_POST['company_mail']))) {
		echo "Заполните все поля!";
	} else if(!filter_var(trim($_POST['company_mail']), FILTER_VALIDATE_EMAIL)) {
		echo "Неверный формат E-mail!"; 
	} else {
		if($_POST["form_hidden"] == "rent-form") {
			$result = mysqli_query($conn, "INSERT INTO request_rent (
			company_name, company_site, company_inn, company_kpp, company_bik, 
			company_rs, company_ks, company_bank, company_juridical, company_postal, 
			company_phone, company_fax, company_mail, company_head, participant_name, 
			participant_mail, participant_post, participant_phone, product_type, product_spot, 
			product_width, product_length, product_electricity, product_notes
			) VALUES (
			'$_POST[company_name]', '$_POST[company_site]', '$_POST[company_inn]', '$_POST[company_kpp]', '$_POST[company_bik]', 
			'$_POST[company_rs]', '$_POST[company_ks]', '$_POST[company_bank]', '$_POST[company_juridical]', '$_POST[company_postal]', 
			'$_POST[company_phone]', '$_POST[company_fax]', '$_POST[company_mail]', '$_POST[company_head]', '$_POST[participant_name]', 
			'$_POST[participant_mail]', '$_POST[participant_post]', '$_POST[participant_phone]', '$_POST[product_type]', '$_POST[product_spot]', 
			'$_POST[product_width]', '$_POST[product_length]', '$_POST[product_electricity]', '$_POST[product_notes]'
			)");
			echo $result;
		} else if($_POST["form_hidden"] == "perf-form") {
			$result = mysqli_query($conn, "INSERT INTO request_perf (
			company_name, company_site, company_inn, company_kpp, company_bik, 
			company_rs, company_ks, company_bank, company_juridical, company_postal, 
			company_phone, company_fax, company_mail, company_head, participant_name, 
			participant_mail, participant_post, participant_phone,
			performance_description, performance_time
			) VALUES (
			'$_POST[company_name]', '$_POST[company_site]', '$_POST[company_inn]', '$_POST[company_kpp]', '$_POST[company_bik]', 
			'$_POST[company_rs]', '$_POST[company_ks]', '$_POST[company_bank]', '$_POST[company_juridical]', '$_POST[company_postal]', 
			'$_POST[company_phone]', '$_POST[company_fax]', '$_POST[company_mail]', '$_POST[company_head]', '$_POST[participant_name]', 
			'$_POST[participant_mail]', '$_POST[participant_post]', '$_POST[participant_phone]',
			'$_POST[performance_description]', '$_POST[performance_time]'
			)");
			echo $result;
		}		
	}
	
	mysqli_close($conn);
?>