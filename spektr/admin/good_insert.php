<form name='form' action='mysql_good_insert.php' method='post'>

<!-- GOOD & CATEGORY -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Маркер категории страницы - marker <em>*</em><br>
				<label><input type="radio" name="marker" value="good" checked="checked">Товары</label><br>
				<label><input type="radio" name="marker" value="service">Услуги</label><br>
			</label>
		</div>
		<div class='blockInput'>
			<label>Категория - category <em>*</em><br>
				<select name='category' size='3'>
					<option selected>Пиломатериалы</option>
					<option>Стройматериалы</option>
					<option>Услуги</option>
				</select>
			</label>
		</div>
		<div class='blockInput'>
			<label>Наименование товара или услуги - good <em>*</em><br>
				<input type="text" name="good" id="good" size="80" value="" />
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
				<select name='item' size='4'>
					<option selected>шт.</option>
					<option>кг.</option>
					<option>кв.м.</option>
					<option>куб.м.</option>
				</select>
			</label>
		</div>
		<div class='blockInput'>
			<label>Цена - price<br>
				<input type="text" name="price" id="price" size="20" value="" />
			</label>
		</div>
	</div>


<!-- DETAIL
	<div class='flexSmall'>
		<label>Подробные характеристики товара - detail <br>
			<input type="text" name="detail" id="detail" size="100" value="" />
		</label>
	</div>
 -->

<!-- PHOTO -->	
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Подробные характеристики товара - detail <br>
			<input type="text" name="detail" id="detail" size="100" value="" />
		</label>
		</div>
		<div class='blockInput'>
			<label>Имя файла с фотографией - photo_name <br>
				<input type="text" name="photo" id="photo" size="50" value="" />
			</label>
		</div>
	</div>

<!-- SUBMIT -->
	<div class='flexSmall'>
		<input class='inputSubmit' type="submit" name="submit" id="submit" value="Занести в базу" />
		<input class='inputReset' type="reset" name="set_filter" value="Сброс" />
	</div>

<!-- HIDDEN -->
	<input type="hidden" name="date" value="<?php echo (new DateTime())->format('Y-m-d'); ?>"></input>
</form>