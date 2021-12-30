<form name='form' action='mysql_specif_insert.php' method='post'>

<!-- NAME & GABARITE -->
	<div class='flexSmall'>
		<div class='blockInput'>Наименование товара *
			<select name='name' size='10'>
<?php
// Выборка в цикле всех существующих наименований товаров
$result = mysqli_query($db, "SELECT * FROM goods ORDER BY good");
$myrow = mysqli_fetch_array($result);
	$good='';
	do
	{
		if ($myrow['good'] != $good)
		{	
			printf  ("<option>%s</option>",$myrow['good']);
			$good = $myrow['good'];
		}
	}
	while ($myrow = mysqli_fetch_array($result));

// !***************** Закрытие объектов с результатами и подключение к базе данных *********************! //
$result->close(); // Товары, отсортированные по алфавиту
?>
			</select><br>
		</div>
		
		<div class='blockInput'>||<br>||</div>
		
		<div class='blockInput'>
			<label>Габариты - толщина <em>*</em><br>
				<input type="text" name="depth" id="depth" size="20" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Габариты - ширина <em>*</em><br>
				<input type="text" name="width" id="width" size="20" value="" />
			</label>
		</div>
		
		<div class='blockInput'>||<br>||</div>
		
		<div class='blockInput'>
			<label>Цена <em>*</em><br>
				<input type="text" name="price" id="price" size="20" value="" />
			</label>
		</div>
	</div><!--flexSmall-->


<!-- SUBMIT -->
	<div class='flexSmall'>
		<input class='inputSubmit' type="submit" name="submit" id="submit" value="Занести в базу" />
		<input class='inputReset' type="reset" name="set_filter" value="Сброс" />
	</div><!--flexSmall-->

<!-- HIDDEN -->
	<input type="hidden" name="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>"></input>
</form>