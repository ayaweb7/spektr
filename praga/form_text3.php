﻿<?php 
include ("blocks/date_base.php"); /* Соединяемся с базой данных */
mysql_query('SET NAMES utf8');
$result = mysql_query("SELECT title,meta_d,meta_k,h1,h2 FROM settings WHERE page='form_text'",$db);

$myrow = mysql_fetch_array($result);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $myrow['title'] ?></title>
<meta name="keywords" content="<?php echo $myrow['meta_k'] ?>" />
<meta name="description" content="<?php echo $myrow['meta_d'] ?>" />
<link href="css/screen.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/praga_script.js"></script>
<script type="text/javascript" src="http://4geo.ru/maps/js/4geoAPI.js" ></script>
<link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
</head>


<!-- Начало кода VALUATION -->
<body id="form_text">

<!-- Подключаем HEADER -->
		<?php include ("blocks/header.php"); ?>

<!-- Начало кода REALTIES -->

    <div id="realties">
<h1>Форма документа</h1>
<h2>Образец</h2>
<div id="statement">
<p class="where">Мировому судье, судебного участка № _ города Коряжма Архангельской области 165650, Архангельская область, город Коряжма,  ул.Дыбцына, д.1.</p>
<p class="where"><em>Истец:</em> Савичева Татьяна Борисовна, зарегистрирован по адресу: город Коряжма, улица Лесная, д.44, кв.77;<br />контактный телефон: 8-921-777-77-77.</p>
<p class="where"><em>Ответчик:</em> ООО «Мир окон», находящийся  по адресу: город Коряжма, проспект Ленина, д.45.</p>
<p class="topic">Исковое заявление<br />о расторжении договора и возмещении ущерба, вызванного неисполнением договора</p>
<p class="abzac">Далее подробно излагается суть иска с указанием обоснований, на которые ссылается Заявитель.</p>
<p class="abzac for_example">Например:</p>
<p class="abzac">« ___ »  __________ 20 __ года я заключила договор с ответчиком  об  изготовлении оконных блоков и их установке  на  моем  балконе –  договор  № ___ от « ___ »  __________ 20 __ года. Стоимость блоков и работ была мною оплачена  полностью  в соответствии с договором –  ______ рублей.</p>
<p class="abzac">Оконные блоки были изготовлены с задержкой – вместо  пяти  дней  их изготавливали две недели. Когда блоки были готовы, ответчик  доставил  их по моему адресу. При осмотре изделий оказалось,  что  их  вес  составляет вместо оговоренных 160 кг – 480 кг, к тому  же  изделия было невозможно внести в подъезд и поднять на этаж, так как их размер  значительно превышал размеры двери в подъезде. Меня удивило это обстоятельство, так как перед заключением договора представитель ответчика выезжал ко мне на квартиру, производил замеры и чертежи, которые прилагаются к договору. Я вынуждена была  отказаться принять такую работу. В результате этого ответчик увез оконный блок, который невозможно было внести в подъезд. Два блока остались у меня, но я отказалась от их монтажа, так как в договоре идет речь о полном остеклении балкона.</p>
<p class="abzac">Невыполнением договора ответчик нарушил ст. 7, 10 Закона РФ "О защите прав  потребителей", в соответствии со ст. 12 которого за ненадлежащую информацию о товаре  изготовитель несет ответственность. Потребитель вправе расторгнуть договор и потребовать возврата уплаченной за товар суммы. Изготовитель также нарушил сроки  выполнения  работ  и в соответствии со ст. 28 указанного Закона потребитель вправе расторгнуть договор о выполнении работ.</p>
<p class="abzac">Я неоднократно обращалась к ответчику с просьбой внесудебным путем разрешить  возникшие  проблемы,  но  в  течение двух месяцев ответчик уклонялся от удовлетворения моего требования о расторжении договора  и возврате полученных сумм.</p>
<p class="abzac">Неисполнением  данного  договора  по  вине  ответчика  мне  причинен моральный вред, выразившийся в разочаровании от неисполненной работы, упущенном времени для   организации остекления  балкона с другим исполнителем, простудных заболеваниях моих  и  членов моей семьи  из-за неостекленного  балкона. Виновными действиями ответчика мне  причинен моральный вред, в счет компенсации которого я прошу взыскать с ответчика ______ рублей.</p>
<p class="abzac">На основании изложенного</p>
<p class="topic1">прошу:</p>
<ol>
<li>расторгнуть договор № ___ от « ___ »  __________ 20 __ года между мной и ООО «Мир окон»;</li>
<li>взыскать с ответчика уплаченную по договору сумму в размере ______ рублей;</li>
<li>взыскать с ответчика ______ рублей в качестве компенсации за причиненный моральный вред.</li>
</ol>
<p class="app">Приложение:</p>
<ol>
<li>копия искового заявления;</li>
<li>копия договора № ___ от « ___ »  __________ 20 __ года;</li>
<li>кассовый и товарный чеки об оплате на сумму ______ рублей;</li>
<li>копии претензий ответчику.</li>
</ol>
<p class="sign">« ____ » ______________  20__ года<em>.........................</em>/ Савичева Т.Б. /</p>
</div> <!-- statement --> 


    
        </div> <!-- realties -->    
	

<!-- Подключаем ACTIVITIES -->
		<?php include ("blocks/activities.php"); ?>


<!-- Подключаем FOOTER -->
		<?php include ("blocks/footer.php"); ?>

</body>
</html>