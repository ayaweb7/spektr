
(function ($) {
//	прикрепляем обработчик отправки к форме
	$(".contact-form").submit(function (event) {
// остановить нормальную отправку формы
		event.preventDefault();
				
// Сохраняем в переменную form id текущей формы, на которой сработало событие submit
		let form = $('#' + $(this).attr('id'))[0];
		
// Сохраняем в переменные дивы, в которые будем выводить текст ошибки
		let inpNameError = $(this).find('.contact-form__error_name');
		let inpEmailError = $(this).find('.contact-form__error_email');
		let inpTelError = $(this).find('.contact-form__error_tel');
		let inpTextError = $(this).find('.contact-form__error_text');
//let inpAgreementError = $(this).find('.contact-form__error_agreement');
//let inpFileError = $(this).find('.contact-form__error_file');

// Сохраняем в переменную див, в который будем выводить сообщение формы
		let formDescription = $(this).find('.contact-form__description');

		let fd = new FormData(form);
		
		$.ajax({
			url: "/mail/php/mail.php",
			type: "POST",
			data: fd,
			async : false,
			processData: false,
			contentType: false,
			success: function success(res) {
				console.log(res);
				let respond = $.parseJSON(res);
				
				if (respond.name) {
					inpNameError.text(respond.name);
				} else {
					inpNameError.text('');
				}

				if (respond.tel) {
					inpTelError.text(respond.tel);
				} else {
					inpTelError.text('');
				}

				if (respond.email) {
					inpEmailError.text(respond.email);
				} else {
					inpEmailError.text('');
				}

				if (respond.mess) {
					inpTextError.text(respond.mess);
				} else {
					inpTextError.text('');
				}
				

				if (respond.attantion) {
					formDescription.text(respond.attantion).css('color', '#e84a66').fadeIn(); //
				} else {
					formDescription.text('');
				}
//			updateTable();
				//here you can call another ajax request - здесь вы можете вызвать другой запрос ajax
				//Am I doing right here? - Я делаю прямо здесь?
				$.ajax({
					url: 'mysql_form_insert.php',
					type: 'POST',
					data: fd,
					async : false,
					processData: false,
					contentType: false,
					data : {
						todo:"Save"
					},

					success: function(data) {
					  // do smth.			
					},
				});
			}
		});			

// Переброс на страницу благодарности		
//		window.location.replace("/thank-you-page.php?status=success");
		
	});
}(jQuery));	

/*
$.ajax({  
    url : url,
    type : "POST",
    async : false,
    data : data,
    success:function(result){
        bootbox.alert('Ordered',function(){
        });
        updateTable();
        //here you can call another ajax request
        //Am I doing right here?
        $.ajax({  
            url : url,
            type : "POST",
            async : false,
            data : {
                todo:"Save"
            }
        }); 
    }
});
*/

/*
// Сообщение об успехе
				if (respond.success) {
				formDescription.text(respond.success).fadeIn();
					setTimeout(() => {
						formDescription.fadeOut("slow");
					}, 10000);
					setTimeout(() => {
						formDescription.text('');
					}, 5000);
					
				}
*/

/*
// Переброс на страницу благодарности
				if (respond.success) {
					$.ajax({
					url: 'mysql_form_insert.php',
					type: 'POST',
					data: fd,
					cache: false,
					dataType: 'json',
					processData: false,
					contentType: false,

					success: function(data) {
					  // do smth.			
					},
				});
				
				window.location.replace("/thank-you-page.php?status=success");
				}
*/

		
		


// Функция печати ошибок при вводе полей формы
function success(res) {
	console.log(res);
	let respond = $.parseJSON(res);
				
	if (respond.name) {
		inpNameError.text(respond.name);
	} else {
		inpNameError.text('');
	}

	if (respond.tel) {
		inpTelError.text(respond.tel);
	} else {
		inpTelError.text('');
	}

	if (respond.email) {
		inpEmailError.text(respond.email);
	} else {
		inpEmailError.text('');
	}

	if (respond.mess) {
		inpTextError.text(respond.mess);
	} else {
		inpTextError.text('');
	}
				
	if (respond.attantion) {
		formDescription.text(respond.attantion).css('color', '#e84a66').fadeIn(); //
	} else {
		formDescription.text('');
	}
}


// ЭТО ФУНКЦИИ ВВОДА ДАТЫ    
    /* функция добавления ведущих нулей */
    /* (если число меньше десяти, перед числом добавляем ноль) */
    function zero_first_format(value)
    {
        if (value < 10)
        {
            value='0'+value;
        }
        return value;
    }

    /* функция получения текущей даты и времени */
    function date_time()
    {
        var current_datetime = new Date();
        var day = zero_first_format(current_datetime.getDate());
        var month = zero_first_format(current_datetime.getMonth()+1);
        var year = current_datetime.getFullYear();
        var hours = zero_first_format(current_datetime.getHours());
        var minutes = zero_first_format(current_datetime.getMinutes());
        var seconds = zero_first_format(current_datetime.getSeconds());

        return day+"."+month+"."+year+" "+hours+":"+minutes+":"+seconds;
    }

    /* выводим текущую дату и время на сайт в блок с id "current_date_time_block" */
    /*document.getElementById('current_date_time_block').innerHTML = date_time();*/
	
	/* каждую секунду получаем текущую дату и время */
    /* и вставляем значение в блок с id "current_date_time_block2" 
    setInterval(function () {
        document.getElementById('current_date_time_block2').innerHTML = date_time();
    }, 1000);
	*/
	/* выводим текущую дату и время на сайт в поле формы с id "start_time" */
	document.getElementById('start_time').value = date_time();
	
	/* выводим текущую дату и ТЕКУЩЕЕ время на сайт в поле формы с id "send_time" */
	setInterval(function () {
        document.getElementById('send_time').value = date_time();
    }, 1000);
	
	/* выводим текущее время в формате UNIX time на сайт в поле формы с id "unix_time" */
	setInterval(function () {
        document.getElementById('unix_time').value = new Date().getTime();
    }, 1000);
	
	
// Маска ввода номера телефона

$(function() {
	$('.contact-form__input_tel').mask('+7(000) 000-00-00');
});

// Location
$.get("https://ipinfo.io", function (response) { 
		$("#ip").html("IP: " + response.ip); 
		$("#address").html("Location: " + response.region + ", City: " + response.city); 
		$("#details").html(JSON.stringify(response, null, 4)); 
		console.log(response);
		document.getElementById('ip').value = response.ip;
		document.getElementById('location').value = response.loc;
		document.getElementById('hostname').value = response.hostname;
		document.getElementById('city').value = response.city;
		document.getElementById('region').value = response.region;
	}, "jsonp");


// 