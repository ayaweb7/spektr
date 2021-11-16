<? if ($_GET['status'] == 'success') { ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Thanks</title>
	<link rel="stylesheet" href="css/style.css">
	<meta http-equiv="Refresh" content="3; URL=/"><!--  -->
	
<!-- Yandex.Metrika counter -->

<!-- /Yandex.Metrika counter -->
	
</head>

<body>
	<div class="thank-you-page">

		<h1 class="thank-you-page__title">Спасибо за заявку</h1>
		<p class="thank-you-page__descriptor">Мы позвоним Вам в указанное время</p>
		<a class="thank-you-page__button" href="/">Вернуться на главную</a>

	</div>

</body>

</html>

<? } else {
    header ("Location: /"); // главная страница вашего лендинга
} ?>