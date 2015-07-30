<!DOCTYPE html>
<html lang="en">
<head>
	<title>Административный доступ к админке</title>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' href="stylesheets/font-awesome.min.css">
	<link rel="stylesheet" href="stylesheets/reset.css">

	<link rel="stylesheet" href="stylesheets/style.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/scrollUp.js"></script>
</head>
<body>
	<div class="login_page">
		<div class="login_pad">
			<div class="login_content uni_display">
				<img src="image/Administrative Tools-100.png" alt="picture" class="login_img">
				<p class="login_description">
					Добро пожаловать в админ панель сайта
				</p>
			</div>
			<form action="#" method="post" class="login_form uni_display">
				<input type="text" class="login_uni_inp" placeholder="Логин">
				<input type="password" class="login_uni_inp">
				<input type="submit" class="login_submit" value="Войти">
				<a href="#" class="forgot_ps">
					Потеряли пароль?
				</a>
			</form>
		</div>
		<a id="scroller" href="#top" style="position: fixed; z-index: 2147483647; display: block;">
			<i class="fa fa-chevron-up fa-lg"></i>
		</a>
	</div>
</body>
</html>