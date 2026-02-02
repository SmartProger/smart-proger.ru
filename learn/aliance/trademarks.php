<!DOCTYPE html>
<html lang="ru">
  
<?php 
$page_title = "Собственные торговые марки";
include_once("templateParts/head.php"); ?>

  <body>
    
    <? include_once("templateParts/mobileMenu.php"); ?>
	<? include_once("templateParts/navbar.php"); ?>

    <section class="header-secondary">
      <div class="container">
        <div class="header-secondary-content">
          <div class="separator header-secondary-separator"></div>
          <h2 class="section-title header-secondary-title"><?= $page_title ?></h2>
          <div class="breadcrumbs">
            <a href="index.php" class="breadcrumbs-home">Главная — </a>
            <span class="breadcrumbs-current"><?= $page_title ?></span>
          </div>
        </div>
        <div class="header-secondary-img"></div>
      </div>
    </section>

    <?php include_once('templateParts/footer.php'); ?>
	<?php include_once('templateParts/scripts.php'); ?>
	
  </body>
</html>
