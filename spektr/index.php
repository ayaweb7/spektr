<?php 
// Подключаем HEADER
include ("blocks/header.php");

// Подключаем modal_form
include ("blocks/modal.php");
?>


<!-- annotation -->
<div class="container px-4 py-4" style='background-color: #a1a1a1;'><!-- col-xxl-8 info-->
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        
		<div class="col-10 col-sm-8 col-lg-6">
            <img src="img/objects/house.jpg" class="d-block mx-lg-auto img-fluid" alt="Сруб дома" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-7 fw-normal mb-6"><?php echo $myrow1['offer'] ?></h1>
			<div class="d-grid gap-2 d-md-flex justify-content-md-start py-3">
				<a class="btn btn-primary btn-lg px-4 me-md-2" href="#modal">Каталог</a>
            </div>
            <h2 class="lead_p fst-italic"><?php echo $myrow1['extra'] ?></h2>
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
<div class="container px-4 py-4" id="about_us">
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
<div class="container px-4 py-4" id="contact">
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

<?php 
// Подключаем FOOTER
include ("blocks/footer.php");
?>