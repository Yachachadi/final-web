<!Doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Интернет-магазин гаджетов robotic.kz</title>
		<link href="styles/fonts.css" type="text/css" rel="stylesheet">
		<link href="styles/style.css" type="text/css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/mainsc.js"></script>
	</head>
	<body>
		
		<!--Popup Start-->
		<div id="popups">
			<div id="popup-bg" style="display: none;"></div>
			<div class="wrapper">
				<div class="popup-box follow" id="follow-box" name="follow-box" style="display: none;">
					<i class="icon icon-close"></i>
					<div class="popup-header">
						<h4>Подписаться</h4>
					</div>
					<div class="popup-help">
						<span>Присоединяйтесь в наш большой круг друзей!<br/> Мы будем присылать Вам только интересные новости</span>
					</div>
					<div class="popup-body">
						<form method="post">
							<input type="text" placeholder="Ваша почта" autocomplete="off" autocorrect="off" autocapitalize="off">
							<i class="icon icon-send"></i>
						</form>
					</div>
				</div>
				<div class="popup-box callback" id="callback-box" name="callback-box" style="display: none;">
					<i class="icon icon-close"></i>
					<div class="popup-header">
						<h4>Обратный звонок</h4>
					</div>
					<div class="popup-help">
						<span>Оставьте свой номер, мы перезвоним<br/> вам в удобное для вас время</span>
					</div>
					<div class="popup-body">
						<form method="post">
							<input type="text" placeholder="Представьтесь" autocomplete="off" autocorrect="off" autocapitalize="off">
							<input type="text" placeholder="Номер телефона" autocomplete="off" autocorrect="off" autocapitalize="off">
							<i class="icon icon-send"></i>
						</form>
					</div>
				</div>
				<div class="popup-box faq" id="faq-box" name="faq-box" style="display: none;">
					<i class="icon icon-close"></i>
					<div class="popup-header">
						<h4>Статус заказа</h4>
					</div>
					<div class="popup-help">
						<span>Возникли проблемы ?<br/>Не переживайте, мы постараемся<br/> решить их в кратчайшие сроки</span>
					</div>
					<div class="popup-body">
						<form method="post">
							<input type="text" placeholder="Номер заказа" autocomplete="off" autocorrect="off" autocapitalize="off">
							<input type="text" placeholder="Номер телефона" autocomplete="off" autocorrect="off" autocapitalize="off">
							<i class="icon icon-send"></i>
						</form>
					</div>
				</div>
				<div class="popup-box need-more" id="need-more-box" name="need-more-box" style="display: none;">
					<i class="icon icon-close"></i>
					<div class="popup-header">
						<h4>Сообщить о поступлении</h4>
					</div>
					<div class="popup-help">
						<span>Данного товара нет на складе.<br/>Оставьте заявку, мы оповестим вас!</span>
					</div>
					<div class="popup-body">
						<div class="popup-preview">
							<img src="">
							<a href="">Перейти к товару</a>
						</div>
						<form method="post">
							<input type="text" placeholder="Представьтесь" autocomplete="off" autocorrect="off" autocapitalize="off">						
							<input type="text" placeholder="Ваша почта" autocomplete="off" autocorrect="off" autocapitalize="off">
							<input type="text" placeholder="Номер телефона" autocomplete="off" autocorrect="off" autocapitalize="off">
							<i class="icon icon-send"></i>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--Popup End-->

		<!--Header Start-->
		<div class="wrapper">
			<div id="header">
				<div id="logotype">
					<a href="index.html" title="Вернуться на главную"></a>
				</div>
				<div id="inform-bar">
					<div>
						<i class="icon icon-call-center"></i>
						<span>8 (705) 475-60-28</span>
						<a class="callback-caller"><p>Заказать бесплатный звонок</p></a>
					</div>
					<div class="disable">
						<i class="icon icon-faq-center"></i>
						<span>Центр поддержки</span>
						<a class="faq-caller"><p>Что с моим заказом?</p></a>
					</div>
					<div>
						<p class="btn btn-info" name="follow" id="follow">Подписаться</p>
					</div>
				</div>
				<div id="user">
					<div id="sign-in">
						<i class="icon icon-sign"></i>
						<a href="" title="Вход">Вход</a>
						<span class="separator">•</span>
						<a href="index3.html" title="Регистрация">Регистрация</a>
					</div>
					<div id="cart">
						<a href="#" class="icon icon-cart">0</a>
					</div>
				</div>
			<div class="clear"></div>
			</div>
		</div>
		<!--Header End-->

		<!--Menu Start-->
		<div id="menu">
			<div class="wrapper">
				<nav>
					<ul>
						<a href="" title="Новости из мира техники" class="active"><li>Каталог</li></a>
						<a href="" title="О скидках на наш товар"><li>Скидки</li></a>
						<a href="" title="Статьи"><li>Статьи</li></a>
						<a href="" title="Оплата и доставка"><li>Оплата и доставка</li></a>
						<a href="" title="Гарантия"><li>Гарантия</li></a>
						<a href="" title="Кто мы и что мы делаем"><li>О компании</li></a>
						<a href="contacts.html" title="Обратная связь"><li>Контакты</li></a>
					</ul>
				</nav>
				<div id="search">
					<form method="post">
						<input type="text" name="search" placeholder="Arduino Uno">
						<a href="" title="Поиск"><i class="icon icon-search"></i></a>
					</form>				
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<!--Menu End-->

		<!--Main Start-->
		<div class="wrapper main-wrapper">
			<div id="sidebar">
				<div class="sr-container">
					<h2>Каталог</h2>
					<ul>
						<a href="#"><li>Все товары</li></a>
						<a href="#"><li>Умные часы</li></a>
						<a href="#"><li>Платы</li></a>
						<a href="#"><li>Здаровье 2.0</li></a>
						<a href="#"><li>Игрушки 2.0</li></a>
						<a href="#"><li>Дорожные аксессуары</li></a>
						<a href="#"><li>Дорожные сумки и чемоданы</li></a>
					</ul>
				</div>
				<div class="sr-container">
					<h2>Блог</h2>
					<ul>
						<a href="#"><li>История проекта</li></a>
						<a href="#"><li>Умные часы - нужны ли ?</li></a>
						<a href="#"><li>Как, Зачем и Почему?</li></a>
					</ul>
				</div>
			</div>
			<div id="content">
				asd
			</div>
		</div>
		<!--Main End-->

	</body>
</html>