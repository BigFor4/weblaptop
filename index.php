<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>NONAME</title>
		<link href="./img/logo.png" rel="icon">
		<link href="./img/logo.png" rel="apple-touch-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
		<link rel="stylesheet" href="./cssjs/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./cssjs/libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="./cssjs/css/main.css">
		<link href="assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
		<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
		<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link href="assets/css/style.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<style>
		.main-menu-header1{
			display: none;
		}
@media (max-width: 767px){
	header .top,header .main-menu-header2{display: none}
	.main-menu-header1{display: block;}
	.content-banner img{width:100%}#content .slider img{height:auto}#content .slider{margin-top:0px}
}
	</style>
	<body>
		<div id="wallpaper">
			<?php
			session_start();
			$controller = filter_input(INPUT_GET, "controller");
			if(empty($controller)) $controller = "index";
			$controller_name = $controller . "_controller";
			
			require_once ("./Controllers/{$controller_name}.php");
			$controllerObj = new $controller_name();
			$controllerObj->run();
			?>
		</div>
		<div>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
			<script src="assets/vendor/aos/aos.js"></script>
			<script src="assets/vendor/php-email-form/validate.js"></script>
			<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
			<script src="assets/vendor/purecounter/purecounter.js"></script>
			<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
			<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
			<div id="fb-root"></div>
			<script src="assets/js/main.js"></script>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		</div>
		
	</body>
</html>