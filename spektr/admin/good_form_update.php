<?php
// Соединяемся с базой данных
require_once 'blocks/date_base.php';

// Выборка из таблицы 'pages' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM pages WHERE page='good_form_update'");
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
if (isset($_GET['good'])) {$good=$_GET['good'];}

if (isset($_POST['id'])) {$id = $_POST['id'];}
if (isset($_POST['date'])) {$date = $_POST['date'];}
if (isset($_POST['marker'])) {$marker = $_POST['marker'];}
if (isset($_POST['category'])) {$category = $_POST['category'];}
if (isset($_POST['good'])) {$good = $_POST['good'];}
if (isset($_POST['photo'])) {$photo = $_POST['photo'];}
if (isset($_POST['description'])) {$description = $_POST['description'];}
if (isset($_POST['keywords'])) {$keywords = $_POST['keywords'];}
if (isset($_POST['p1'])) {$p1 = $_POST['p1'];}
if (isset($_POST['p2'])) {$p2 = $_POST['p2'];}
if (isset($_POST['p3'])) {$p3 = $_POST['p3'];}
if (isset($_POST['width'])) {$width = $_POST['width'];}
if (isset($_POST['height'])) {$height = $_POST['height'];}
if (isset($_POST['lenght'])) {$lenght = $_POST['lenght'];}
if (isset($_POST['item'])) {$item = $_POST['item'];}
if (isset($_POST['price'])) {$price = $_POST['price'];}


$result = mysqli_query($db, "SELECT * FROM goods WHERE good='$good'");
$myrow = mysqli_fetch_array($result);
?>

<h1 class="comment">
	Вы собираетесь внести изменения в товар: <span><?php echo $myrow['good'] ?></span>
</h1>
<form name='form' action='mysql_good_update.php' method='post'>

<!-- DESCRIPTION -- KEYWORDS ---  -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Краткое описание страницы для поисковых систем - description<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<textarea name="description" id="description" cols="70" rows="5"><?php echo $myrow['description'] ?></textarea>
			</label>
		</div>

		<div class='blockInput'>
			<label>Ключевые слова для поиска - keywords<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<textarea name="keywords" id="keywords" cols="70" rows="5"><?php echo $myrow['keywords'] ?></textarea>
			</label>
		</div>
	</div>

<!-- P1 --- P2 -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>I - Первый абзац на странице - p1<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<textarea name="p1" id="p1" cols="70" rows="5"><?php echo $myrow['p1'] ?></textarea>
			</label>
		</div>

		<div class='blockInput'>
			<label>II - Второй абзац на странице - p2<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<textarea name="p2" id="p2" cols="70" rows="5"><?php echo $myrow['p2'] ?></textarea>
			</label>
		</div>
	</div>

<!-- MARKER --- P3 --- PHOTO -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Маркер категории страницы<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<label><input type="radio" name="marker" value="good" checked="checked">Товары</label><br>
				<label><input type="radio" name="marker" value="service">Услуги</label><br>
			</label>
		</div>
		<div class='blockInput'>
			<label>III - Третий абзац на странице - p3<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<textarea name="p3" id="p3" cols="80" rows="5"><?php echo $myrow['p3'] ?></textarea>
			</label>
		</div>
		<div class='blockInput'>
			<label>Имя файла с фотографией<br>(английскими буквами)<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<input type="text" name="photo" id="photo" size="30" value="<?php echo $myrow['photo'] ?>" />
			</label>
		</div>
	</div>

<!-- GABARITE -- ITEM -- QUANTITY -- PRICE -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Длина<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<input type="text" name="lenght" id="lenght" size="20" value="<?php echo $myrow['lenght'] ?>" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Ширина<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<input type="text" name="width" id="width" size="20" value="<?php echo $myrow['width'] ?>" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Толщина<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<input type="text" name="height" id="height" size="20" value="<?php echo $myrow['height'] ?>" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Единица измерения<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
				<select name='item' size='5'>
					<option selected>шт.</option>
					<option>кг.</option>
					<option>м.</option>
					<option>кв.м.</option>
					<option>куб.м.</option>
				</select>
			</label>
		</div>
		<div class='blockInput'>
			<label>Цена, руб.<br><span style="font-size: 1em; font-style: italic;">изменить на</span><br>
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
	<input name="good" type="hidden" value="<?php echo $myrow['good'] ?>"/>
</form>

<!-- Подключаем FOOTER -->
		<?php include ("blocks/footer_adm.php"); ?>