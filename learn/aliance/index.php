<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = "Главная";
include_once("templateParts/head.php"); ?>

<body class="front-page">

	<?php include_once("templateParts/mobileMenu.php"); ?>
	<?php
	$nav_color = "";
	include_once("templateParts/navbar.php"); ?>


	<header class="header header-image">
		<div class="container">
			<div class="header-content">
				<div class="separator"></div>
				<h1 class="header-title">
					Комплексное обеспечение товарами и расходными материалами бизнеса
				</h1>
				<p class="header-text">
					Высокий уровень вовлечения представителей целевой аудитории является четким
					доказательством простого факта: высококачественный прототип будущего проекта напрямую
					зависит от анализа существующих паттернов поведения.
				</p>
				<button class="button header-button-about" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
			</div>
			<!-- /.header-content -->

			<?php
			$features_slider_color = "features-slider-light";
			$slider_prev_button = "arrow-prev";
			$slider_next_button = "arrow-next";
			include_once("templateParts/swiper/features-slider.php"); ?>
		</div>
		<!-- /.container -->
	</header>
	<? include_once("templateParts/shemaRaboty.php"); ?>
	<? include_once("templateParts/production.php"); ?>


	<section class="section trademark">
		<div class="container">
			<div class="separator"></div>
			<h2 class="section-title">собственные марки</h2>
			<div class="trademark-cards">
				<div class="trademark-card">
					<svg class="trademark-card-logo">
						<use href="img/sprite.svg#AGTECH"></use>
					</svg>
					<h3 class="trademark-card-title">Автохимия AG-Tech</h3>
					<p class="trademark-card-text">
						Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление
						создаёт предпосылки для поставленных обществом задач.
					</p>
				</div>
				<div class="trademark-card">
					<svg class="trademark-card-logo">
						<use href="img/sprite.svg#AP"></use>
					</svg>
					<h3 class="trademark-card-title">Автохимия AP</h3>
					<p class="trademark-card-text">
						Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление
						создаёт предпосылки для поставленных обществом задач.
					</p>
				</div>
			</div>
		</div>
	</section>

	<?php include_once("templateParts/founder.php") ?>

	<?php include_once("templateParts/clients.php") ?>


	<section class="section blog">
		<div class="container">
			<div class="separator"></div>
			<h2 class="section-title">Блог экспертов в области производства</h2>
			<div class="swiper blog-slider">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper blog">
					<!-- Slides -->
					<a href="#" class="swiper-slide blog-card">
						<picture class="blog-card-image">
							<source type="image/webp" srcset="img/blog-photo1.webp">
							<source type="image/jpeg" srcset="img/blog-photo1.jpg">
							<img src="img/blog-photo1.jpg" class="blog-card-image" alt="blog-photo">
						</picture>
						<h3 class="blog-card-title">
							Современная методология разработки одухотворила всех причастных
						</h3>
						<p class="blog-card-text">
							Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
							ситуацию, в равной степени предоставлены...
						</p>
					</a>
					<a href="#" class="swiper-slide blog-card">
						<picture class="blog-card-image">
							<source type="image/webp" srcset="img/blog-photo2.webp">
							<source type="image/jpeg" srcset="img/blog-photo2.jpg">
							<img src="img/blog-photo2.jpg" class="blog-card-image" alt="blog-photo">
						</picture>
						<h3 class="blog-card-title">
							Современная методология разработки одухотворила всех причастных
						</h3>
						<p class="blog-card-text">
							Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую
							ситуацию, в равной степени предоставлены...
						</p>
					</a>
					<a href="#" class="swiper-slide blog-card">
						<picture class="blog-card-image">
							<source type="image/webp" srcset="img/blog-photo1.webp">
							<source type="image/jpeg" srcset="img/blog-photo1.jpg">
							<img src="img/blog-photo1.jpg" class="blog-card-image" alt="blog-photo">
						</picture>
						<h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
						<p class="blog-card-text">
							Сложно сказать, почему элементы политического процесса функционально разнесены на
							независимые элементы. Безусловно, высокотехнологичная...
						</p>
					</a>
				</div>

				<!-- If we need navigation buttons -->
				<div class="blog-slider-footer">
					<a href="blog.php" class="button-link">весь блог</a>
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
	<?php include_once('templateParts/footer.php'); ?>
	<?php include_once('templateParts/scripts.php'); ?>
</body>

</html>