<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Card_Product</title>
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

	<section class="ah-card-product">
	    <div class="container">
	    	<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<ul class="ah-cardproduct-list hidden-xs">
						<li><a href="#">Доставка и оплата</a></li>
						<li><a href="#">Условия возврата и обмена</a></li>
						<li><a href="#">Публичная оферта</a></li>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
					<div class="hidden-lg hidden-md hidden-sm show-xs">
						<span class="az-title-wrap"><span class="az-title">Распродажа</span></span>
					</div>
					<div class="az-filter">
						<span class="az-filter-title">Найти товар по критериям:</span>
						<div class="az-form-wrap">
							<form action="/">
								<div class="az-range">
									<div id="az-slider"></div>
									<span>Диапазон:</span>
									<input type="text" id="minCost" value="1000"/>
									<span> - </span>
									<input type="text" id="maxCost" value="3000"/>
									<span>руб.</span>
								</div>
								<div class="az-filter-inner">
									<div class="az-filter-section">
										<span class="az-filter-section-title">Категория:</span>
										<input type="checkbox" name="cat" id="cat1"><label for="cat1">Мягкие игрушки</label><br>
										<input type="checkbox" name="cat" id="cat2"><label for="cat2">Оружие</label><br>
										<input type="checkbox" name="cat" id="cat3"><label for="cat3">Очки и аксессуары</label><br>
										<input type="checkbox" name="cat" id="cat4"><label for="cat4">Светильники</label><br>
										<input type="checkbox" name="cat" id="cat5"><label for="cat5">3D наклейки</label><br>
										<input type="checkbox" name="cat" id="cat6"><label for="cat6">Конструкторы</label><br>
										<input type="checkbox" name="cat" id="cat7"><label for="cat7">Брелоки</label><br>
										<input type="checkbox" name="cat" id="cat8"><label for="cat8">Подарочные сертификаты</label>
									</div>
									<div class="az-filter-section">
										<span class="az-filter-section-title">Материал:</span>
										<input type="checkbox" name="cat" id="cat9"><label for="cat9">Пластик</label><br>
										<input type="checkbox" name="cat" id="cat10"><label for="cat10">Плюш</label><br>
										<input type="checkbox" name="cat" id="cat11"><label for="cat11">Резина</label>
									</div>
									<div class="az-filter-section">
										<span class="az-filter-section-title">Материал:</span>
										<input type="checkbox" name="cat" id="cat12"><label for="cat12">В наличии</label><br>
										<input type="checkbox" name="cat" id="cat13"><label for="cat13">Под заказ</label>
									</div>
									<button type="submit">Подобрать</button>
								</div>
							</form>
						</div>
					</div>
					<div class="hidden-xs">
						<span class="az-title-wrap"><span class="az-title ah-title">Вы смотрели</span></span>
						<div class="ah-sidebarbox">
							<div class="ah-sidebarbox-item">
								<div class="ah-sidebarbox-left">
									<div class="ah-sidebarbox-imgbox">
										<img src="img/ah-sidebaricon.jpg" alt="sidebaricon">
									</div>
									<span class="ah-salebox">Скидка: 30%</span>
								</div>
								<div class="ah-sidebarbox-right">
									<span class="ah-sidebar-title">Фигурка Железный голем</span>
									<span class="ah-sidebar-subtitle">Майнкрафт, набор</span>
									<span class="ah-sidebar-price1">2 800<span>руб.</span></span>
									<span class="ah-sidebar-price2">1 800<span>руб.</span></span>
								</div>
							</div>
							<div class="ah-sidebarbox-item">
								<div class="ah-sidebarbox-left">
									<div class="ah-sidebarbox-imgbox">
										<img src="img/ah-sidebaricon.jpg" alt="sidebaricon">
									</div>
									<span class="ah-salebox">Скидка: 30%</span>
								</div>
								<div class="ah-sidebarbox-right">
									<span class="ah-sidebar-title">Фигурка Железный голем</span>
									<span class="ah-sidebar-subtitle">Майнкрафт, набор</span>
									<span class="ah-sidebar-price1">2 800<span>руб.</span></span>
									<span class="ah-sidebar-price2">1 800<span>руб.</span></span>
								</div>
							</div>
							<div class="ah-sidebarbox-item">
								<div class="ah-sidebarbox-left">
									<div class="ah-sidebarbox-imgbox">
										<img src="img/ah-sidebaricon.jpg" alt="sidebaricon">
									</div>
									<span class="ah-salebox">Скидка: 30%</span>
								</div>
								<div class="ah-sidebarbox-right">
									<span class="ah-sidebar-title">Фигурка Железный голем</span>
									<span class="ah-sidebar-subtitle">Майнкрафт, набор</span>
									<span class="ah-sidebar-price1">2 800<span>руб.</span></span>
									<span class="ah-sidebar-price2">1 800<span>руб.</span></span>
								</div>
							</div>
							<div class="ah-sidebarbox-item">
								<div class="ah-sidebarbox-left">
									<div class="ah-sidebarbox-imgbox">
										<img src="img/ah-sidebaricon.jpg" alt="sidebaricon">
									</div>
									<span class="ah-salebox">Скидка: 30%</span>
								</div>
								<div class="ah-sidebarbox-right">
									<span class="ah-sidebar-title">Фигурка Железный голем</span>
									<span class="ah-sidebar-subtitle">Майнкрафт, набор</span>
									<span class="ah-sidebar-price1">2 800<span>руб.</span></span>
									<span class="ah-sidebar-price2">1 800<span>руб.</span></span>
								</div>
							</div>
							<div class="ah-sidebarbox-item hidden-md hidden-sm hidden-xs">
								<div class="ah-sidebarbox-left">
									<div class="ah-sidebarbox-imgbox">
										<img src="img/ah-sidebaricon.jpg" alt="sidebaricon">
									</div>
									<span class="ah-salebox">Скидка: 30%</span>
								</div>
								<div class="ah-sidebarbox-right">
									<span class="ah-sidebar-title">Фигурка Железный голем</span>
									<span class="ah-sidebar-subtitle">Майнкрафт, набор</span>
									<span class="ah-sidebar-price1">2 800<span>руб.</span></span>
									<span class="ah-sidebar-price2">1 800<span>руб.</span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
							<span class="az-title-wrap"><span class="az-title">Распродажа</span></span>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular1.jpg" class="img-responsive" alt="popular1">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular2.jpg" class="img-responsive" alt="popular2">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular3.jpg" class="img-responsive" alt="popular3">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular1.jpg" class="img-responsive" alt="popular1">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular2.jpg" class="img-responsive" alt="popular2">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular3.jpg" class="img-responsive" alt="popular3">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular1.jpg" class="img-responsive" alt="popular1">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular2.jpg" class="img-responsive" alt="popular2">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 hidden-md hidden-sm hidden-xs">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular4.jpg" class="img-responsive" alt="popular4">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<a href="#" class="ah-novelty-link">Все популярные товары</a>
						</div>
					</div>
					<div class="row hidden-md hidden-sm hidden-xs">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<span class="az-title-wrap"><span class="az-title">Подарочные наборы</span></span>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular1.jpg" class="img-responsive" alt="popular1">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular2.jpg" class="img-responsive" alt="popular2">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
							<div class="ah-novelty-wrapp">
								<div class="ah-popular-imgbox">
									<img src="img/popular3.jpg" class="img-responsive" alt="popular3">
								</div>
								<span class="ah-popular-title">Фигурка Железный голем</span>
								<span class="ah-popular-subtitle">Майнкрафт, набор</span>
								<div class="ah-novelty-table">
									<div class="ah-popular-tableft">
										<span class="ah-tableft-span">2 800 <span>руб.</span></span>
										<span class="ah-tableft-span1">1 800 <span>руб.</span></span>
									</div>
									<div class="ah-popular-tabright">
										<a href="#" class="ah-tabright-link">купить</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<a href="#" class="ah-novelty-link">Все подарочные наборы</a>
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
