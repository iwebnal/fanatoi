<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>lk</title>
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
	<?php require_once('includes/breadcrumbs_cardprod.php'); ?>
	<div class="clearfix"></div>

	<section class="az-lk">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<span class="az-title-wrap"><span class="az-title">Личный кабинет</span></span>
				</div>
				<div class="hidden-xs">
					<ul>
						<li><a href="#">Мой кабинет</a></li>
						<li><span>Мои заказы</span></li>
						<li><a href="#">Личные данные</a></li>
					</ul>
				</div>
				<div class="az-lk-table">
					<span class="az-lk-table-title">Список заказов:</span>
					<table class="az-order-list">
						<tr>
							<th><span class="hidden-sm hidden-md hidden-lg">№</span><span class="hidden-xs">Номер заказа</span></th>
							<th><span>Дата</span></th>
							<th><span>Сумма</span></th>
							<th><span class="hidden-sm hidden-md hidden-lg">Статус</span><span class="hidden-xs">Статус заказа</span></th>
						</tr>
						<tr>
							<td><a href="#">1-999-956</a></td>
							<td>29.12.2017</td>
							<td>5 867 руб</td>
							<td><span class="az-process">в обработке</span></td>
						</tr>
						<tr>
							<td><a href="#">1-999-956</a></td>
							<td>29.12.2017</td>
							<td>10 438 руб.</td>
							<td><span class="az-cancel">отменен</span></td>
						</tr>
						<tr>
							<td><a href="#">1-999-956</a></td>
							<td>29.12.2017</td>
							<td>5 867 руб</td>
							<td><span class="az-deliver">доставлен</span></td>
						</tr>
						<tr>
							<td><a href="#">1-999-956</a></td>
							<td>29.12.2017</td>
							<td>5 867 руб</td>
							<td><span class="az-process">в обработке</span></td>
						</tr>
						<tr>
							<td><a href="#">1-999-956</a></td>
							<td>29.12.2017</td>
							<td>10 438 руб.</td>
							<td><span class="az-cancel">отменен</span></td>
						</tr>
						<tr>
							<td><a href="#">1-999-956</a></td>
							<td>29.12.2017</td>
							<td>5 867 руб</td>
							<td><span class="az-deliver">доставлен</span></td>
						</tr>
					</table>
					<div class="col-xs-12 az-bg-gray">
						<table class="az-table-basket style2">
							<tr>
								<th>Товар</th>
								<th>Описание</th>
								<th>Цена за единицу</th>
								<th>Кол-во</th>
								<th>Итоговая сумма</th>
							</tr>
							<tr>
								<td>
									<div class="az-basket-img">
										<img src="img/novelty1.jpg" alt="photo">
									</div>
								</td>
								<td>
									<span class="az-basket-item-name">Дракон из<br> “Как приручить дракона”</span>
								</td>
								<td class="clearfix"><span class="hidden-sm hidden-md hidden-lg">за еденицу:</span> 1 800 <strong>руб.</strong></td>
								<td>
									<span>
										2
									</span>
								</td>
								<td><span class="hidden-sm hidden-md hidden-lg">Итого:</span> 3 900 <strong>руб.</strong></td>
							</tr>
							<tr>
								<td>
									<div class="az-basket-img">
										<img src="img/novelty1.jpg" alt="photo">
									</div>
								</td>
								<td>
									<span class="az-basket-item-name">Дракон из<br> “Как приручить дракона”</span>
								</td>
								<td class="clearfix"><span class="hidden-sm hidden-md hidden-lg">за еденицу:</span> 1 800 <strong>руб.</strong></td>
								<td>
									<span>
										2
									</span>
								</td>
								<td><span class="hidden-sm hidden-md hidden-lg">Итого:</span> 3 900 <strong>руб.</strong></td>
							</tr>
						</table>
						<div class="az-address-itog style2">
							<div class="row">
								<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
									<div class="az-address">
										<span class="az-address-title">Адрес магазина:</span>
										<span class="az-address-text">Москва,<br> ул. Академика Королева 12 офис 99</span><br>
										<span class="az-address-text">Пн-Вс 10:00 - 22:00</span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
									<div class="az-itog">
										<span class="az-itog-sum">Итого</span><br>
										<span class="az-cupon-sum">Товаров на: 2 950 руб.</span><br>
										<span class="az-cupon-sum">оставка: 0 руб.</span><br>
										<span class="az-cupon-sum-end">К оплате: 3 900 руб.</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>
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
