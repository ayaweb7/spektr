<?php
// Соединяемся с базой данных
require_once 'blocks/date_base.php';
session_start();

// Выборка из таблицы 'pages' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM pages WHERE page='good'");
$myrow1 = mysqli_fetch_array($result1);

// Подключаем HEADER
include ("blocks/header.php");

// Выборка из таблицы 'goods' всех характеристик товара '$good'
$result2 = mysqli_query($db, "SELECT * FROM goods WHERE good='$good'");
$myrow2 = mysqli_fetch_array($result2);
$_SESSION['keywords'] = $myrow2['keywords'];
$_SESSION['description'] = $myrow2['description'];
?>



<div class="container">
	<div class="flex-nowrap justify-content-between align-items-center"><!--row flex-nowrap justify-content-between align-items-center-->
		<div class="text-center container px-4 my-4"><!---->
			<h1 class="blog-header-logo pb-2 border-bottom text-center test-custom col-md-12" href="#"><?php echo $good; ?></h1>
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class='breadcrumb-item'><a href='index.php'>Главная</a></li>
					<li class="breadcrumb-item"><a href="catalog.php">Каталог</a></li>
					<li class="breadcrumb-item"><a href="<?php echo 'category.php?category=' . $myrow2['category']; ?>"><?php echo $myrow2['category'] ?></a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $myrow2['good'] ?></li>
				</ol>
			</nav>
		</div><!--container-->

<!--goods-->
		<div class="row g-5">
			<div class="col-md-8">
				<div class="col-md-6 col-sm-6 leftimg">
					<img src="<?php echo 'img/objects/' . $myrow2['photo'] . '.jpg'; ?>" alt='<?php echo $myrow2['good']; ?>' width='264' height='191'>
				</div><!--col-md-6-->
				<p>
					<p><?php echo $myrow2['p1']; ?></p>
					<p><?php echo $myrow2['p2']; ?></p>
					<p><?php echo $myrow2['p3']; ?></p>
					<p><strong>Профиль (высота (толщина) / ширина):<br> </strong><?php echo $myrow2['height']; ?> / <?php echo $myrow2['width']; ?> мм.</p>
					<p><strong>Длина: </strong><?php echo $myrow2['lenght']; ?> м.</p>
					<p><strong>Цена: </strong><?php echo $myrow2['price']; ?> руб.</p>
					<p><?php echo $myrow2['good']; ?> продаётся оптом и в розницу по доступным ценам в нашем магазине.<br> Сделать заказ прямо на нашем сайте можно нажав на кнопку <a href="#">"Сделать заказ".</a><br> Вы также можете оформить заказ и доставку по телефону, нажав на кнопку <a href="#">"Позвонить"</a> или <a href="#">"Заказать звонок"</a>.</p>
				</p>
			</div><!--grid-->
		
<!--accordion-->
			<div class="col-md-4"><!--col-md-3 room-left wow fadeIn animated" data-wow-delay=".5s"-->
				<div class="position-sticky" style="top: 2rem;">
					<div class="accordion" id="accordionExample">

<!-- Пиломатериалы -->
						<div class='accordion-item'>
							<h2 class='accordion-header' id='headingOne'>
								<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
									Пиломатериалы
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class='accordion-body'>
									<ul>
<?php
// Выборка в цикле всех существующих категорий услуг и товаров
$result4 = mysqli_query($db, "SELECT * FROM goods WHERE category='Пиломатериалы' ORDER BY good");
$myrow4 = mysqli_fetch_array($result4);
$good_header='';

			do
			{
				if ($myrow4['good'] != $good_header)
				{
				$good_header = $myrow4['good'];
				printf ("<li class='active'><a href='good.php?good=%s' title='%s' >%s</a></li>", $myrow4['good'], $myrow4['good'], $myrow4['good']);
											

				}
			}
			while ($myrow4 = mysqli_fetch_array($result4));
?>										
									</ul>
								</div>
							</div>
						</div>

<!-- Стройматериалы -->
						<div class='accordion-item'>
							<h2 class='accordion-header' id='headingTwo'>
								<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo' aria-expanded='true' aria-controls='collapseOne'>
									Стройматериалы
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class='accordion-body'>
									<ul>
<?php
// Выборка в цикле всех существующих категорий услуг и товаров
$result4 = mysqli_query($db, "SELECT * FROM goods WHERE category='Стройматериалы' ORDER BY good");
$myrow4 = mysqli_fetch_array($result4);
$good_header='';

			do
			{
				if ($myrow4['good'] != $good_header)
				{
				$good_header = $myrow4['good'];
				printf ("<li class='active'><a href='good.php?good=%s' title='%s' >%s</a></li>", $myrow4['good'], $myrow4['good'], $myrow4['good']);
											

				}
			}
			while ($myrow4 = mysqli_fetch_array($result4));
?>										
									</ul>
								</div>
							</div>
						</div>

<!-- Элементы лестниц -->
						<div class='accordion-item'>
							<h2 class='accordion-header' id='headingThree'>
								<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree' aria-expanded='true' aria-controls='collapseThree'>
									Элементы лестниц
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class='accordion-body'>
									<ul>
<?php
// Выборка в цикле всех существующих категорий услуг и товаров
$result4 = mysqli_query($db, "SELECT * FROM goods WHERE category='Элементы лестниц' ORDER BY good");
$myrow4 = mysqli_fetch_array($result4);
$good_header='';

			do
			{
				if ($myrow4['good'] != $good_header)
				{
				$good_header = $myrow4['good'];
				printf ("<li class='active'><a href='good.php?good=%s' title='%s' >%s</a></li>", $myrow4['good'], $myrow4['good'], $myrow4['good']);
											

				}
			}
			while ($myrow4 = mysqli_fetch_array($result4));
?>										
									</ul>
								</div>
							</div>
						</div>

<!-- УСЛУГИ -->
						<div class='accordion-item'>
							<h2 class='accordion-header' id='headingFour'>
								<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseFour' aria-expanded='true' aria-controls='collapseOne'>
									УСЛУГИ
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class='accordion-body'>
									<ul>
<?php
// Выборка в цикле всех существующих категорий услуг и товаров
$result4 = mysqli_query($db, "SELECT * FROM goods WHERE category='Услуги' ORDER BY good");
$myrow4 = mysqli_fetch_array($result4);
$good_header='';

			do
			{
				if ($myrow4['good'] != $good_header)
				{
				$good_header = $myrow4['good'];
				printf ("<li class='active'><a href='good.php?good=%s' title='%s' >%s</a></li>", $myrow4['good'], $myrow4['good'], $myrow4['good']);
											

				}
			}
			while ($myrow4 = mysqli_fetch_array($result4));
?>										
									</ul>
								</div>
							</div>
						</div>

					</div><!--accordion-->
				</div><!--position-sticky-->
			</div><!--col-md-4-->
<!---->
		</div><!--row-->
	</div><!--flex-nowrap-->
</div><!--container-->

<?php


// !***************** Закрытие объектов с результатами и подключение к базе данных *********************! //
// $result->close(); Товары внутри категорий - отсортированные по дате и лимитированные
//$result2->close(); // все характеристики товара '$good' - без сортировки и лимитов
//$result3->close(); // Категории, отсортированные по алфавиту для аккордеона
$result4->close(); // Товары внутри категории, отсортированные по алфавиту для аккордеона
$result1->close(); // Страницы - без сортировки и лимитов
$db->close(); // Закрываем базу данных

// Подключаем FOOTER
include ("blocks/footer.php");



?>