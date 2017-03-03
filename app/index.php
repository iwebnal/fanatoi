<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	
	<link rel="stylesheet" href="css/main.min.css">


	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
	<?php require_once('includes/header.php'); ?>
	<?php require_once('includes/ah-slider.php'); ?>
	<?php require_once('includes/novelty.php'); ?>
	<?php require_once('includes/popular.php'); ?>
	<?php require_once('includes/advantages.php'); ?>
	<?php require_once('includes/textbox.php'); ?>
	<?php require_once('includes/news.php'); ?>
	<?php require_once('includes/vkbox.php'); ?>
	<?php require_once('includes/footer.php'); ?>

		<div class="popup zoom-anim-dialog mfp-hide" id="call-back">
			<div class="form">
				<span class="popup-title">Заказать обратный звонок</span>
				<div class="form-item error">
					<label for="uname">Ваше имя:</label>
					<input type="text" name="uname" id="uname" placeholder="Введите имя:">
				</div>
				<div class="form-item">
					<label for="email">Ваш e-mail:</label>
					<input type="text" name="email" id="email" class="email" placeholder="Введите ваш e-mail:">
				</div>
				<div class="form-item">
					<label for="tel">Ваш телефон:</label>
					<input type="text" name="tel" id="tel" class="phone" placeholder="+7 (---) --- -- --">
				</div>
				<div class="form-item">
					<label for="message">Ваше сообщение:</label>
					<textarea name="message" id="message" placeholder=""></textarea>
				</div>
				<div class="form-item">
					<label for="az-select">Выпадшка:</label>
					<select class="selectpicker" data-style="az-btn" data-width="100%" name="select" id="az-select">
					  <option>Распродажа</option>
					  <option>Мягкие игрушки</option>
					  <option>Оружие</option>
					</select>
				</div>
				<div class="form-item">
					<label for="az-checkbox">Чекбокс:</label><br>
					<span class="az-checkbox">
						<input type="checkbox" name="az-checkbox" id="az-checkbox">
						<label for="az-checkbox"></label>
					</span>
				</div>
				<div class="az-captcha-wrap">
					<div class="az-captcha">
						<div class="g-recaptcha" data-sitekey="6LflIhcUAAAAAKNbZ6X5Go4fEdFLd9_9Fsc4bswE"></div>
					</div>
				</div>
				<div class="form-item az-center">
					<button type="submit">Перезвоните мне</button>
				</div>
			</div>
		</div>
			
	<script src="js/scripts.min.js"></script>

</body>
</html>
