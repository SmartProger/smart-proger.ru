<!DOCTYPE html>
<html>
<head>
	<script src="https://vk.com/js/api/openapi.js?169" type="text/javascript"></script>
	<title>Личный кабинет - НН Маркет</title>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '/head.html';?>

</head>
<body>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/navbar.html';?>
<div class="container">
	<div class="row text-center">
		<h3>Личный кабинет</h3>
	</div>
	<div class="row justify-content-start">
		<a href="" style="text-decoration: none; color: #4a76a8;" id="userVkHref">
			<img src="https://nn-market.ru/img/camera.png" id="userPhoto" style="border-radius: 50%; max-width: 80px">

			<span id="userName" style="font-size: 1.5em"></span>
		</a>
	</div>
</div>

	<script type="text/javascript">VK.init({apiId:51549554});</script>
	<script src="https://nn-market.ru/js.js"></script>
	<script src="https://use.fontawesome.com/5a093f1ea2.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script type="text/javascript">window.onload = getStatusLk();</script>
	
</body>
</html>