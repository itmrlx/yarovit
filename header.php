<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="img/favicon-160.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon-57.png">
	<title>Project</title>
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<!-- header panel -->
	<div class="wrapper header-panel">
		<div class="container">
			<p>Адрес: г. Минск, ул. Асаналиева, д. 46</p>
			<a href="tel:+375250000000">+375 (25) 000-00-00</a>
			<a href="#" class="lang ru active">rus</a>
			<a href="#" class="lang en">eng</a>
		</div>
	</div>

	<header class="wrapper header-t not-home">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 logo-container">
					<a href="#" class="logo"></a>
				</div>
				<div class="col-xs-8 menu-container">
					<div class="burger-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<ul class="pro-menu">
						<li class="current-menu-item"><a href="#">Главная</a></li>
						<li><a href="#">Фрукты и овощи</a></li>
						<li><a href="#">Услуги</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
				<div class="col-xs-2 callback-container">
					<a href="#fform" class="callback fancybox" onclick="fform('Заказать звонок','Заказ звонка');">Заказать<br>звонок</a>
				</div>
			</div>
		</div>
		<!-- if is home -->
		<!-- <h1 class="title">Оптовая торговля<br>фруктами и овощами</h1> -->
		<!-- endif -->

		<!-- if is not home -->
		<div class="container">
			<div class="breadcrumbs">
				<a href="#">Главная</a>
				<span>&rsaquo;</span>
				<span>Эта мтраница</span>
			</div>
		</div>
		<!-- endif -->
	</header>