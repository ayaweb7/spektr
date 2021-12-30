<?php
// Соединяемся с базой данных
require_once 'blocks/date_base.php';

// Выборка из таблицы 'pages' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM pages WHERE page='specif_form_update'");
$myrow1 = mysqli_fetch_array($result1);

// Подключаем HEADER
include ("blocks/header_adm.php");
//echo "good = " . $good ;
?>

<!-- Начало кода INDEX -->
<div id="info">
	<h1><?php echo $myrow1['h1'] ?></h1>
	<?php printf ("<h2>%s</h2>", $myrow1['h2']); ?>


<?php
if (isset($_GET['id'])) {$id=$_GET['id'];}

if (isset($_POST['id'])) {$id = $_POST['id'];}
if (isset($_POST['date'])) {$date = $_POST['date'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['depth'])) {$depth = $_POST['depth'];}
if (isset($_POST['width'])) {$width = $_POST['width'];}
if (isset($_POST['price'])) {$price = $_POST['price'];}
$id = (int) $id;


$result = mysqli_query($db, "SELECT * FROM specif WHERE id='$id'");
$myrow = mysqli_fetch_array($result);
?>

<h1 class="comment">
	Вы собираетесь внести изменения в товар:<br> <span><?php echo $myrow['name'] . ' - ' . $myrow['depth'] . ' * ' . $myrow['width'] ?></span>
</h1>
<form name='form' action='mysql_specif_update.php' method='post'>

<!-- NAME & GABARITE -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Габариты - толщина <em>*</em><br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<input type="text" name="depth" id="depth" size="20" value="<?php echo $myrow['depth'] ?>" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Габариты - ширина <em>*</em><br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<input type="text" name="width" id="width" size="20" value="<?php echo $myrow['width'] ?>" />
			</label>
		</div>
		
		<div class='blockInput'>||<br>||</div>
		
		<div class='blockInput'>
			<label>Цена <em>*</em><br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<input type="text" name="price" id="price" size="20" value="<?php echo $myrow['price'] ?>" />
			</label>
		</div>
	</div>

<!-- SUBMIT -->
	<div class='flexSmall'>
		<input class='inputSubmit' type="submit" name="submit" id="submit" value="Занести в базу" />
		<input class='inputReset' type="reset" name="set_filter" value="Сброс" />
	</div>

<!--HIDDEN-->
	<input type="hidden" name="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>"></input>
	<input name="id" type="hidden" value="<?php echo $myrow['id'] ?>"/>
	<input name="name" type="hidden" value="<?php echo $myrow['name'] ?>"/>
</form>

<!-- Подключаем FOOTER -->
		<?php include ("blocks/footer_adm.php"); ?>