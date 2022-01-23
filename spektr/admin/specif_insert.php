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
		<div class='blockInput'>
		
			<div>Цифровые параметры - для товаров</div>
			
			<div>
				<label>Габариты - толщина <em>*</em><br>
					<input type="text" name="depth" id="depth" size="20" value="20" />
				</label>
			</div>
			<div>
				<label>Габариты - ширина <em>*</em><br>
					<input type="text" name="width" id="width" size="20" value="80" />
				</label>
			</div>
			
			<div>
				<label>Цена <em>*</em><br>
					<input type="text" name="price" id="price" size="20" value="1000" />
				</label>
			</div>
		</div>
		<div class='blockInput'>
		
			<div>Словесные характеристики - для услуг</div>
			
			<div>
				<label>Описание материала <em>*</em><br>
					<input type="text" name="material" id="material" size="70" value="Строганое бревно" />
				</label>
			</div>
			<div>
				<label>Перечень услуг <em>*</em><br>
					<input type="text" name="list" id="list" size="70" value="Материал + работа" />
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
		
	</div><!--flexSmall-->


<!-- SUBMIT -->
	<div class='flexSmall'>
		<input class='inputSubmit' type="submit" name="submit" id="submit" value="Занести в базу" />
		<input class='inputReset' type="reset" name="set_filter" value="Сброс" />
	</div><!--flexSmall-->

<!-- HIDDEN -->
	<input type="hidden" name="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>"></input>
</form>