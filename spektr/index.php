<?php 
// Подключаем HEADER
include ("blocks/header.php");

// Подключаем modal_form
include ("blocks/modal.php");
?>


<!-- annotation -->
<div id="main" class="container px-4 my-4"><!-- style='background-color: #a1a1a1;' col-xxl-8 info py-4  -->
    <div class="row flex-lg-row-reverse align-items-center g-3"><!-- py-5-->
        
		<div class="col-10 col-sm-8 col-lg-6 img-center">
            <img src="img/objects/offer.jpg" class="d-block mx-lg-auto img-fluid" alt="Сруб дома" width="700" height="500" loading="lazy"><!---->
        </div>
        <div class="col-lg-6">
            <h1 class="display-7 fw-bolder mb-6"><?php echo $myrow1['offer'] ?></h1>
			<div class="d-grid gap-2 d-md-flex justify-content-md-start py-3">
				<a class="btn btn-primary btn-lg px-4 me-md-2" href="#modal">Каталог</a>
            </div>
            <h2 class="lead_p fst-italic"><?php echo $myrow1['extra'] ?></h2>
		</div>
    </div>
</div>

<!-- services -->
<div id="services" class="container px-4 my-4"><!-- style='background-color: #a1a1a1;' px-4 py-4  -->
	<h1 class="pb-2 border-bottom text-center test-custom">Строительные услуги</h1><!--<span></span>-->
	<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
		</div>
		<div class="carousel-inner">
<!-- frame -->
			<div class="carousel-item frame active">
				<div class="container">
					<div class="carousel-caption text-start">
						<h1 class="services"><span>Строительство</span></h1>
						<h2 class="rubric"><span>Срубы для дома и бани, из бревна и бруса, хозяйственные постройки</span></h2>
						<p><a class="btn btn-lg btn-primary" href="#">Каталог услуг</a></p>
					</div>
				</div>
			</div>
<!-- frame -->
<!-- ladder -->
			<div class="carousel-item roof">
				<div class="container">
					<div class="carousel-caption">
						<h1 class="services"><span>Кровля</span></h1><!--<span></span>-->
						<h2 class="rubric"><span>Монтаж стропильных систем любой сложности, утепление крыши и все виды кровельных материалов</span></h2>
						<p><a class="btn btn-lg btn-primary" href="#">Каталог услуг</a></p>
					</div>
				</div>
			</div>
<!-- ladder -->
<!-- fence -->
			<div class="carousel-item fence">
				<div class="container">
					<div class="carousel-caption">
						<h1 class="services"><span>Заборы</span></h1>
						<h2 class="rubric"><span>Деревянный и металлический штакетник или профнастил, опоры из стальных труб или кирпича</span></h2>
						<p><a class="btn btn-lg btn-primary" href="#">Каталог услуг</a></p>
					</div>
				</div>
			</div>
<!-- fenced -->
<!-- metal -->
			<div class="carousel-item metal">
				<div class="container">
					<div class="carousel-caption text-end">
						<h1 class="services"><span>Работы с металлом</span></h1>
						<h2 class="rubric"><span>Печи, столбы, ограждения, лестницы, сварочные работы</span></h2>
						<p><a class="btn btn-lg btn-primary" href="#">Каталог услуг</a></p>
					</div>
				</div>
			</div>
<!-- metal -->

		</div><!-- carousel-inner -->
		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div><!-- myCarousel -->
	<p class="text-center my-3"><a class="btn btn-lg btn-primary" href="#">Каталог услуг</a></p>
</div><!-- objects -->

<!-- about us -->
<div id="about" class="container px-4 my-4"><!-- style='background-color: #a1a1a1;'-->
    <div class="row flex-lg-row align-items-center g-3">
		<h1 class="pb-2 border-bottom text-center test-custom">Строительная компания "Спектр"</h1>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/objects/offer3.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" align="left">
        </div><!---->
		<div class="col-lg-6">
			<div class="flexBig color-dark">
				<h2 class="flexTitle">О компании</h2>
                <div class="flexTitle">
                    <div class="flexMiddle"><p></p>
						<p>Строительная компания "Спектр" уже 5 лет ведёт строительство домов из бруса и бревна, осуществляет каркасное строительство.</p>
						<p>В перечень строительных услуг входят также все виды кровельных работ, строительство фундамента; продажа, доставка и установка теплиц и парников; изготовление и монтаж лестниц, резка и установка стекла и зеркал; сварочные работы.</p>
					</div>
				</div>
				<h2 class="flexTitle border-bottom">Преимущества сотрудничества</h2>
				<div class="flexTitle">
                    <div class="flexMiddle"><p></p>
					<p>Наш опыт позволяет вести несколько объектов одновременно.</p>
					<p>Основная часть пиломатериала который мы продаем собственного производства, поэтому мы можем обеспечить высокое качество по доступным ценам.</p>
					<p>В зависимости от объема возможно предоставление индивидуальной скидки.</p>
					<p>Предоставляем высокое качество сервиса в плане подбора, распиловки пиломатериала и листового материала по индивидуальным размерам</p>
					<p>Оказываем услуги по доставке товаров и услуг.</p>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>

<!-- katalog -->
<div id="katalog" class="container px-4 my-4"><!-- style='background-color: #a1a1a1;'-->
    <h1 class="pb-2 border-bottom text-center test-custom">Каталог услуг и стройматериалов</h1>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
        
		<div class="feature col">
            <h3 class="lead_p text-center">Лестницы</h3>
			<div>
				<img src="img/objects/ladder.jpg" class="d-block mx-lg-auto img-fluid" alt="Лестницы" width="264" height="191" loading="lazy">
			</div>
            <div class="mx-5 text-center fw-bolder color-dark"><p>Ступень, перила, начальный столб, балясина, колонна, тетива</p></div>
        </div>
        
		<div class="feature col">
            <h3 class="lead_p text-center">Теплицы и парники</h3>
			<div>
				<img src="img/objects/greenhouse.jpg" class="d-block mx-lg-auto img-fluid" alt="Теплицы" width="264" height="191" loading="lazy">
			</div>
            <div class="mx-5 text-center fw-bolder color-dark"><p>Доставка и установка. Парниковая и армированная плёнка, укрывной материал</p></div>
        </div>
        
		<div class="feature col">
            <h3 class="lead_p text-center">Стекло и зеркала</h3>
			<div>
				<img src="img/objects/glass.jpg" class="d-block mx-lg-auto img-fluid" alt="Нарезка стекла" width="264" height="191" loading="lazy">
			</div>
            <div class="mx-5 text-center fw-bolder color-dark"><p>Простое, матовое, рифлёное. Нарезка и установка любой формы и размеров</p></div>
        </div>
    
	</div>
    <div class="row g-4 py-3 row-cols-1 row-cols-lg-3">
        
		<div class="feature col">
            <h3 class="lead_p text-center">Фундаменты</h3>
			<div>
				<img src="img/objects/fund.jpg" class="d-block mx-lg-auto img-fluid" alt="Заборы" width="264" height="191" loading="lazy">
			</div>
            <div class="mx-5 text-center fw-bolder color-dark"><p>Ленточный и свайно-винтовой</p></div>
        </div>
        
		<div class="feature col">
            <h3 class="lead_p text-center">Пиломатериалы</h3>
			<div>
				<img src="img/objects/wood.jpg" class="d-block mx-lg-auto img-fluid" alt="Вагонка, наличники" width="264" height="191" loading="lazy">
			</div>
            <div class="mx-5 text-center fw-bolder color-dark"><p>Брус, доска, рейка, доска пола, вагонка, имитация бруса, наличники, плинтуса</p></div>
        </div>
        
		<div class="feature col">
            <h3 class="lead_p text-center">Листовые материалы</h3>
			<div>
				<img src="img/objects/osp.jpg" class="d-block mx-lg-auto img-fluid" alt="Строительные блоки" width="264" height="191" loading="lazy">
			</div>
            <div class="mx-5 text-center fw-bolder color-dark"><p>Фанера, ДВП, ГКЛ, ОСП</p></div>
        </div>
    </div>
</div>

<!-- sale
<div id="sale" class="container px-4 my-4">
    <div class="row flex-lg-row align-items-center g-3">
		<h2 class="pb-2 border-bottom text-center test-custom">Горячие предложения - подумать как лучше назвать этот блок</h2>
		<div>
			<p class="lead_p fst-italic">Не могу определиться с формой этого блока:<br>
			или это будет табличка в виде прайса с перечислением какой-то продукции,<br>
			или в виде блога - картинка, цена, скидки за что-нибудь, акции за покупку чего-то для привлечения клиента!</p>
		</div>
	</div>
</div>
 -->
<!-- contact -->
<div id="contact" class="container px-4 my-4"><!-- style='background-color: #a1a1a1;'-->
    <div class="row flex-lg-row align-items-center g-3"><!--row flex-lg-row align-items-center g-5 py-5-->
		<h1 class="pb-2 border-bottom text-center test-custom">Наши контакты</h1>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/objects/spektrum.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
		<div class="col-lg-6">
            <div class="flexBig color-dark">
                <h2 class="flexTitle">Информация</h2>
                <div class="flexTitle border-bottom">
                    <div class="flexMiddle">Адрес:</div>
					<div class="flexMiddle">г.Коряжма, ул.Советская, 17 (цокольный этаж)</div>
				</div>
				<div class="flexTitle border-bottom">
					<div class="flexMiddle">Телефоны:</div>
					<div class="flexMiddle">911-551-81-91,<br>900-912-19-61,<br>921-075-26-56</div>
				</div>
				<div class="flexTitle border-bottom">
					<div class="flexMiddle">Watsup:</div>
					<div class="flexMiddle">911-551-81-91,<br>900-912-19-61</div>
                </div>
				<div class="flexTitle border-bottom">
					<div class="flexMiddle">E-mail:</div>
					<div class="flexMiddle">vagin.sergey@mail.ru</div>
				</div>
				<h2 class="flexTitle mt-3">Режим работы</h2>
				<div class="flexTitle border-bottom">
                    <div class="flexMiddle">понедельник - пятница:</div>
					<div class="flexMiddle">9:00 - 18:00</div>
				</div>
				<div class="flexTitle border-bottom">
					<div class="flexMiddle">суббота, воскресенье</div>
					<div class="flexMiddle">9:00 - 15:00</div>
				</div>
			</div>
			<a class="btn btn-primary my-4" href="#modal">Сделать заявку</a>
		</div>
    </div>
</div>

<?php 
// Подключаем FOOTER
include ("blocks/footer.php");
?>