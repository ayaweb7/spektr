<?php 
// Соединяемся с базой данных
require_once 'blocks/date_base.php';
session_start();

// Выборка из таблицы 'pages' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM pages WHERE page='category'");
$myrow1 = mysqli_fetch_array($result1);

// Подключаем HEADER
include ("blocks/header.php");

/*
printf ("<div class='container'>	
		<div class='breadcrumb'>
			<span class='B_crumbBox'><span class='B_firstCrumb'><a class='B_homeCrumb' href='/' title='На Главную страницу'>Главная</a></span> >> <a class='B_crumb' href='/katalog.html' title='Каталог'>Каталог</a> >> <a class='B_crumb' href='/katalog/pilomaterialy.html' title='Пиломатериалы '>Пиломатериалы </a> >> <span class='B_lastCrumb'><span class='B_currentCrumb'>Доска </span></span></span>
        </div>
</div>");
*/


// Выборка в цикле всех существующих ссылок на страницы
//$result4 = mysqli_query($db, "SELECT * FROM pages WHERE page='catalog'"); // 
//$myrow4 = mysqli_fetch_array($result4);

printf ("<div id='catalog' class='container px-4 my-4'>
    <h1 class='pb-2 border-bottom text-center test-custom'>%s</h1>
	<nav style='--bs-breadcrumb-divider: &quot;>' aria-label='breadcrumb'>
					<ol class='breadcrumb'>
						<li class='breadcrumb-item'><a href='index.php'>Главная</a></li>
						<li class='breadcrumb-item'><a href='catalog.php'>Каталог</a></li>
						<li class='breadcrumb-item active'>%s</a></li>
					</ol>
				</nav>
	<div class='row g-4 py-3 row-cols-1 row-cols-lg-3'>", $category, $category);




// Выборка в цикле всех существующих категорий услуг и товаров
$result2 = mysqli_query($db, "SELECT * FROM goods WHERE category='$category' ORDER BY good");
$myrow2 = mysqli_fetch_array($result2);
$good='';

	do
	{
		if ($myrow2['good'] != $good)
		{
		$good = $myrow2['good'];
		printf ("<div class='feature col'>
					<h3 class='lead_p text-center'>%s</h3>
					<div>
						<a href='good.php?good=%s' title='%s'>
							<img src='img/objects/%s.jpg' class='d-block mx-lg-auto img-fluid' title='%s' width='264' height='191'>
						</a>
					</div>
<!--					<div class='mx-5 text-center fw-bolder color-dark'><p>%s</p></div>-->
				</div>", $myrow2['good'], $myrow2['good'], $myrow2['good'], $myrow2['photo'], $myrow2['good'], $myrow2['good']);

		}
	}
	
	while ($myrow2 = mysqli_fetch_array($result2));
	printf ("</div>");
// !***************** Закрытие объектов с результатами и подключение к базе данных *********************! //
// $result->close(); Товары внутри категорий - отсортированные по дате и лимитированные
$result2->close(); // Категории, отсортированные по алфавиту
//$result3->close(); // Товары внутри категорий - без сортировки и лимитов
$result1->close(); // Страницы - без сортировки и лимитов
$db->close(); // Закрываем базу данных

 
// Подключаем FOOTER
include ("blocks/footer.php");


/*
$result3 = mysqli_query($db, "SELECT * FROM goods WHERE category='$category' ORDER BY good"); // 
$myrow3 = mysqli_fetch_array($result3);

$good_cat='';
do
	{
		if ()
		{
			printf ("", $myrow3['good']);

// Окончание цикла групп
		
			$good_cat = $myrow3['good'];
		}
	
	}
	while ($myrow3 = mysqli_fetch_array($result3));
*/


?>