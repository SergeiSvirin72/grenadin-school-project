<?php
	if(isset($_COOKIE["admin"])) {
		header('Location: index.php');
	}

	if(isset($_GET['logout'])) {
		setcookie("admin", "", time()-3600);
		unset($_COOKIE["admin"]); 
	}
	
	$error = "";
	if(isset($_POST['auth_submit'])) {
		if ($_POST['auth_login']=="admin" && $_POST['auth_password']=="admin") {
			setcookie("admin", "admin");
			header('Location: index.php');
		} else {
			$error = '<div class="alert alert-danger">Неверный логин или пароль!</div>';	
		}
	}
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/auth.css">
	<link rel="shortcut icon" href="../images/gre-logo.ico" type="image/x-icon">
	<title>Гренадин | Панель администратора</title>
</head>
<body>
	<main class="wrapper">
		<section class="auth">
			<img src="../images/gre-logo.png">
			<h1>Авторизация</h1>
			<?php echo $error; ?>
			<form name="auth_form" method="post">
				<div class="form-group">
					<input type="text" name="auth_login" class="form-control" placeholder="Логин">
					<input type="password" name="auth_password" class="form-control form-control-bottom" placeholder="Пароль">
				</div>
				<input type="submit" name="auth_submit" class="btn btn-danger" value="Войти">
			</form>
		</section>
	</main>
</body>
</html>