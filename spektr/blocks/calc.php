
	<div id='initial' class=''>
		<h2>Онлайн калькулятор деревянного сруба</h2>
		<form name='form' action='calc_frame.php' method='post'>
	
<!-- BUILDING & MATERIALS & METHODS -->
		<div class='flexSmall'>
			<div class='blockInput'>
				<span>материал</span>
				<select name='material' size='3'>
<?php
// Выборка из таблицы 'specif' всех характеристик из материала '$material'
		$result5 = mysqli_query($db, "SELECT * FROM specif WHERE name='Срубы' ORDER BY material DESC");
		$myrow5 = mysqli_fetch_array($result5);
		$name = $myrow5['material'];

				printf("<option value='%s' selected>%s</option>",$myrow5['material'], $myrow5['material']);

										
		do {
			if ($myrow5['material'] != $name) {	
				
				printf("<option value='%s'>%s</option>",$myrow5['material'], $myrow5['material']);
				$name = $myrow5['material'];
			}
		}
			while ($myrow5 = mysqli_fetch_array($result5));
?>
				</select>
				
			</div>

			<div class='blockInput'>
				<span>строение</span>
				<select name='building' size='3'>
					<option value='дом' selected>Дом</option>
					<option value='баня'>Баня</option>
				</select>
			</div>
		</div><!--flexSmall-->

<!-- DIMENSIONS -->		
		<div class='flexSmall'><!--flexSmall-->
			<div class='blockInput'>
				<span>Длина<br>сруба</span>
				<select name='length' size='3'>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option selected>8</option>
					<option>9</option>
					<option>10</option>
				</select>	
			</div>
			<div class='blockInput'>
				<span>Ширина<br>сруба</span>
				<select name='width' size='3'>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option selected>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</div>
			<div class='blockInput'>
				<span>Высота<br>сруба</span>
				<select name='height' size='3'>
					<option>2</option>
					<option>2.5</option>
					<option>3</option>
					<option selected>3.5</option>
					<option>4</option>
					<option>4.5</option>
					<option>5</option>
				</select>
			</div>
			<div class='blockInput'>
				<span>Длина<br>перегородок</span>
				<select name='partition' size='3'>
					<option selected>0</option>
<?php
	for($i=3;$i<=21;$i++ )
		printf("<option>%s</option>",$i);
?>
				</select>
			</div>
		</div><!--flexSmall-->

<!-- SUBMIT -->
		<div id='' class='text-center mt-3'>
			<input class='inputSubmit btn btn-primary px-4 me-md-2' type="submit" name="submit" id="submit" value="Расчитать сруб" />
		</div><!--flexSmall-->
		</form>
	</div><!-- initial -->



<!--
<div id='calculator' class=''>

	<div style="text-align: center;">
		<a href="#openModal">Открыть модальное окно</a>
	</div>
	<div id="openModal" class="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">Расчёт материалов и стоимости</h3>
					<a href="#close" title="Close" class="close">×</a>
				</div>
				<div class="modal-body">
	<div id='result' class='flexBig'>
		<div id='' class='flexTitle' style='background-color: lightgreen;'><h2 class='text-center'>Расчёт материалов и стоимости</h2></div><!--divTop - flexTitle --/>
		<div id='' class='flexTitle' style='background-color: yellow;'>
			<div id='' class='flexMiddle' style='background-color: brown;'>
				<div id='' class='flexSmall' style='background-color: olive;'>
					<div id='' class=''>
						<h4 class=''>Исходные данные:</h4>
						<h6 class='color-price'>Общая информация:</h6>
						<p>Строение: <strong><?php echo $building ?></strong></p>
						<p>Материал: <strong><?php echo $material ?></strong></p>
						<h6 class='color-price'>Габариты стен:</h6>
						<p>Длина стены фасада: <strong><?php echo $width ?></strong> м.</p>
						<p>Длина боковой стены: <strong><?php echo $length ?></strong> м.</p>
						<p>Высота стены сруба: <strong><?php echo $height ?></strong> м.</p>
						<?php echo $mess_part_initial ?>
						<?php echo $mess ?>
						<h6 class='color-price'>Вес и стоимость 1 куб.м.:</h6>
						<p>Вес: <strong><?php echo $weight ?></strong> кг.</p>
						<p>Стоимость: <strong><?php echo $price ?></strong> руб.</p>
					</div>
				</div><!--divTown - flexSmall--/>
			</div><!--divMiddle - flexMiddle --/>
			
			<div id='divMiddle' class='flexMiddle' style='background-color: red;'>
				<div id='' class='flexSmall' style='background-color: olive;'>
					<div id='' class=''>
						<h4 class=''>Результаты:</h4>
						<h6 class='color-price'>Основной сруб:</h6>
						<p>Количество венцов: <strong><?php echo $row ?></strong> шт.</p>
						<p>Длина бревна фасада: <strong><?php echo $front ?></strong> м.</p>
						<p>Длина бревна боковой стороны: <strong><?php echo $side ?></strong> м.</p>
						<p>Периметр: <strong><?php echo $perimeter ?></strong> м.</p>
						<p>Длина брёвен: <strong><?php echo $length_main ?></strong> м.</p>
						<p>Объём: <strong><?php echo $volume_main ?></strong> куб.м.</p>
						<?php echo $mess_part_result ?>
						<h6 class='color-price'>Всего:</h6>
						<p>Общая длина брёвен: <strong><?php echo $length_full ?></strong> м.</p>
						<p>Общий объём: <strong><?php echo $volume_full ?></strong> куб.м.</p>
						<p>Вес: <strong><?php echo $weight_full ?></strong> кг.</p>
						<p>Стоимость: <strong><?php echo $price_full ?></strong> руб.</p>
					</div>
				</div><!--divTown - flexSmall--/>
			</div>
		</div><!--divTop - flexTitle --/>
	</div><!-- result --/>
				</div><!--modal-body--/>
			</div><!--modal-content--/>
		</div><!--modal-dialog--/>
	</div><!--myModal--/>
</div><!--calculator---/>
-->

<?php
// !***************** Закрытие объектов с результатами и подключение к базе данных *********************! //
$result5->close(); // Материалы, отсортированные в обратном алфавите для выборки
?>