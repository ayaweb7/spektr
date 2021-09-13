<?php
// Соединяемся с базой данных
require_once 'blocks/date_base.php';

?>

<!-- TABLE inventory -->
<table id="inventory" width="99%" class="realty">
                  
	<colgroup> <!-- Задание ширины и стилей для колонок таблицы -->
		<col id="id" /> <!-- Задание ширины и стилей для одной из колонок таблицы -->
		<col id="date" />
		<col id="shop" />
		<col id="characteristic" />
		<col id="address" />
		<col id="item" />
		<col id="trade" />
		<col id="price" />
	</colgroup>
                  
	<tr class="alt"> <!-- Строка таблицы -->
		<th scope="col">ID</th> <!-- Заголовочная ячейка таблицы -->
		<th scope="col">Имя клиента</th>
		<th scope="col">Телефон / Email</th>
		<th scope="col">Текст заявки</th>
		<th scope="col">Дата входа, дата отправки, UNIX-time</th>
		<th scope="col">IP / HostName</th>
		<th scope="col">Город, регион </th>
		<th scope="col">Локация</th>
		<th scope="col">Браузер, версия, ОС</th>
	</tr>
                    
<?php
// Выборка параметров магазинов (город - town, адрес - adress, id_store) на основании предыдущей выборки - $myrow
$result = mysqli_query($db, "SELECT * FROM application");
$myrow = mysqli_fetch_array($result);

// Проверка наличия товаров в группе для необходимости печати подзаголовка выбранной категории
		if (!isset($myrow['id'])) {'<script language="javascript">document.getElementsByClassName("absent").style.display="none";<script>';}                     
		else
		{

// Печать полосатых строк таблицы								
			$even=true;
			do
			{
				printf  ("<tr class='absent' style='background-color:".($even?'white':'#eaeaea')."'>
							<td class='id'>%s</a></td>
							<td class='name'>%s</td>
							<td class='tel'>%s / %s</td>
							<td class='mess'>%s</td>
							<td class='date'>%s, %s, %s</td>
							<td class='ip'>%s / %s</td>
							<td class='city'>%s, %s</td>
							<td class='location'>%s</td>
							<td class='brauser'>%s %s %s</td>
						</tr>  ",$myrow['id'], $myrow['name'], $myrow['tel'], $myrow['email'], $myrow['mess'], $myrow['start_time'], $myrow['send_time'],
								$myrow['unix_time'], $myrow['ip'], $myrow['hostname'], $myrow['city'], $myrow['region'], $myrow['location'], $myrow['brauser'], $myrow['version'], $myrow['os']); 
				
				$even=!$even;
			}
// Окончание цикла вычисления суммы и печати товаров в категории
			while ($myrow = mysqli_fetch_array($result));
		}

// !***************** Закрытие объектов с результатами и подключение к базе данных *********************! //
$result->close(); // Товары внутри категорий - отсортированные по наименованию
$db->close(); // Закрываем базу данных

// Заголовок таблицы
	printf  ("<tr><td colspan='7' style='border: none;'></td><td class='itog'>%s</td></tr>


	<caption>
		<h1><em>%s:</em> израсходовано <em>%s руб.</em>(<em>%s</em> наименований товаров!)</h1>
	</caption>
                   
</table>" , $sum , $gruppa, $sum, $count); // inventory

?>
<a class="thank-you-page__button" href="/">Вернуться на главную</a>