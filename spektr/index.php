<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>
	<link href="css/screen.css" type="text/css" rel="stylesheet" />
	<script src="js/jquery-3.6.0.min.js"></script>
	<link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
	
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

<!-- Yandex.Metrika counter -->
<!-- /Yandex.Metrika counter -->

</head>

<body>

<!--  -->
<!-- header -->
<div class="container" id="header">
    <header class="test-custom d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="">
            <a href='#about_us' title="О нас">
				<img src="img/logo.jpg" class="d-block mx-lg-auto img-fluid" alt="about_us" width="70" height="70" loading="lazy">
			</a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#about_us" class="nav-link px-2 link-secondary">О нас</a></li>
			<li><a href="#objects" class="nav-link px-2 link-secondary">Объекты</a></li>
            <li><a href="#services" class="nav-link px-2 link-secondary">Наши услуги</a></li>
			<li><a href="#sale" class="nav-link px-2 link-secondary">Горячие предложения</a></li>
			<li><a href="#contact" class="nav-link px-2 link-secondary">Контакты</a></li>
			<li><a href="admin/index.php" style="color: white;">.</a></li>
        </ul>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-2">
				<a class="text-muted" href="#"  target="_blank">
					<img src="img/vk.png" class="d-block mx-lg-auto img-fluid" alt="VKontakte" width="50" height="50">
				</a>
			</li>
            <li class="ms-2">
				<a class="text-muted" href="#" target="_blank">
					<img src="img/tlg.png" class="d-block mx-lg-auto img-fluid" alt="Написать в Телеграм" width="50" height="50">
				</a>
			</li>
			<li class="ms-3">
				<!--<a class="btn btn-primary" href="#modal">ТЕЛЕФОН</a>-->
				<a class="btn btn-primary" href="tel:+79997914839">ТЕЛЕФОН</a><!---->
				<!--<a href="tel:+78142332211">+7(814)-233-22-11</a>-->
				<!--<a href="tel:+7 (8142) 33 22 11">Позвоните нам</a>-->
			</li>
        </ul>
			
            
		

        <div id='top'><a href='#header' title="Наверх страницы"><svg class="bi" width="3.5rem" height="3.5rem"><use xlink:href="#arrow-up-circle-fill"/></svg></a></div>
    </header>
</div>

<!-- modal_form -->
<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
	<div class="remodalBorder">
		<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
		<form class="contact-form" id="contact-form_1" method="POST">
			<p class="contact-form__title"><img src="img/logo.jpg" width="30" height="30" class="me-3">Заявка на -></p>
			<p class="contact-form__description"></p>
<!-- ИМЯ -->
			<div class="contact-form__input-wrapper">
				<input type="text" id="name" name="name" class="contact-form__input contact-form__input_name"
					placeholder="Введите ваше имя">
				<div class="contact-form__error contact-form__error_name"></div>
			</div>
<!-- ТЕЛЕФОН -->
			<div class="contact-form__input-wrapper">
				<input type="text" id="tel" name="tel" class="contact-form__input contact-form__input_tel"
					placeholder="Введите ваш телефон">
				<div class="contact-form__error contact-form__error_tel"></div>
			</div>
<!-- ПОЧТА -->
			<div class="contact-form__input-wrapper"> 
				<input type="email" id="email" name="email" class="contact-form__input contact-form__input_email"
					placeholder="Введите ваш email">
				<div class="contact-form__error contact-form__error_email"></div>
			</div>
<!-- СООБЩЕНИЕ -->
			<div class="contact-form__input-wrapper">		
				<textarea id="mess" name="mess" class="contact-form__input contact-form__text"
					placeholder="Введите ваше сообщение"></textarea>
				<div class="contact-form__error contact-form__error_text"></div>
			</div>

			<input type="submit" name="submit" class="btn_modal" value="ОТПРАВИТЬ ЗАЯВКУ">
			<input type="hidden" name="formData" value="Отправка заявки с хэдера сайта">
		</form>
	</div>
</div>

<!-- annotation -->
<div class="container col-xxl-8 px-4 py-4">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/objects/house.jpg" class="d-block mx-lg-auto img-fluid" alt="Сруб дома" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <p class="lead_p fst-italic">Очень хорошо подумать над предложением, например:</p>
			<h2 class="display-7 fw-normal mb-6">Дома из цилиндрованного бревна (или бруса) для счастливой жизни</h2>
			<p>И САМУЮ КРАСИВУЮ ФОТОГРАФИЮ</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start py-3">
				<a class="btn btn-primary btn-lg px-4 me-md-2" href="#modal">Заявка</a>
            </div>
            <p>Подумать какие плюшки ещё положить, например:</p>
			<p class="lead_p fst-italic">Большие и не очень, для жизни круглый год или для летнего отдыха</p>
</div>
    </div>
</div>

<!-- objects -->
<div class="container px-4 py-4" id="objects">
	<h2 class="pb-2 border-bottom text-center test-custom">Наши объекты - здесь будет каруселька фотографий (если много - то по категориям: дома, дачи, другие</h2>
 <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item house active">
<!--        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Срубы из цилиндрованного бревна</h1>
            <p>Какой-то поясняющий текст.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Смотреть работы</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item bath">
<!--        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->

        <div class="container">
          <div class="carousel-caption">
            <h1>Срубы из бруса.</h1>
            <p>Другой текст про срубы из бруса</p>
            <p><a class="btn btn-lg btn-primary" href="#">Смотреть работы</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item veranda">
<!--        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Бани, беседки, веранды.</h1>
            <p>Всё про это самое.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Смотреть работы</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>	
</div>

<!-- about us -->
<div class="container col-xxl-8 px-4 py-4" id="about_us">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
		<h2 class="pb-2 border-bottom text-center test-custom">О нас - (слева или справа) фото а с другой стороны краткая информация о компании (история, услуги, команда, производственные помещения и т.д.)</h2>
        <div class="col-lg-6">
            <div class="bd-example">
                <h5>Компания СПЕКТР</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item li-pointer">Основана в:</li>
					<li class="list-group-item li-pointer">Оказываем услуги по:</li>
					<li class="list-group-item li-pointer">100 бригад, которые одновременно работают на 100 объектах</li>
                    <li class="list-group-item li-pointer">Производство пиломатериала на ленточной пилораме фирмы (БМВ)</li>
					<li class="list-group-item li-pointer">В наличии цикулярные (фрезерные, токарные, не знаю какие ещё) для изготовления плинтусов, балясин, вагонки и прочее.</li>
					<li class="list-group-item li-pointer">Качество нашей продукции ...</li>
					<li class="list-group-item li-pointer">Что-то ещё в чём вы уникальны для клиента</li>
                </ul>
				<a class="btn btn-primary my-4" href="#modal">Сделать заявку</a>
            </div>
		</div>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/objects/house.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>

<!-- services -->
<div class="container px-4 py-4" id="services">
    <h2 class="pb-2 border-bottom text-center test-custom">Услуги, которые мы оказываем - мозаика из фотографий с текстом</h2>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
        
		<div class="feature col">
            <h3 class="lead_p text-center">Изготовление лестниц</h3>
			<div>
				<img src="img/objects/ladder.jpg" class="d-block mx-lg-auto img-fluid" alt="Лестницы" width="264" height="191" loading="lazy">
			</div>
            <p class="text-start">Какой-то небольшой текст и ссылка куда-нибудь (подумать куда)</p>
        </div>
        
		<div class="feature col">
            <h3 class="lead_p text-center">Доставка и установка теплиц</h3>
			<div>
				<img src="img/objects/greenhouse.jpg" class="d-block mx-lg-auto img-fluid" alt="Теплицы" width="264" height="191" loading="lazy">
			</div>
            <p class="text-start">Какой-то небольшой текст и ссылка куда-нибудь (подумать куда)</p>
        </div>
        
		<div class="feature col">
            <h3 class="lead_p text-center">Нарезка стекла и зеркал</h3>
			<div>
				<img src="img/objects/glass.jpg" class="d-block mx-lg-auto img-fluid" alt="Нарезка стекла" width="264" height="191" loading="lazy">
			</div>
            <p class="text-start">Какой-то небольшой текст и ссылка куда-нибудь (подумать куда)</p>
        </div>
    
	</div>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
        
		<div class="feature col">
            <h3 class="lead_p text-center">Установка заборов</h3>
			<div>
				<img src="img/objects/fence.jpg" class="d-block mx-lg-auto img-fluid" alt="Заборы" width="264" height="191" loading="lazy">
			</div>
            <p class="text-start">Какой-то небольшой текст и ссылка куда-нибудь (подумать куда)</p>
        </div>
        
		<div class="feature col">
            <h3 class="lead_p text-center">Стройматериалы</h3>
			<div>
				<img src="img/objects/board.jpg" class="d-block mx-lg-auto img-fluid" alt="Вагонка, наличники" width="264" height="191" loading="lazy">
			</div>
            <p class="text-start">Какой-то небольшой текст и ссылка куда-нибудь (подумать куда)</p>
        </div>
        
		<div class="feature col">
            <h3 class="lead_p text-center">Строительные блоки</h3>
			<div>
				<img src="img/objects/brick.jpg" class="d-block mx-lg-auto img-fluid" alt="Строительные блоки" width="264" height="191" loading="lazy">
			</div>
            <p class="text-start">Какой-то небольшой текст и ссылка куда-нибудь (подумать куда)</p>
        </div>
    </div>
</div>

<!-- sale -->
<div class="container px-4 py-4" id="sale">
    <h2 class="pb-2 border-bottom text-center test-custom">Горячие предложения - подумать как лучше назвать этот блок</h2>
	<p class="lead_p fst-italic">Не могу определиться с формой этого блока:<br>
	или это будет табличка в виде прайса с перечислением какой-то продукции,<br>
	или в виде блога - картинка, цена, скидки за что-нибудь, акции за покупку чего-то для привлечения клиента!</p>
</div>

<!-- contact -->
<div class="container col-xxl-8 px-4 py-4" id="contact">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
		<h2 class="pb-2 border-bottom text-center test-custom">Наши контакты (слева или справа) фото или карта где вас найти, а с другой стороны контактная информация (телефоны, адреса, email, Telegram, Watsup ...)</h2>
        <div class="col-lg-6">
            <div class="bd-example">
                <p>Информация</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item li-pointer">Адрес:</li>
					<li class="list-group-item li-pointer">Телефон:</li>
					<li class="list-group-item li-pointer">Watsup:</li>
                    <li class="list-group-item li-pointer">E-mail:</li>
                </ul>
				<a class="btn btn-primary my-4" href="#modal">Сделать заявку</a>
            </div>
		</div>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/objects/house.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>

<!-- footer -->
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top test-custom-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href='#about_us' title="О нас" class="me-3">
				<img src="img/logo.jpg" class="d-block mx-lg-auto img-fluid" alt="about-me" width="46" height="50" loading="lazy">
			</a>
            <span class="text-muted">   &copy; 2021 строительная компания "Спектр" </span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-2">
				<a class="text-muted" href="#"  target="_blank">
					<img src="img/vk.png" class="d-block mx-lg-auto img-fluid" alt="VKontakte" width="50" height="50">
				</a>
			</li>
            <li class="ms-2">
				<a class="text-muted" href="#" target="_blank">
					<img src="img/tlg.png" class="d-block mx-lg-auto img-fluid" alt="Написать в Телеграм" width="50" height="50">
				</a>
			</li>
        </ul>
    </footer>
</div>


<script src="js/remodal.min.js"></script>
<script src="/mail/js/mail.js"></script>
<script src="/mail/js/browser.js"></script>

</body>
</html>