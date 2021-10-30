<?php
// Соединяемся с базой данных
require_once 'blocks/date_base.php';

// Выборка из таблицы 'pages' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM pages WHERE page='index'");
$myrow1 = mysqli_fetch_array($result1);

// Определение надписи для титула страницы
//$title = $myrow1['title'];
//if (isset($_GET['gruppa'])) {$title = $_GET['gruppa'];}
//if (isset($_POST['shop_search'])) {$title = $_POST['shop_search'][0];}
//if (isset($_POST['name_search'])) {$title = $_POST['name_search'][0];}
//if (isset($_POST['date_search'])) {$title = $_POST['date_search'];}
//if (isset($_POST['month_search'])) {$title = $_POST['month_search'];}
//if (isset($_POST['price_search'])) {$title = $_POST['price_search'];}
//if (isset($_POST['name_update'])) {$title = $_POST['name_update'];}
//if (isset($_POST['shop_update'])) {$title = $_POST['shop_update'];}
//if (isset($_POST['id_update'])) {$title = 'id=' . $_POST['id_update'];}
//if (isset($_GET['id'])) {$title = $_GET['id'];}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $myrow1['title'] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $myrow1['keywords'] ?>">	
	<meta name="description" content="<?php echo $myrow1['description'] ?>">
	<link href="css/screen.css" type="text/css" rel="stylesheet" />
	<script src="js/jquery-3.6.0.min.js"></script>
	<link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
	
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

<!-- Yandex.Metrika counter -->
<!-- /Yandex.Metrika counter -->

</head>

<body>

<!--  -->
<!-- header -->
<div id="header" class="container"><!---->
    <header class="flexBig" style='background-color: yellow;'><!--test-custom d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom-->
        <div class="flexTitle" style='background-color: green;'>
			<div class="flexMiddle logo" style='background-color: #ccc;'><!---->
				<a href='#about_us' title="О нас">
					<img src="img/logo.jpg" class="d-block mx-lg-auto img-fluid" alt="about_us" width="70" height="70" loading="lazy">
				</a>
			</div>

			<div class="flexMiddle menu" style='background-color: #eee;'><!---->
				<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
					<li><a href="#about_us" class="nav-link px-2 link-secondary">О нас</a></li>
					<li><a href="#objects" class="nav-link px-2 link-secondary">Объекты</a></li>
					<li><a href="#services" class="nav-link px-2 link-secondary">Наши услуги</a></li>
					<li><a href="#sale" class="nav-link px-2 link-secondary">Горячие предложения</a></li>
					<li><a href="#contact" class="nav-link px-2 link-secondary">Контакты</a></li>
					<li><a href="admin/index.php" style="color: white;">.</a></li>
				</ul>
			</div>

			<div class="flexMiddle contact" style='background-color: #bbb;'><!---->
				<div class="blockInput"><!---->
					<div class="ms-2 align-middle blockButton" style='background-color: #a1a1a1;'>
						<a class="" href="tel:+79115518191"><!--text-muted-->
							<img src="img/tel.png" class="" alt="Телефон" width="30" height="30"><!--d-block mx-lg-auto img-fluid-->
						</a>
					</div>
					<div class="ms-2 align-middle blockButton" style='background-color: #b1d3e5;'>
						<a class="" href="https://wa.me/79115518191" target="_blank"><!--text-muted  https://api.whatsapp.com/send/?phone=79115518191 -->
							<img src="img/ws.png" class="" alt="WhatsApp" width="30" height="30"><!--d-block mx-lg-auto img-fluid-->
						</a>
					</div>
				</div>
			</div>
			<div class="ms-2 flexMiddle tel" style='background-color: #c1c3a4;'><!-- align-middle-->
						<!--<a class="btn btn-primary" href="#modal">ТЕЛЕФОН</a>-->
				<p>+7 (911) 551-81-91</p>
						<!--<a href="tel:+78142332211">+7(814)-233-22-11</a>-->
						<!--<a href="tel:+7 (8142) 33 22 11">Позвоните нам</a>-->
			</div>
			

		</div> <!--flexSmall -->
    </header>
</div>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	<symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
    </symbol>
</svg>			
			<!--<div id='top'><a href='#header' title="Наверх страницы"><svg class="bi" width="3.5rem" height="3.5rem"><use xlink:href="#home"/></svg></a></div><!--#arrow-up-circle-fill-->
