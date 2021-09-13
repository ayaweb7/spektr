<?php
// Соединяемся с базой данных
require_once 'blocks/date_base.php';

// Выборка из таблицы 'settings' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM settings WHERE page='mysql_store_insert'");
$myrow1 = mysqli_fetch_array($result1);

// Подключаем HEADER
include ("blocks/header_admin.php");

// Вычислитель
$date = $shop = $town = $street = $house = $phone = "";

if (isset($_POST['id_store'])) {$id_store = $_POST['id_store'];}
if (isset($_POST['date_store'])) {$date_store = $_POST['date_store'];}
if (isset($_POST['town'])) {$town = $_POST['town'];}
if (isset($_POST['street'])) {$street = $_POST['street'];}
if (isset($_POST['house'])) {$house = $_POST['house'];}
if (isset($_POST['shop'])) {$shop = $_POST['shop'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}

$id_store = (int) $id_store;

// Проверка на ошибки средствами PHP
$fail = validate_date($date_store);
$fail .= validate_town($town);
$fail .= validate_shop($shop);
$fail .= validate_street($street);
$fail .= validate_house($house);

// PHP-функции
function validate_date($field) {return ($field == "") ? "Не введена дата ввода информации.<br>" : "";}
function validate_town($field) {return ($field == "") ? "Не введено название города.<br>" : "";}
function validate_shop($field) {return ($field == "") ? "Не введено название магазина.<br>" : "";}
function validate_street($field) {return ($field == "") ? "Не введена улица.<br>" : "";}
function validate_house($field) {return ($field == "") ? "Не введен номер дома.<br>" : "";}

if ($fail == "")
{
echo "Проверка формы прошла успешно:<br>
Дата: $date_store;<br> Город: $town;<br> Магазин: $shop;<br> Улица: $street;<br> Дом: $house;<br> Телефон: $phone.<br><br>";
}

// Определение значения 'ID_LOCALITY'
// Выборка из таблицы 'store' соответствия 'town' & 'id_locality'
$result2 = mysqli_query($db, "SELECT * FROM store WHERE town='$town'");
$myrow2 = mysqli_fetch_array($result2);
$id_locality = $myrow2['id_locality'];

$query = "INSERT INTO store (id_store, shop, street, house, phone, town, id_locality, date_store)
VALUES ('$id_store', '$shop', '$street', '$house', '$phone','$town', '$id_locality', '$date_store')";

// Проверка на ошибки при вводе в базу
if ($result = mysqli_query($db, $query)) {
	echo "Удачный ввод";
} else {
      echo "НЕудачный ввод - Error: " . $query . "<br>" . mysqli_error($db);
}

// Сообщение о результате ввода в базу
if ($result == 'true') {
print <<<HERE
<h6  style='font: 2em bold Georgia, "Times New Roman", Times, serif; color: #19910f;' align="center">$myrow1[h1]</h6> <!---->
HERE;
}
else {
print <<<HERE
<h6  style='font: 3em bold Georgia, "Times New Roman", Times, serif; color: #e50000;' align="center">$myrow1[h2]</h6> <!---->
HERE;
}

// !***************** Закрытие объектов с результатами и подключение к базе данных *********************! //
$result1->close(); // Титулы, заголовки из таблицы 'settings'
$result2->close(); // Титулы, заголовки из таблицы 'settings'
$db->close(); // Закрываем базу данных

// Подключаем FOOTER_SEARCH
include ("blocks/footer_store.php");
?>