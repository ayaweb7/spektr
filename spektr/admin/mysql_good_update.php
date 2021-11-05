<?php
// Соединяемся с базой данных
require_once 'blocks/date_base.php';

// Выборка из таблицы 'pages' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM pages WHERE page='mysql_page_update'");
$myrow1 = mysqli_fetch_array($result1);

// Подключаем HEADER
include ("blocks/header_adm.php");
?>

<!-- Начало кода INDEX -->
<div id="info">
	<h1><?php echo $myrow1['h1'] ?></h1>
	<?php printf ("<h2>%s</h2>", $myrow1['h2']); ?>


<?php
if (isset($_POST['id'])) {$id = $_POST['id'];}
if (isset($_POST['date'])) {$date = $_POST['date'];}
if (isset($_POST['marker'])) {$marker = $_POST['marker'];}
if (isset($_POST['category'])) {$category = $_POST['category'];}
if (isset($_POST['good'])) {$good = $_POST['good'];}
if (isset($_POST['width'])) {$width = $_POST['width'];}
if (isset($_POST['height'])) {$height = $_POST['height'];}
if (isset($_POST['lenght'])) {$lenght = $_POST['lenght'];}
if (isset($_POST['detail'])) {$detail = $_POST['detail'];}
if (isset($_POST['item'])) {$item = $_POST['item'];}
if (isset($_POST['price'])) {$price = $_POST['price'];}
if (isset($_POST['photo'])) {$photo = $_POST['photo'];}
//$id = (int) $id;
	
	$query = "UPDATE goods SET date='$date', marker='$marker', width='$width', height='$height', lenght='$lenght', detail='$detail', item='$item',
	price='$price', photo='$photo' WHERE id='$id'";
	
	// Проверка на ошибки при вводе в базу
	if ($result = mysqli_query($db, $query)) {
		echo "<p>Характеристики товара (услуги) <em>$good</em> успешно изменены</p>";
	} else {
		  echo "<p>У нас проблемы ! ! ! --- НЕудачный ввод - <em>Error: " . $query . "<br>" . mysqli_error($db) . "</em></p>";
	}

// !***************** Закрытие объектов с результатами и подключение к базе данных *********************! //
$db->close(); // Закрываем базу данных


// Конец кода INDEX
printf ("</div>");

// Подключаем FOOTER
include ("blocks/footer_adm.php");
?>
