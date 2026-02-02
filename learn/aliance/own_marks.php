<!DOCTYPE html>
<html lang="ru">

<?php
$page_title = "Собственные торговые марки";
include_once("templateParts/head.php"); ?>

<body>

	<?php include_once("templateParts/mobileMenu.php"); ?>
	<?php
	$nav_color = "navbar-light";
	include_once("templateParts/navbar.php"); ?>

	<?php include_once('templateParts/header-secondary.php'); ?>

	<section class="section trademark">
		<div class="container">
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

	<?php include_once('templateParts/footer.php'); ?>
	<?php include_once('templateParts/scripts.php'); ?>

</body>

</html>