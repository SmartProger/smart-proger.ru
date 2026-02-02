<section class="cta">
	<div class="bg-grey section-cta">
		<img src="img/400_1.png" alt="call to action" class="cta-image" />
		<div class="cta-form-wrapper container">
			<form action="handler.php" method="POST" class="cta-form">
				<h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
				<p class="cta-form-text">
					Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
					интересующие вопросы и поможем даже в самых сложных случаях!
				</p>
				<div class="input-group-wrapper">
					<div class="input-group">
						<input
							id="user-name"
							type="text"
							class="input"
							name="username"
							placeholder=""
							maxlength="100"
							required />
						<label class="input-gpoup-label" for="user-name">Имя</label>
					</div>
					<div class="input-group">
						<input
							id="user-phone"
							type="tel"
							class="input phone-mask"
							name="userphone"
							placeholder=""
							maxlength="30"
							required />
						<label class="input-gpoup-label" for="user-phone">Номер телефона</label>
					</div>
				</div>
				<div class="cta-form-footer">
					<button type="submit" class="button cta-form-button">Отправить заявку</button>
					<div class="notify">
						<svg class="notify-icon" width="14px" height="14px">
							<use href="img/sprite.svg#shield"></use>
						</svg>
						<p class="notify-text">
							Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
							конфиденциальность информации!
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<a href="index.php" class="footer-logo-href">
				<svg class="logo-svg footer-logo">
					<use href="img/sprite.svg#logo-dark"></use>
				</svg>
			</a>

			<a href="tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
			<div class="footer-info">
				<svg class="phone-svg" width="24px" height="24px">
					<use href="img/sprite.svg#mark"></use>
				</svg>
				<address class="footer-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
			</div>
			<div class="footer-info">
				<svg class="phone-svg" width="24px" height="24px">
					<use href="img/sprite.svg#mail"></use>
				</svg>
				<a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
					a.dragunov@tdaliance.ru
				</a>
			</div>

			<div class="footer-social">
				<a href="#" class="footer-social-link">
					<svg class="footer-social-svg" width="24px" height="24px">
						<use href="img/sprite.svg#vk"></use>
					</svg>
				</a>
				<a href="#" class="footer-social-link">
					<svg class="footer-social-svg" width="24px" height="24px">
						<use href="img/sprite.svg#inst"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
	<hr class="footer-separator" />
	<div class="container">
		<div class="footer-bottom">
			<div class="footer-menu-wrapper">
				<a href="contracts.php" class="footer-menu-link footer-menu-link-bold">
					<h2 class="footer-menu-title">Контрактное производство</h2>
				</a>

				<ul class="footer-menu-list footer-menu-column-2">
					<li class="footer-menu-item">
						<a href="avtohim.php" class="footer-menu-link">Автомобильная химия</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Бытовая химия</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Косметическая продукция</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Краски аэрозольные</a>
					</li>
				</ul>
			</div>
			<div class="footer-menu-wrapper">
				<a href="own_marks.php" class="footer-menu-link footer-menu-link-bold">
					<h2 class="footer-menu-title">Собственные марки</h2>
				</a>

				<ul class="footer-menu-list">
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link">Автохимия AP</a>
					</li>
				</ul>
			</div>
			<div class="footer-menu-wrapper">
				<ul class="footer-menu-list">
					<li class="footer-menu-item">
						<a href="about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
					</li>
					<li class="footer-menu-item">
						<a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<hr class="footer-separator" />
	<div class="container">
		<div class="footer-wrapper">
			<div class="footer-legal">
				<p class="footer-copyright">&copy; <?php echo date("Y"); ?> «Aliance Production». Все права защищены.</p>
				<a href="policy.php" class="footer-policy">Политика конфиденциальности</a>
			</div>
			<div class="footer-author">
				<span class="made-in">Сделано в </span>
				<svg width="52" height="11">
					<use href="img/sprite.svg#ruso"></use>
				</svg>
			</div>
		</div>
	</div>
</footer>
<div class="modal" id="feedback-modal">
	<div class="modal-dialog">
		<h2 class="modal-title">Есть вопросы?</h2>
		<a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
			<svg class="close-item" width="18" height="18">
				<use href="img/sprite.svg#modalClose"></use>
			</svg>
		</a>
		<p class="modal-text">
			Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все
			интересующие вопросы и поможем даже в самых сложных случаях!
		</p>
		<form action="handler.php" method="POST" class="modal-form">
			<div class="input-group-wrapper input-group-vertical">
				<div class="input-group modal-input-group">
					<input
						id="modal-user-name"
						type="text"
						class="input modal-input"
						name="username"
						placeholder="" />
					<label class="input-gpoup-label modal-input-label" for="modal-user-name">Имя</label>
				</div>
				<div class="input-group modal-input-group">
					<input
						id="modal-user-phone"
						type="tel"
						class="input modal-input phone-mask"
						name="userphone"
						placeholder="" />
					<label class="input-gpoup-label modal-input-label" for="modal-user-phone">Номер телефона</label>
				</div>
			</div>
			<div class="modal-form-footer">
				<button type="submit" class="button modal-form-button">Отправить заявку</button>
				<div class="notify">
					<svg class="notify-icon" width="14px" height="14px">
						<use href="img/sprite.svg#shield"></use>
					</svg>
					<p class="notify-text">
						Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
						конфиденциальность информации!
					</p>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="modal" id="alert-modal">
	<div class="modal-dialog">
		<svg class="alert-modal-svg">
			<use href="img/sprite.svg#thanks"></use>
		</svg>
		<h2 class="modal-title">Спасибо за заявку!</h2>
		<a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
			<svg class="close-item" width="18" height="18">
				<use href="img/sprite.svg#modalClose"></use>
			</svg>
		</a>
		<p class="modal-text alert-modal-text">
			Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
		</p>
		<a href="index.php" class="button button-alert-modal">
			Вернуться на главную
		</a>

	</div>
</div>