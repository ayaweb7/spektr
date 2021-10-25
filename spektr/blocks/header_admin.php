<?php
// Соединяемся с базой данных
require_once 'date_base.php';

// Определение надписи для титула страницы
$title = $myrow1['title'];
if (isset($_GET['gruppa'])) {$title = $_GET['gruppa'];}
if (isset($_POST['shop_search'])) {$title = $_POST['shop_search'][0];}
if (isset($_POST['name_search'])) {$title = $_POST['name_search'][0];}
if (isset($_POST['date_search'])) {$title = $_POST['date_search'];}
if (isset($_POST['month_search'])) {$title = $_POST['month_search'];}
if (isset($_POST['price_search'])) {$title = $_POST['price_search'];}
if (isset($_POST['name_update'])) {$title = $_POST['name_update'];}
if (isset($_POST['shop_update'])) {$title = $_POST['shop_update'];}
if (isset($_POST['id_update'])) {$title = 'id=' . $_POST['id_update'];}
if (isset($_GET['id'])) {$title = $_GET['id'];}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8" /> -->
		<title><?php echo $title ?></title>
		<link href="css/screen.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src='js/ajax.js'></script><!---->
		<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script><!---->
		<link rel="shortcut icon" type="image/ico" href="../images/favicon.ico" />
	</head>
	
<body id='realty'>

<div id='header'>


<ul id='nav' name='top'>
		<li>
<!-- Страницы
			<li class='first'>
				<a class='othersLink' href='index.php' title='На главную'><em>Страницы</em></a>
				<ul>
					<li><a class="realty1Link" href="settings_insert.php" title="Новая страница"><em>Новая </em>страница</a></li>
					<li><a class="realty1Link" href="settings_update.php" title="Изменение страницы"><em>Изменение </em>страницы</a></li>
				</ul>
			</li> -->
<!-- Магазины
			<li>
				<a class="othersLink" href="index.php" title="На главную"><em>Магазины</em></a>
				<ul>
					<li><a class="realty1Link" href="stores.php" title="Все магазины">Все <em>магазины</em></a></li>
					<li><a class="realty1Link" href="store.php" title="Информация о магазинах"><em>Информация </em>о магазинах</a></li>
					<li><a class="realty1Link" href="store_insert.php" title="Новый магазин"><em>Новый </em>магазин</a></li>
					<li><a class="realty1Link" href="store_update.php" title="Изменение магазина">Изменение <em>магазина</em></a></li>
				</ul>
			</li> -->
<!-- Товары -->
			<li>
				<a class="othersLink" href="tour_insert.php" title="Ввод нового тура"><em>Новый </em>тур</a>
				<ul>
					<li><a class="realty1Link" href="tour_insert.php" title="Ввод нового тура"><em>Новый </em>тур</a></li>
					<li><a class="realty1Link" href="tour_update.php" title="Удаление тура"><em>Удаление </em>тура</a></li>
				</ul>
			</li>
<!-- Категории -->
			<li>
                <a class="othersLink" href="index.php" title="На главную"><em>Страна</em></a>
				<ul>
<?php
/**/
// Выборка в цикле всех существующих групп
$result2 = mysqli_query($db, "SELECT * FROM tours ORDER BY country");
$myrow2 = mysqli_fetch_array($result2);
$country_header='';

	do
	{
		if ($myrow2['country'] != $country_header)
		{
			printf ("<li><a class='realty1Link' href='country.php?country=%s' title='%s'>%s</a></li>", $myrow2['country'], $myrow2['country'], $myrow2['country']);

// Окончание цикла групп
		
			$country_header = $myrow2['country'];
		}
	}
	while ($myrow2 = mysqli_fetch_array($result2));
	
//Закрытие объектов с результатами и подключение к базе данных
$result2->close(); // Категории, отсортированные по алфавиту
?>

				</ul>
			</li>
<!-- Поиск -->			
			<li>
				<a class="othersLink" href="index.php" title="На главную"><em>Поиск</em></a>
				<ul>
					<li><a class="realty1Link" href="poisk.php" title="Быстрый поиск товаров"><em>Быстрый</em> поиск</a></li>
					<li><a class="realty1Link" href="search.php" title="Комбинация параметров поиска"><em>Сложный поиск</em></a></li>
				</ul>
			</li>
		</li>
	</ul> <!-- nav -->

</div> <!-- header -->



<div id='container'> <!-- #container -->