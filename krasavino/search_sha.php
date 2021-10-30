﻿<?php

// Подключаем HEADER
include ("blocks/header_admin.php");
		
?>

<!--divBig-->
<div id='divBig' class='flexBig' style='background-color: #ccc;'>flexBig<!--divBig - #ccc-->
	<div id='divTop' class='flexTitle' style='background-color: lightgreen;'>flexTitle<!--divTop - -->
		<?php echo $myrow1['h1'] . " " . $myrow1['h2'] ?>
	</div><!--divTop-->

<!--divLarge-->	
	<div id='divLarge' class='flexTitle' style='background-color: navy;'>flexTitle<!--divLarge - -->

<!--divMiddle_1-->
		<div id='divMiddle' class='flexMiddle' style='background-color: brown;'>flexMiddle<!--divMiddle_1 - -->

<!--divTown-->			
			<div id='divTown' class='flexSmall' style='background-color: olive;'>flexSmall<!--divTown - -->
			
				<div id='town_select' class='blockInput'>blockInput<!---->
					<span id='town_hidden'>Выбран город: <em style='color: red;'> <?php echo $townSelected; ?></em></span>
					<select id='town' name='town' size='1' onchange='selectTown();'><!---->
						<option selected></option>

<?php

		$result2 = mysqli_query($db, "SELECT * FROM locality ORDER BY town");
		$myrow2 = mysqli_fetch_array($result2);
		$town='';
										
		do {
			if ($myrow2['town'] != $town) {	
				
				printf  ("<option value='%s'>%s</option>",$myrow2['town'], $myrow2['town']);
				$town = $myrow2['town'];
			}
		}
			while ($myrow2 = mysqli_fetch_array($result2));
			

?>
					</select>

				</div>
				<div class='blockInput'>blockInput
					<span>Критерии поиска</span><!---->
					<div class='blockButton'>blockButton
<!--						<input type='radio' id='searchShop' onClick="showTwoBlocks('divShop', 'town_hidden', 'town_show')" />-->
<!--						<label for='searchShop'>Выбор магазина</label>-->
						
						<input type='radio' id='townEquals' name='town_operator' value='=' checked /><!-- onClick="hiddenBlock('divShop')"-->
						<label for='townEquals'>Равно</label>
						
						<input type='radio' id='townNotEquals' name='town_operator' value='!=' />
						<label for='townNotEquals'>НЕ равно</label>
					</div>
				</div>
			</div><!--divTown-->

<!--divShop-->
<?php?>
			<div id='divShop' class='flexSmall' style='background-color: purple;'>flexSmall<!--divShop - -->
				<div class='blockInput'>blockInput
<!---->					<input type='hidden' name='townSelected' value="<?php echo $townSelected ?>" />
					<span>Магазины в городе <em style='color: red;'><?php echo $townSelected; ?></em></span>
					<select name='shop' size='1'><!---->
						<option></option>
<?php	

		$result3 = mysqli_query($db, "SELECT * FROM store WHERE town='$townSelected' ORDER BY shop");
		$myrow3 = mysqli_fetch_array($result3);
		$shop='';
										
		do {
			
			if ($myrow3['shop'] != $shop) {	
				
				printf  ("<option>%s</option>", $myrow3['shop']);
				$shop = $myrow3['shop'];
			}
		}
			while ($myrow3 = mysqli_fetch_array($result3));
?>
					</select>
				</div>
				<div class='blockInput'>blockInput
					<span>Критерии поиска</span><!---->
					<div class='blockButton'>blockButton
						<input type='radio' id='shopEquals' name='shop_operator' value='=' checked />
						<label for='shopEquals'>Равно</label>
						
						<input type='radio' id='shopNotEquals' name='shop_operator' value='!=' />
						<label for='shopNotEquals'>НЕ равно</label>
					</div>
				</div>
			</div><!--divShop-->

<!--divData-->
			<div id='divData' class='flexSmall' style='background-color: aqua;'>flexSmall<!--divData - -->
				<div class='blockInput'>blockInput
					<span>Дата покупки (ОТ)</span>
					<input type='date' name='date' style="color: red;" value=''>
				</div>
				<div id='date_hidden' class='blockInput'>blockInput<!-- class='blockInput hidden'-->
					<span>Дата покупки (ДО)</span>
					<input type='date' name='date_to' style="color: blue;">
<!--					<input type="text" name="date_to" style="color: blue;" size="10" value="2020.12.30" />-->
				</div>
				<div class='blockInput'>blockInput
					<span>Критерии поиска</span><!--divData - aqua-->
					<div class='blockButton'>blockButton
						<input type='radio' id='dateEquals' name='date_operator' value='=' onClick="hiddenBlock('date_hidden')" checked />
						<label for='dateEquals' style="float: left;">Равно</label>
						
						<input type='radio' id='dateNotEquals' name='date_operator' value='!=' onClick="hiddenBlock('date_hidden')" />
						<label for='dateNotEquals' style="float: left;">НЕ равно</label>
					
						<input type="radio" id="dateBetween" name="date_operator" value="BETWEEN" onClick="showBlock('date_hidden')" />
						<label for="dateBetween" style="float: left;">Между</label><!--showDiv('hidden')-->
					</div>
				</div>
			</div><!--divData-->

<!--divCategory-->			
			<div id='divCategory' class='flexSmall' style='background-color: lime;'>flexSmall<!--divCategory - -->
				<div class='blockInput'>blockInput
					<span>Категории</span>
					<select name='gruppa' size='1'>
						<option></option>
<?php	
		$result = mysqli_query($db, "SELECT * FROM shops ORDER BY gruppa");
		$myrow = mysqli_fetch_array($result);
		$gruppa=' ';
		do {
			if ($myrow['gruppa'] != $gruppa) {	
							
				printf  ("	<option>%s</option>",$myrow['gruppa']);
				$gruppa = $myrow['gruppa'];
			}
		}
			while ($myrow = mysqli_fetch_array($result));
?>
					</select>
				</div>
				<div class='blockInput'>blockInput
					<span>Критерии поиска</span><!---->
					<div class='blockButton'>blockButton
						<input type='radio' id='gruppaEquals' name='gruppa_operator' value='=' checked />
						<label for='gruppaEquals'>Равно</label>
						
						<input type='radio' id='gruppaNotEquals' name='gruppa_operator' value='!=' />
						<label for='gruppaNotEquals'>НЕ равно</label>
					</div>
				</div>
			</div><!--divCategory-->
		</div><!--divMiddle_1-->

<!--divMiddle_2-->		
		<div id='divMiddle' class='flexMiddle' style='background-color: #f1919f;'>flexMiddle<!--divMiddle_2 - -->

<!--divName-->
			<div id='divName' class='flexSmall' style='background-color: red;'>flexSmall<!--divName - -->
				<div class='blockInput'>blockInput
					<span>Наименование</span>
					<select name='name' size='1'><!---->
						<option></option>
<?php	
		$result4 = mysqli_query($db, "SELECT * FROM shops ORDER BY name");
		$myrow4 = mysqli_fetch_array($result4);
		$name='';
										
		do {
			if ($myrow4['name'] != $name) {	
				
				printf  ("<option>%s</option>", $myrow4['name']);
				$name = $myrow4['name'];
			}
		}
			while ($myrow4 = mysqli_fetch_array($result4));
?>
					</select>
				</div>
				<div class='blockInput'>blockInput
					<span>Критерии поиска</span><!---->
					<div class='blockButton'>blockButton
						<input type='radio' id='nameEquals' name='name_operator' value='=' checked />
						<label for='nameEquals'>Равно</label>
						
						<input type='radio' id='nameNotEquals' name='name_operator' value='!=' />
						<label for='nameNotEquals'>НЕ равно</label>
					</div>
				</div>
			</div><!--divName-->

<!--divCharacteristic-->
			<div id='divCharacteristic' class='flexSmall' style='background-color: blue;'>flexSmall<!--divCharacteristic - -->
				<div class='blockInput'>blockInput
					<span>Описание товара</span>
					<input type="text" name="characteristic" size="40" value=""/>
				</div>
			</div><!--divCharacteristic-->

<!--divPrice-->
			<div id='divPrice' class='flexSmall' style='background-color: green;'>flexSmall<!--divPrice - -->
				<div class='blockInput'>blockInput
					<span>Цена (ОТ)</span>
					<input type="text" name="price" size="7" value="" />
				</div>
				<div id='price_hidden' class='blockInput'>blockInput<!---->
					<span>Цена (ДО)</span>
					<input type='text' name='price_to' size="7" value="" / >
<!--					<input type="text" name="date_to" style="color: blue;" size="10" value="2020.12.30" />-->
				</div>
				<div class='blockInput'>blockInput
					<span>Критерии поиска</span><!---->
					<div class='blockButton'>blockButton
						<input type='radio' id='priceEquals' name='price_operator' value='=' onclick="hiddenBlock('price_hidden')" checked />
						<label for='priceEquals'>Равно</label>
						
						<input type='radio' id='priceNotEquals' name='price_operator' value='!=' onclick="hiddenBlock('price_hidden')" />
						<label for='priceNotEquals'>НЕ равно</label>
						
						<input type='radio' id='priceMore' name='price_operator' value='>=' onclick="hiddenBlock('price_hidden')" />
						<label for='priceMore'>>=</label>
						
						<input type='radio' id='priceLess' name='price_operator' value='<=' onclick="hiddenBlock('price_hidden')" />
						<label for='priceLess'><=</label>
						
						<input type='radio' id='priceBetween' name='price_operator' value='BETWEEN' onclick="showBlock('price_hidden')" />
						<label for='priceBetween'>Между</label>
					</div>
				</div>
			</div><!--divPrice-->

<!--divNone-->
			<div id='divNone' class='flexSmall' style='background-color: yellow;'>flexSmall
			</div>divNone
		</div><!--divMiddle-->
	</div><!--divLarge-->

<!--divBottom'-->	
	<div id='divBottom' class='flexTitle' style='background-color: #f9910f;'>flexTitle<!---->
		<input class='inputSubmit' type='submit' name='set_filter' value='ВЫБОРКА' />
		<input class='inputSubmit' type="reset" name="set_filter" value="сброс"/>
	</div><!--divBottom'-->

</div><!--divBig-->