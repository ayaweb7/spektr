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

//список месяцев с названиями для замены
$_monthsList = array(
"1"=>"январь","2"=>"февраль","3"=>"март",
"4"=>"апрель","5"=>"май", "6"=>"июнь",
"7"=>"июль","8"=>"август","9"=>"сентябрь",
"10"=>"октябрь","11"=>"ноябрь","12"=>"декабрь");

//текущий месяц
$month = $_monthsList[date("n")];
$current_year = date('Y');
 
//echo $month;
//выведет, например, для 7 месяца "Июль"
?>



<div class="container">
	<div class="flex-nowrap justify-content-between align-items-center"><!--row flex-nowrap justify-content-between align-items-center-->
		<div class="text-center container px-4 my-4"><!---->
			
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class='breadcrumb-item'><a href='index.php'>Главная</a></li>
					<!--<li class="breadcrumb-item"><a href="catalog.php">Каталог</a></li>-->
					<li class="breadcrumb-item"><a href="<?php echo 'category.php?category=' . $myrow2['category']; ?>"><?php echo $myrow2['category'] ?></a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo $myrow2['good'] ?></li>
				</ol>
			</nav>
			<h1 class="blog-header-logo pb-2 border-bottom text-center test-custom col-md-12" href="#"><?php echo $good; ?></h1>
		</div><!--container-->

<!--goods-->
		<div class="row g-5">
			<div class="col-md-8">
				<div class="col-md-6 col-sm-6 leftimg">
					<a href="<?php echo 'img/origin/' . $myrow2['photo'] . '.jpg'; ?>" title='Оригинал фото' target='_blank'>
						<img class='d-block mx-lg-auto img-fluid img-thumbnail' src="<?php echo 'img/objects/' . $myrow2['photo'] . '.jpg'; ?>" alt='<?php echo $myrow2['good']; ?>' width='264' height='191'>
					</a>
				</div><!--col-md-6-->
				<p>
					<p><strong><?php echo $myrow2['title_g1'] ?></strong> <?php echo $myrow2['g1']; ?></p>
					<p><strong><?php echo $myrow2['title_g2'] ?></strong> <?php echo $myrow2['g2']; ?></p>
					<p><strong><?php echo $myrow2['title_g3'] ?></strong> <?php echo $myrow2['g3']; ?></p>
					<p class="color-price pb-3"><strong><?php echo $myrow2['title_price'] ?></strong> <?php echo $myrow2['price'] . " " . $myrow2['item']; ?></p>
					<p><?php echo $myrow2['good']; ?> продаётся оптом и в розницу в магазине "Спектр" по адресу:<br><strong class="fst-italic"> Архангельская область, г.Коряжма, ул.Советская, д.17 (цокольный этаж со стороны ул.Архангельской).</strong></p>
					<p><?php echo $myrow2['p1']; ?></p>
					<p><?php echo $myrow2['p2']; ?></p>
					<p><?php echo $myrow2['p3']; ?></p>
					<p>Сделать заказ прямо на нашем сайте можно нажав на кнопку <a href="#modal">"Сделать заявку"</a><br> Вы также можете оформить заказ и доставку по телефону: <a class="" href="tel:+79210752656" > +7 (921) 075-26-56</a>, нажав на кнопку <a class="" href="tel:+79210752656" >"Позвонить"</a> или <a href="#modal">"Заказать звонок"</a>.</p>

				</p>

<?php
// Выборка всех существующих спецификаций в каждом из товаров, отсортированных по толщине и ширине
$result3 = mysqli_query($db, "SELECT * FROM specif WHERE name='$myrow2[good]' ORDER BY depth, width");
$myrow3 = mysqli_fetch_array($result3);

// Проверка наличия спецификаций у товара для необходимости печати таблицы
		if (!isset($myrow3['id'])) {'<script language="javascript">document.getElementsByClassName("absent").style.display="none";<script>';}                     
		else
		{
printf ("<div class='col-md-9 ms-sm-auto col-lg-12 px-md-4 absent'>
		<h2 class='pb-2 border-bottom'>Актуальные цены на %s %s</h2>
		<div class='table-responsive'>
			<table class='table table-striped table-sm text-center'>", $month, $current_year);

// Начало проверки условий для вывода информации разных товаров - БРУС
			if ($myrow3['name'] == 'Брус') {

					printf ("<thead>
					<tr class='fw-bold'>
						<td style='border: 0;' colspan='2'>%s</td>
						<td style='border: 0;'>%s</td>
						<td style='border: 0;' colspan='2'>Стоимость</td>
					</tr>
					<tr>
						<th scope='col'>%s</th>
						<th scope='col'>%s</th>
						<th scope='col'>%s м.</th>
						<th scope='col'>%s</th>
						<th scope='col'>%s</th>
					</tr>
				</thead>
				<tbody>", $myrow2['name_title'], $myrow2['size_title'], $myrow2['depth'], $myrow2['width'], $myrow2['size_1'], $myrow2['price_title_1'], $myrow2['price_title_2']);
// Начало цикла печати спецификаций товара       
				do
				{
				$cut = $myrow3['depth'] * $myrow3['width'];
				$count = round(1000000/($cut * $myrow2['size_1']),1);
				$price_count = round($myrow3['price']/$count);
					printf  ("<tr>
								<td>%s</td>
								<td>%s</td>
								<td>%s шт.</td>
								<td>%s руб.</td>
								<td>%s руб.</td>
							</tr>
						</tbody>", $myrow3['depth'], $myrow3['width'], $count, $price_count, $myrow3['price']); 
					
				}

// Окончание цикла печати товаров в категории
		while ($myrow3 = mysqli_fetch_array($result3));

printf  ("</table>
		</div><!--table-responsive-->
	</div>");


// Окончание проверки условий для вывода информации разных товаров - максимальное количество информации - ДОСКА СТРОГАНАЯ		
			} else {
					
					printf ("<thead>
					<tr class='fw-bold'>
						<td style='border: 0;' colspan='2'>%s</td>
						<td style='border: 0;' colspan='3'>%s</td>
						<td style='border: 0;' colspan='2'>Стоимость</td>
					</tr>
					<tr>
						<th scope='col'>%s</th>
						<th scope='col'>%s</th>
						<th scope='col'>%s м.</th>
						<th scope='col'>%s м.</th>
						<th scope='col'>%s м.</th>
						<th scope='col'>%s</th>
						<th scope='col'>%s</th>
					</tr>
				</thead>
				<tbody>", $myrow2['name_title'], $myrow2['size_title'], $myrow2['depth'], $myrow2['width'], $myrow2['size_1'], $myrow2['size_2'], $myrow2['size_3'], $myrow2['price_title_1'], $myrow2['price_title_2']);
// Начало цикла печати спецификаций товара       
				do
				{
				$cut = $myrow3['depth'] * $myrow3['width'];
				$count_43 = round(1000000/($cut * $myrow2['size_1']));
				$count_52 = round(1000000/($cut * $myrow2['size_2']));
				$count_61 = round(1000000/($cut * $myrow2['size_3']));
				$price_count = round(1000000/$cut) * $myrow3['price'];
					printf  ("<tr>
								<td>%s</td>
								<td>%s</td>
								<td>%s шт.</td>
								<td>%s шт.</td>
								<td>%s шт.</td>
								<td>%s руб.</td>
								<td>%s руб.</td>
							</tr>
						</tbody>", $myrow3['depth'], $myrow3['width'], $count_43, $count_52, $count_61, $myrow3['price'], $price_count); 
					
				}

// Окончание цикла печати товаров в категории
		while ($myrow3 = mysqli_fetch_array($result3));

printf  ("</table>
		</div><!--table-responsive-->
	</div>");
			}
// Окончание проверок, связанных с выводом таблиц
		}
	
?>				
				<p>
				</p>
<?php
// Подключаем кнопки обратной связи
include ("blocks/order_call_921.php");
?>			
			</div><!--col-md-8-->

<?php
// Подключаем accordion
include ("blocks/accordion.php");
?>			
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
$result2->close(); // Товары
$result3->close(); // Спецификации
$db->close(); // Закрываем базу данных

// Подключаем FOOTER
include ("blocks/footer.php");



?>