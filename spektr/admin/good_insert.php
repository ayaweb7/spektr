<form name='form' action='mysql_good_insert.php' method='post'>

<!-- GOOD & CATEGORY -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Маркер категории страницы <em>*</em><br>
				<label><input type="radio" name="marker" value="good" checked="checked">Товары</label><br>
				<label><input type="radio" name="marker" value="service">Услуги</label><br>
			</label>
		</div>
		<div class='blockInput'>
			<label>Категория товаров или услуг <em>*</em><br>
				<select name='category' size='4'>
					<option selected>Пиломатериалы</option>
					<option>Стройматериалы</option>
					<option>Услуги</option>
					<option>Элементы лестниц</option>
				</select>
			</label>
		</div>
		<div class='blockInput'>
			<label>Наименование товара или услуги <em>*</em><br>
				<input type="text" name="good" id="good" size="80" value="" />
			</label>
		</div>
		
	</div>

<!-- GABARITE -- ITEM -- QUANTITY -- PRICE -->
	<div class='flexSmall'>
		<div class='blockInput'>
			<label>Длина<br>
				<input type="text" name="lenght" id="lenght" size="20" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Ширина<br>
				<input type="text" name="width" id="width" size="20" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Толщина<br>
				<input type="text" name="height" id="height" size="20" value="" />
			</label>
		</div>
		<div class='blockInput'>
			<label>Единица измерения<br>
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
			<label>Цена, руб.<br>
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
			<label>Подробные характеристики товара<br>
			<input type="text" name="detail" id="detail" size="100" value="поясняющий комментарий (если необходимо)" />
		</label>
		</div>
		<div class='blockInput'>
			<label>Имя файла с фотографией (английскими буквами)<br>
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