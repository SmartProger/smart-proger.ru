<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = "Контрактное производство";
include_once("templateParts/head.php"); ?>

<body>

	<?php include_once("templateParts/mobileMenu.php"); ?>
	<?php
	$nav_color = "navbar-light";
	include_once("templateParts/navbar.php"); ?>

	<?php include_once('templateParts/header-secondary.php'); ?>

	<?php
	$show_title = 'hidden-production-title';
	include_once('templateParts/production.php'); ?>

	<section class="section seo">
		<div class="container">
			<h3 class="seo-title">SEO Заголовок</h3>
			<p class="seo-text">
				Также как дальнейшее развитие различных форм деятельности предполагает независимые способы реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: курс на социально-ориентированный национальный проект играет важную роль в формировании как самодостаточных, так и внешне зависимых концептуальных решений. Внезапно, интерактивные прототипы набирают популярность среди определенных слоев населения, а значит, должны быть...
			</p>
			<a href="#" class="seo-more">
				<svg class="seo-logo" width="16px" height="16px">
					<use href="img/sprite.svg#refresh"></use>
				</svg>
				Читать больше
			</a>
		</div>
	</section>

	<?php include_once('templateParts/footer.php'); ?>
	<?php include_once('templateParts/scripts.php'); ?>

</body>

</html>