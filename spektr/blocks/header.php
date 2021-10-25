﻿<?php
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
<!-- Магазины -->
			<li class='first'>
				<a class="othersLink" href="index.php" title="На главную"><em>Магазины</em></a>
				<ul>
					<li><a class="realty1Link" href="stores.php" title="Все магазины">Все <em>магазины</em></a></li>
					<li><a class="realty1Link" href="store.php" title="Информация о магазинах"><em>Информация </em>о магазинах</a></li>
				</ul>
			</li>
<!-- Категории -->
			<li>
                <a class="othersLink" href="index.php" title="На главную"><em>Категории</em></a>
				<ul>
<?php
/**/
// Выборка в цикле всех существующих групп
$result2 = mysqli_query($db, "SELECT * FROM shops ORDER BY gruppa");
$myrow2 = mysqli_fetch_array($result2);
$gruppa_header='';

	do
	{
		if ($myrow2['gruppa'] != $gruppa_header)
		{
			printf ("<li><a class='realty1Link' href='category.php?gruppa=%s' title='%s'>%s</a></li>", $myrow2['gruppa'], $myrow2['gruppa'], $myrow2['gruppa']);

// Окончание цикла групп
		
			$gruppa_header = $myrow2['gruppa'];
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
<!-- Фотографии -->
			<li>
				<a class='othersLink' href="gallery.php" title="Галерея фотографий"><em>Галерея</em></a>
			</li>
		</li>
	</ul> <!-- nav -->

<div id='head_galery'>
<?php
/**/


for ($i = 1 ; $i <= 4 ; ++$i)
{
	$k = mt_rand(111, 271);

// Выборка фотографий
$result6 = mysqli_query($db, "SELECT * FROM photos WHERE number=$k");
$myrow6 = mysqli_fetch_array($result6);
	
printf ("<div id='head_%s'>
			<a href='../images/house_origin/house_%s.jpg' target='_blank'><img src='../images/house_header/house_%s.jpg' title='%s: %s(%s)'></a>
		</div>", $i, $k, $k, $myrow6['date_photo'], $myrow6['notes'], $k);
}
// style='background-image: url(../images/house/house_%s.jpeg);'
//
?>

    </div>          	 
</div> <!-- header -->



<div id='container'> <!-- #container -->