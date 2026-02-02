<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = "О компании";
include_once("templateParts/head.php"); ?>

<body>

	<?php include_once("templateParts/mobileMenu.php"); ?>
	<?php
	$nav_color = "navbar-light";
	include_once("templateParts/navbar.php"); ?>
	<?php include_once("templateParts/header-secondary.php"); ?>

	<section class="section section-experts">
		<div class="container">
			<div class="experts-wrapper">
				<picture class="experts-photo">
					<source type="image/webp" srcset="img/experts.webp">
					<source type="image/jpeg" srcset="img/experts.jpg">
					<img src="img/experts.jpg" class="experts-photo" alt="experts">
				</picture>
				<div class="experts-content">
					<div class="separator"></div>
					<h2 class="section-title">мы - эксперты в области производства химии</h2>
					<p class="experts-text">
						Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
					</p>
				</div>
			</div>

		</div>
	</section>

	<?php
	$features_slider_color = "features-slider-dark";
	$slider_prev_button = "prev-dark";
	$slider_next_button = "next-dark";
	include_once("templateParts/swiper/features-slider.php"); ?>

	<section class="section section-ourProduction">
		<div class="container">
			<div class="ourProduction-wrapper experts-wrapper">
				<div class="ourProduction-title-separator-block">
					<div class="separator ourProduction-saparator-hidden"></div>
					<h2 class="section-title ourProduction-title-hidden">Наше производство</h2>
				</div>
				<div class="ourProduction-content experts-content">
					<div class="separator ourProduction-saparator"></div>
					<h2 class="section-title ourProduction-title">Наше производство</h2>
					<p class="ourProduction-text experts-text">
						Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
						Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
					</p>

					<ul class="clients-list">
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#car"></use>
							</svg>
							Автомобильная химия
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#car-cosm"></use>
							</svg>
							Бытовая химия
						</li>

						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#bricks"></use>
							</svg>
							Дезинфицирующие средства
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#brush"></use>
							</svg>
							Пищевые аэрозоли
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#cosmetic"></use>
							</svg>
							Косметическая продукция
						</li>
						<li class="clients-list-item">
							<svg width="30px" height="30px" class="clients-list-icon">
								<use href="img/sprite.svg#car-cosm"></use>
							</svg>
							Краски аэрозольные
						</li>
					</ul>
				</div>
				<picture class="ourProduction-photo">
					<source type="image/webp" srcset="img/ourProduction.webp">
					<source type="image/jpeg" srcset="img/ourProduction.jpg">
					<img src="img/ourProduction.jpg" class="ourProduction-photo" alt="ourProduction">
				</picture>
			</div>

		</div>
	</section>

	<?php include_once("templateParts/founder.php") ?>

	<section class="section blog">
		<div class="container">
			<div class="separator"></div>
			<h2 class="section-title">Исследовательский центр Aliance production</h2>

			<div class="swiper blog-slider">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper blog">
					<!-- Slides -->
					<a href="#" class="swiper-slide blog-card clear-card">
						<picture class="blog-card-image">
							<source type="image/webp" srcset="img/blog-photo2.webp">
							<source type="image/jpeg" srcset="img/blog-photo2.jpg">
							<img src="img/blog-photo1.jpg" class="blog-card-image" alt="blog-photo">
						</picture>
					</a>
					<a href="#" class="swiper-slide blog-card clear-card">
						<picture class="blog-card-image">
							<source type="image/webp" srcset="img/blog-photo1.webp">
							<source type="image/jpeg" srcset="img/blog-photo1.jpg">
							<img src="img/blog-photo2.jpg" class="blog-card-image" alt="blog-photo">
						</picture>
					</a>
					<a href="#" class="swiper-slide blog-card clear-card">
						<picture class="blog-card-image">
							<source type="image/webp" srcset="img/blog-photo2.webp">
							<source type="image/jpeg" srcset="img/blog-photo2.jpg">
							<img src="img/blog-photo1.jpg" class="blog-card-image" alt="blog-photo">
						</picture>
					</a>
				</div>

				<!-- If we need navigation buttons -->
				<div class="blog-slider-footer">
					<span></span>
					<div class="blog-buttons primary-buttons">
						<div class="blog-button-prev primary-button-prev">
							<svg width="36px" height="24px">
								<use href="img/sprite.svg#arrow-prev"></use>
							</svg>
						</div>
						<div class="blog-button-next primary-button-next">
							<svg width="36px" height="24px">
								<use href="img/sprite.svg#arrow-next"></use>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<?php include_once("templateParts/clients.php") ?>

	<?php include_once('templateParts/footer.php'); ?>
	<?php include_once('templateParts/scripts.php'); ?>

</body>

</html>