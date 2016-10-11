	<!-- price -->
	<div class="wrapper price-wr">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="title">Получить прайс-лист с ценами</div>
				</div>
				<div class="col-xs-6">
					<form id="form-price" class="form-price">
						<div class="form-group for-robots" style="display: none;">
							<input class="form-control" type="text" name="email" />
							<input class="form-control modal-form-value" type="text" name="title" value="Получить прайс" />
						</div>
						<div class="form-group">
							<input class="form-control" name="mail" type="email" placeholder="Email" />
							<button type="submit" class="btn btn-send">Получить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer class="footer-b">
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="contacts-container">
						<a href="/" class="logo"></a>
						<div class="clearfix"></div>
						<p class="adres">Адрес: г. Минск, ул. Асаналиева, д. 46</p>
						<a class="tel" href="tel:+375250000000">+375 (25) 000-00-00</a>
						<a class="mail" href="mailto:info@sitename.by">info@sitename.by</a>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="title">Навигация</div>
					<ul>
						<li class="current-menu-item"><a href="#">Главная</a></li>
						<li><a href="#">Фрукты и овощи</a></li>
						<li><a href="#">Услуги</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
				<div class="col-xs-4">
					<div class="title">Обратная связь</div>
						<form id="form-footer" class="form-footer">
							<div class="form-group">
								<input class="form-control" name="name" type="text" placeholder="Ваше имя" />
							</div>
							<div class="form-group">
								<input class="form-control" name="tel" type="tel" placeholder="Телефон" required />
							</div>
							<div class="form-group">
								<textarea class="form-control" name="comment" cols="30" rows="5" placeholder="Сообщение"></textarea>
							</div>
							<div class="form-group for-robots" style="display: none;">
								<input class="form-control" type="text" name="email" />
								<input class="form-control modal-form-value" type="text" name="Форма в подвале сайта" />
							</div>
							<button type="submit" class="btn btn-send alignright">Отправить</button>
							<div class="clearfix"></div>
						</form>
				</div>
			</div>
		</div>
	</footer>

	<!-- copyright -->
	<div class="wrapper copyright">
		<div class="container">
			<p class="webber">Разработка сайта<a href="http://webber.by"><img src="img/webber-gray.svg" alt="Webber создание сайтов">Webber Studio</a></p>
		</div>
	</div>

	<!-- modal -->
	<div id="fform" style="display: none;">
		<form id="form-id" class="form-class">
			<div class="modal-form-title">Обратная связь</div>
			<div class="form-group">
				<label>* Имя:</label>
				<input class="form-control" name="name" type="text" required />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input class="form-control" name="mail" type="email" />
			</div>
			<div class="form-group">
				<label>* Телефон:</label>
				<input class="form-control" name="tel" type="tel" required />
			</div>
			<div class="form-group">
				<label>Сообщение:</label>
				<textarea class="form-control" name="comment" cols="30" rows="5"></textarea>
			</div>
			<div class="form-group for-robots" style="display: none;">
				<input class="form-control" type="text" name="email" />
				<input class="form-control modal-form-value" type="text" name="title" />
			</div>
			<button type="submit" class="btn btn-send">Отправить</button>
		</form>
	</div>

	<script src="js/min/jquery-3.0.0-min.js"></script>
	<script src="js/min/jquery.fancybox-min.js"></script>
	<script src="js/min/slick-min.js"></script>
	<script src="js/min/script-min.js"></script>
	<script>
		send_form('form-price', 'phpform', 'Спасибо, мы скоро отправим Вам прайс.');
		send_form('form-footer', 'phpform', 'Спасибо, мы скоро с Вами свяжемся.');
	</script>
</body>
</html>