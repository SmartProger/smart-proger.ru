<?php
        include $_SERVER['DOCUMENT_ROOT'] . '/baze_connection.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/head.html';
        include $_SERVER['DOCUMENT_ROOT'] . '/navbar.html';
        include $_SERVER['DOCUMENT_ROOT'] . '/java.html';

$main_catalog_query = mysqli_query ($connection, " SELECT * FROM `market-catalog`");
while ($row = mysqli_fetch_assoc ($main_catalog_query))
{
  //echo 'Привет, я '.$row['photo_src'];
break;

};
    ?>
<!DOCTYPE html>
<html>
<head>

	<title>НН Маркет</title>
</head>
<body style="background-color: #fcfcfc">
<br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

  </ol>
  <div class="carousel-inner" style="background-color: c2c2c2">

    <div class="carousel-item active text-center">
      <a href="/catalog/sale"><img class="rounded" style="height: 220px" src="/sale.jpg"></a>
    </div>
    <div class="carousel-item text-center">
      <a href="/catalog/new"><img class="rounded" style="height: 220px" src="/carousel/new.jpg"></a>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"  style="background-color: black"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"  style="background-color: black"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>

<div class="container">
<div class="row">
<div class="col-6 col-md-4 col-lg-3 col-xl-2" style="margin-bottom: 15px">
  <div class="card">
    <a href="/catalog"><img src="carousel/1.jpg" class="card-img-top"></a>
    <div class="container">
      <p style="margin-bottom: 0px">375 ₽ <span style="font-size: 0.8rem"><del style="color: grey">450 ₽</del></span></p>
    </div>
  </div>
</div>

<div class="col-6 col-md-4 col-lg-3 col-xl-2" style="margin-bottom: 15px">
  <div class="card">
    <a href="/catalog"><img src="carousel/2.jpg" class="card-img-top"></a>
    <div class="container">
      <p style="margin-bottom: 0px">620 ₽ <span style="font-size: 0.8rem"><del style="color: grey">740 ₽</del></span></p>
    </div>
  </div>
</div>

<div class="col-6 col-md-4 col-lg-3 col-xl-2" style="margin-bottom: 15px">
  <div class="card">
    <a href="/catalog"><img src="carousel/3.jpg" class="card-img-top"></a>
    <div class="container">
      <p style="margin-bottom: 0px">470 ₽ <span style="font-size: 0.8rem"><del style="color: grey">590 ₽</del></span></p>
    </div>
  </div>
</div>
</div>
</div>
<br>
<div class="footer text-center">
 nn-market.ru 2022 C
</div>
</body>
</html>