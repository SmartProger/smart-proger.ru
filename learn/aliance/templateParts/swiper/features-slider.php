<!-- Slider main container -->
<div class="swiper features-slider <?= $features_slider_color ?>">
	<!-- Additional required wrapper -->
	<ul class="swiper-wrapper header-features">
		<!-- Slides -->
		<li class="swiper-slide header-features-item">
			<svg width="36px" height="36px">
				<use href="img/sprite.svg#time"></use>
			</svg>
			<p class="header-features-text">Непрерывная работа c 2017 года</p>
		</li>
		<li class="swiper-slide header-features-item">
			<svg width="36px" height="36px">
				<use href="img/sprite.svg#sertificate"></use>
			</svg>
			<p class="header-features-text">Вся продукция сертифицирована</p>
		</li>
		<li class="swiper-slide header-features-item">
			<svg width="36px" height="36px">
				<use href="img/sprite.svg#control"></use>
			</svg>
			<p class="header-features-text">Контроль качества на всех этапах</p>
		</li>
		<li class="swiper-slide header-features-item">
			<svg width="36px" height="36px">
				<use href="img/sprite.svg#delivery"></use>
			</svg>
			<p class="header-features-text">Возможны поставки по всей России</p>
		</li>
		<li class="swiper-slide header-features-item">
			<svg width="36px" height="36px">
				<use href="img/sprite.svg#speed"></use>
			</svg>
			<p class="header-features-text">Оперативное производство</p>
		</li>
	</ul>

	<!-- If we need navigation buttons -->
	<div class="slider-buttons">
		<div class="slider-button-prev">
			<svg width="36px" height="24px">
				<use href="img/sprite.svg#<?= $slider_prev_button; ?>"></use>
			</svg>
		</div>
		<div class="slider-button-next">
			<svg width="36px" height="24px">
				<use href="img/sprite.svg#<?= $slider_next_button; ?>"></use>
			</svg>
		</div>
	</div>
</div>