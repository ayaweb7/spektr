﻿<?php
// Соединяемся с базой данных
require_once 'blocks/date_base.php';

// Выборка из таблицы 'settings' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM settings WHERE page='mysql_search'");
$myrow1 = mysqli_fetch_array($result1);

// Подключаем HEADER
include ("blocks/header_admin.php");
?>

<!-- TABLE inventory -->
<table id="inventory" width="99%" class="realty">
                  
	<colgroup> <!-- Задание ширины и стилей для колонок таблицы -->
		<col class="id" /> <!-- Задание ширины и стилей для одной из колонок таблицы -->
		<col class="date" />
		<col class="shop" />
		<col class="address" />
		<col class="characteristic" />
		<col class="item" />
		<col class="trade" />
		<col class="price" />
	</colgroup>
                  
	<tr class="alt"> <!-- Строка таблицы -->
		<th scope="col">ID</th> <!-- Заголовочная ячейка таблицы -->
		<th scope="col">Дата покупки</th>
		<th scope="col">Магазин</th>
		<th scope="col">Адрес</th>
		<th scope="col">Наименование товара</th>
		<th scope="col">Количество</th>
		<th scope="col">Цена, руб.</th>
		<th scope="col">Стоимость, руб.</th>
	</tr>

<?php
// Вычислитель
$date = $date_to = $gruppa = $shop = $name = $characteristic = $price = $price_to = "";

if (isset($_POST['date_operator'])) {$date_op = $_POST['date_operator'];}
if (isset($_POST['gruppa_operator'])) {$gruppa_op = $_POST['gruppa_operator'];}
if (isset($_POST['town_operator'])) {$town_op = $_POST['town_operator'];}
if (isset($_POST['shop_operator'])) {$shop_op = $_POST['shop_operator'];}
if (isset($_POST['name_operator'])) {$name_op = $_POST['name_operator'];}
if (isset($_POST['price_operator'])) {$price_op = $_POST['price_operator'];}

if ($town_op == '!=') {$town_eq = 'а: все КРОМЕ ';} else {$town_eq = ': ';}
if ($date_op == '!=') {$date_eq = ': все КРОМЕ ';} else {$date_eq = ' ';}
if ($gruppa_op == '!=') {$gruppa_eq = ': все КРОМЕ ';} else {$gruppa_eq = ' ';}
if ($shop_op == '!=') {$shop_eq = ': все КРОМЕ ';} else {$shop_eq = ' ';}
if ($name_op == '!=') {$name_eq = ': все КРОМЕ ';} else {$name_eq = ' ';}
if ($price_op == '!=') {$price_eq = 'НЕ РАВНО ';}
else if ($price_op == '>=') {$price_eq = ' БОЛЬШЕ ИЛИ РАВНО ';}
else if ($price_op == '<=') {$price_eq = ' МЕНЬШЕ ИЛИ РАВНО ';}
else {$price_eq = ' ';}

if (isset($_POST['id'])) {$id = $_POST['id'];}
if (isset($_POST['date'])) {$date = $_POST['date'];}
if (isset($_POST['date_to'])) {$date_to = $_POST['date_to'];}
if (isset($_POST['gruppa'])) {$gruppa = $_POST['gruppa'];}
if (isset($_POST['townSelected'])) {$town = $_POST['townSelected'];}
if (isset($_POST['shop'])) {$shop = $_POST['shop'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['characteristic'])) {$characteristic = $_POST['characteristic'];}
if (isset($_POST['price'])) {$price = $_POST['price'];}
if (isset($_POST['price_to'])) {$price_to = $_POST['price_to'];}
$id = (int) $id;


// Проверка на ошибки средствами PHP
$fail = validate_town($town);

// PHP-функции
function validate_town($field) {return ($field == '') ? 'Не введено название города!<br>' : '';}


// Текст в операторе SELECT при выборке:
// DATE
if (($date != '') AND ($date_to == '')) {
	$query_data = " AND date " . $date_op . " '$date'"; // AND `date` = '2021-03-19' AND date = '2021-03-19'
	$message_date = 'Дата' . $date_eq . '<em>' . $date . '</em>;<br>';
}
else if (($date != '') AND ($date_to != '')) {
	$query_data = " AND date " . $date_op . " '$date'" . " AND " . " '$date_to'"; // `date` BETWEEN '2020-11-01' AND '2021-03-31'
	$message_date = 'Даты в промежутке между <em>' . $date . '</em> и <em>' . $date_to . '</em>;<br>';
}
else {
	$query_data = '';
	$message_date = '';
}
// GRUPPA
if ($gruppa != '') {
	$query_gruppa = " AND gruppa " . $gruppa_op . " '$gruppa'";
	$message_gruppa = 'Категория' . $gruppa_eq . '<em>' . $gruppa . '</em>;<br>';
}
else {
	$query_gruppa = '';
	$message_gruppa = '';
}
// TOWN
if ($town != '') {
	$query_town = " AND store.town " . $town_op . " '$town'"; // AND `store`.`town` = 'Коряжма'
	$message_town = 'Город' . $town_eq . '<em>' . $town . '</em>;<br>';
}
else {
	$query_town = '';
	$message_town = '';
}
// SHOP
if ($shop != '') {
	$query_shop = " AND store.shop " . $shop_op . " '$shop'";
	$message_shop = 'Магазин' . $shop_eq . '<em>' . $shop . '</em>;<br>';
}
else {
	$query_shop = '';
	$message_shop = '';
}
// NAME
if ($name != '') {
	$query_name = " AND name " . $name_op . " '$name'";
	$message_name = 'Наименование' . $name_eq . '<em>' . $name . '</em>;<br>';
}
else {
	$query_name = '';
	$message_name = '';
}
// CHARACTERISTIC
if ($characteristic != '') {
	$query_characteristic = " AND characteristic LIKE '%" . $characteristic . "%' "; // AND `characteristic` LIKE '%резьба%'
	$message_characteristic = 'Характеристики содержат слова ' . $name_op . '<em>`' . $characteristic . '`</em>;<br>';
}
else {
	$query_characteristic = '';
	$message_characteristic = '';
}
// PRICE
if (($price != '') AND ($price_to == '')) {
	$query_price = " AND price " . $price_op . " '$price'";
	$message_price = 'Цена' . $price_eq . '<em>' . $price . '</em>;<br>';
}
else if (($price != '') AND ($price_to != '')) {
	$query_price = " AND price " . $price_op . " '$price'" . " AND " . " '$price_to'"; // AND `price` BETWEEN 10 AND 100
	$message_price = 'Цены в промежутке между <em>' . $price . '</em> и <em>' . $price_to . '</em>;<br>';
}
else {
	$query_price = '';
	$message_price = '';
}

//echo $query_data . '<br>';

$query = '';
$query .= $query_data;
$query .= $query_gruppa;
$query .= $query_town;
$query .= $query_shop;
$query .= $query_name;
$query .= $query_characteristic;
$query .= $query_price;

//echo $query . '<br>';

// Текст сообщения о выбранных условиях поиска:
$message = "<div id='title_search'><br>Выбраны товары, удовлетворяющие условиям:<br><span>";
$message .= $message_town;
$message .= $message_date;
$message .= $message_gruppa;
$message .= $message_shop;
$message .= $message_name;
$message .= $message_characteristic;
$message .= $message_price;
$message .= "</span></div>";
	
echo $message;

/*
if ($fail == '')
{
echo "<div id='divTop' class='flexTitle'>Выбраны товары, удовлетворяющие условиям:<br>
Дата: $date_op $date и $date_to;<br>Категория: $gruppa_op $gruppa;<br>  Город: $town_op $town;<br> Магазин: $shop_op $shop;<br>
Наименование: $name_op $name;<br> Характеристики: $characteristic;<br> Цена: $price_op $price и $price_to руб.<br></div>";
echo "$gruppa<br> $town<br> $shop";
}
else {echo $fail;}
*/

// Выборка в цикле всех существующих категорий
$result2 = mysqli_query($db, "SELECT gruppa FROM shops ORDER BY gruppa");
$myrow2 = mysqli_fetch_array($result2);
$gruppa_for='';
$sum_itog = 0;
$count_itog = 0;
	do
	{
		if ($myrow2['gruppa'] != $gruppa_for)
		{	
				
// Выборка ТОП-5 товаров в каждой из категорий, отсортированных по убыванию даты (показаны самые свежие) и по алфавиту наименований товаров
$result = mysqli_query($db, "SELECT * FROM shops LEFT JOIN store ON shops.shop = store.shop WHERE gruppa='$myrow2[gruppa]'" . $query . " ORDER BY name, characteristic, date DESC");
// SELECT * FROM shops
// SELECT * FROM shops LEFT JOIN store ON shops.shop = store.shop WHERE shops.date = '2021-03-19'
$myrow = mysqli_fetch_array($result);

// Проверка наличия товаров в категории для необходимости печати подзаголовка категории
		if (!isset($myrow['id'])) {'<script language="javascript">document.getElementsByClassName("sub").style.display="none";<script>';}
		else
		{
			printf ("<tr class='sub'><td colspan='8'>%s</td></tr>", $myrow2['gruppa']);

// Печать полосатых строк таблицы								
			$even=true;

// Начало цикла печати товаров в категории          
			do
			{
// Выборка параметров магазинов (город - town, адрес - adress, id_store) на основании предыдущей выборки - $myrow
$result5 = mysqli_query($db, "SELECT * FROM store WHERE shop='$myrow[shop]'");
$myrow5 = mysqli_fetch_array($result5);
				
				printf  ("<tr class='absent' style='background-color:".($even?'white':'#eaeaea')."'>
							<td class='id'><a href='form.php?id=%s'>%s</a></td>
							<td class='date'>%s</td>
							<td class='shop'>%s</td>
							<td class='address'>%s, %s, %s</td>
							<td class='characteristic'>%s %s</td>
							<td class='item'>%s %s</td>
							<td class='trade'>%s</td>
							<td class='price'>%s</td>
						</tr>  ",$myrow['id'], $myrow['id'], $myrow['date'], $myrow['shop'], $myrow5['town'], $myrow5['street'], $myrow5['house'],
								$myrow['name'], $myrow['characteristic'], $myrow['quantity'], $myrow['item'], $myrow['price'], $myrow['amount']); 
				
				$even=!$even;
			}

// Окончание цикла печати товаров в категории
		while ($myrow = mysqli_fetch_array($result));
		}

// Выборка всех товаров в категории для подсчета сумм
$result3 = mysqli_query($db, "SELECT * FROM shops LEFT JOIN store ON shops.shop = store.shop WHERE gruppa='$myrow2[gruppa]'" . $query);
$myrow3 = mysqli_fetch_array($result3);

// Начало цикла вычисления суммы в категории
		$sum = 0;
		$count = 0;
		do
		{
			$sum += $myrow3['amount'];
			$count += 1;
		}
// Окончание цикла вычисления суммы в категории
		while ($myrow3 = mysqli_fetch_array($result3));

// Печать итоговой суммы
		$sum_itog += $sum;
		if ($sum == 0) 	{"<script language='javascript'>document.getElementsByClassName('absent').style.display='none';<script>";}
		else
		{
			printf  ("<tr class='absent'><td colspan='7'></td><td class='itog'>%s руб.</td></tr>", $sum);
			$count_itog += $count;
		}
// Окончание цикла категорий
		$gruppa_for = $myrow2['gruppa'];
		}
	}
	while ($myrow2 = mysqli_fetch_array($result2));
	
// Заголовок таблицы
	printf  ("<caption name='tops' id='tops'> 
		<h1>%s<em>%s%s </em><br>Общая стоимость: <em>%s руб.</em>(<em>%s</em> наименований товаров!)</h1>
	</caption>
</table>", $mess_1, $search, $mess_2, $sum_itog, $count_itog); // inventory

// !***************** Закрытие объектов с результатами и подключение к базе данных *********************! //
$result->close(); // Товары внутри категорий - отсортированные по наименованию и характеристикам
$result1->close(); // Титулы, заголовки из таблицы 'settings'
$result2->close(); // Категории, отсортированные по алфавиту
$result3->close(); // Товары внутри категорий для вычисления итоговых сумм - без сортировки

// Проверка итоговой суммы на НОЛЬ
//if (isset($result5)) 	{"<script language='javascript'>document.getElementById('tops').innerHTML = 'If you can see this, JavaScript function worked';<script>";}
//else {
	$result5->close(); // Печать таблицы
//}
$db->close(); // Закрываем базу данных

// document.getElementById('inventory').innerHTML = 'If you can see this, JavaScript function worked';
// Подключаем FOOTER_SEARCH
include ("blocks/footer_search.php");

// SELECT * FROM `shops` WHERE `town` != 'Коряжма' AND `name` = 'Саморезы' AND `characteristic` LIKE '%редкая%'
// SELECT * FROM `shops` WHERE `town` != 'Коряжма' AND `shop` != 'Реал Маркет Коряжма' AND `name` != 'Саморезы' AND `characteristic` LIKE '%электр%' AND `price` BETWEEN 10 AND 1000
// SELECT * FROM `shops` WHERE `date` BETWEEN '2020-11-01' AND '2021-03-31' AND `price` BETWEEN 10 AND 100
//  AND `characteristic` LIKE '%резьба%' AND `price` >= 10
// SELECT * FROM `shops` WHERE `date` = '2020-12-30' AND `town` != 'Котлас' AND `shop` != 'Реал Маркет Коряжма'
// SELECT * FROM `shops` WHERE `id` >= 574 AND `date` = '2021-03-19' AND town='Котлас' AND date BETWEEN '2021-03-01' AND '2021-03-30'
// SELECT * FROM `shops` WHERE `town` = 'Коряжма' AND `date` = '2021-03-19'
// SELECT * FROM `shops` LEFT JOIN `store` ON `shops`.`shop` = `store`.`shop` WHERE `shops`.`date` = '2021-03-19'
// SELECT * FROM `shops` LEFT JOIN `store` ON `shops`.`shop` = `store`.`shop` WHERE `date` = '2021-03-19' AND `store`.`town` = 'Коряжма'
?>
