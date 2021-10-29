<form name='form' action='mysql_good_insert.php' method='post'>

<!-- GOOD & CATEGORY -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Наименование товара или услуги - good <em>*</em><br>
				<input type="text" name="good" id="good" size="80" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Категория - category <em>*</em><br>
				<input type="text" name="category" id="category" size="50" value="" />
			</label>
		</div>
	</div>

<!-- GABARITE -- ITEM -- QUANTITY -- PRICE -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Ширина, мм. - width<br>
				<input type="text" name="width" id="width" size="20" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Толщина, мм. - height<br>
				<input type="text" name="height" id="height" size="20" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Длина, м. - lenght<br>
				<input type="text" name="lenght" id="lenght" size="20" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Единица измерения - item<br>
				<input type="text" name="item" id="item" size="20" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Цена - price<br>
				<input type="text" name="price" id="price" size="20" value="" />
			</label>
		</div>
	</div>


<!-- DETAIL -->
	<div class='flexSmall'>
		<label>Подробные характеристики товара - detail <br>
			<input type="text" name="detail" id="detail" size="100" value="" />
		</label>
	</div>


<!-- PHOTO			
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Подпись под фотографией - photo_alt <br>
				<input type="text" name="photo_alt" id="photo_alt" size="50" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Имя файла с фотографией - photo_name <br>
				<input type="text" name="photo_name" id="photo_name" size="50" value="" />
			</label>
		</div>
	</div>
 -->
<!-- SUBMIT -->
	<div class='flexSmall'>
		<input class='inputSubmit' type="submit" name="submit" id="submit" value="Занести в базу" />
		<input class='inputReset' type="reset" name="set_filter" value="Сброс" />
	</div>

<!-- HIDDEN -->
	<input type="hidden" name="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>"></input>
</form>