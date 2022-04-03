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
if (isset($_POST['material'])) {$material = $_POST['material'];}
if (isset($_POST['list'])) {$list = $_POST['list'];}
if (isset($_POST['item'])) {$item = $_POST['item'];}
$id = (int) $id;


$result = mysqli_query($db, "SELECT * FROM specif WHERE id='$id'");
$myrow = mysqli_fetch_array($result);
?>

<h1 class="comment">
	Вы собираетесь внести изменения в товар:<br> <span><?php echo $myrow['name'] . ' - ' . $myrow['depth'] . ' * ' . $myrow['width'] . ' - ' . $myrow['material'] ?></span>
</h1>
<form name='form' action='mysql_specif_update.php' method='post'>

<!-- NAME & GABARITE -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<div>
				<label>Габариты - толщина <em>*</em><br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
					<input type="text" name="depth" id="depth" size="20" value="<?php echo $myrow['depth'] ?>" />
				</label>
			</div>
			<div>
				<label>Габариты - ширина <em>*</em><br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
					<input type="text" name="width" id="width" size="20" value="<?php echo $myrow['width'] ?>" />
				</label>
			</div>
			
			<div>
				<label>Цена <em>*</em><br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
					<input type="text" name="price" id="price" size="20" value="<?php echo $myrow['price'] ?>" />
				</label>
			</div>
		</div>
		
		<div class='blockInput'>
		
			<div>Словесные характеристики - для услуг</div>
			
			<div>
				<label>Описание материала <em>*</em><br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
					<input type="text" name="material" id="material" size="70" value="<?php echo $myrow['material'] ?>" />
				</label>
			</div>
			<div>
				<label>Перечень услуг <em>*</em><br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
					<textarea name="list" id="list" cols="70" rows="4"><?php echo $myrow['list'] ?></textarea>
				</label>
			</div>
			<div>
				<label>Единица измерения<br>
					<select name='item' size='5'>
						<option>шт.</option>
						<option>кг.</option>
						<option>пог.м.</option>
						<option>кв.м.</option>
						<option selected>куб.м.</option>
					</select>
				</label>
			</div>
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