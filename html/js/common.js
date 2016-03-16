$(document).ready(function() {

	//Hover for .forwho__sidebar__item__value__helper
	$(".forwho__sidebar__item__value__helper").on("mouseenter", function () {
		$(this).show();
	});
	$(".forwho__sidebar__item__value__helper").on("mouseleave", function () {
		$(this).hide();
	});
	$(".forwho__sidebar__item__value__imgicon").on("mouseenter", function () {
		$(".forwho__sidebar__item__value__helper").show();
	});
	$(".forwho__sidebar__item__value__imgicon").on("mouseleave", function () {
		$(".forwho__sidebar__item__value__helper").hide();
	});

	//show/hide more programm
	$(".programm__course.expand").find(".programm__course__more").show(); //init
	$(".programm__course__bth-more").on("click", function () {
		var el_parent = $(this).parent(),
			el_more = $(this).parent().find(".programm__course__more");
		if ( el_parent.hasClass("expand") ) {
			el_parent.removeClass("expand");
			el_more.slideUp();
		} else {
			el_parent.addClass("expand");
			el_more.slideDown();
		}
	});

	//Placeholder
	//Doc: https://github.com/NV/placeholder.js/
	$("[placeholder]").textPlaceholder();

	//Parallax (Stellar)
	//Документация: http://markdalgleish.com/projects/stellar.js/docs/
	//<div class="image" data-stellar-background-ratio="0">...</div>
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 0
	});
	
	//Попап менеджер FancyBox
	//Документация: http://fancyapps.com/fancybox/
	//<a class="fancybox" rel="group" href="big_image_1.jpg"><img src="small_image_1.jpg" alt="" /></a>
	//<a class="fancybox" rel="group" href="big_image_2.jpg"><img src="small_image_2.jpg" alt="" /></a>
	$(".fancybox").fancybox();

	//Навигация по Landing Page
	//$(".top_mnu") - это верхняя панель со ссылками.
	//Ссылки вида <a href="#contacts">Контакты</a>
	$(".top_mnu").navigation();

	//Добавляет классы дочерним блокам .block для анимации
	//Документация: http://imakewebthings.com/jquery-waypoints/
	$(".block").waypoint(function(direction) {
		if (direction === "down") {
			$(".class").addClass("active");
		} else if (direction === "up") {
			$(".class").removeClass("deactive");
		};
	}, {offset: 100});

	//Плавный скролл до блока .div по клику на .scroll
	//Документация: https://github.com/flesler/jquery.scrollTo
	$("a.scroll").click(function() {
		$.scrollTo($(".div"), 800, {
			offset: -90
		});
	});

	//Каруселька
	//Документация: http://www.owlcarousel.owlgraphic.com/docs/started-welcome.html
	$(".reviews__slider").owlCarousel({
		margin: 30,
		items : 3,
		loop: true,
		nav : true,
		navText : ['<i class="icon icon-arrow-left"></i>','<i class="icon icon-arrow-right"></i>'],
		autoPlay : false,
		responsive : {
			0 : {
				items : 1
			},
			480 : {
				items : 1
			},
			768 : {
				items : 2
			},
			992 : {
				items : 3
			},
			1199 : {
				items : 3
			}
		}
	});

	//Кнопка "Наверх"
	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	$("#top").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$("form").submit(function() {

		var name = $(this).find("input[name='name']").val(),
			email = $(this).find("input[name='email']").val();

		if (!name || !email) {
			alert("Заполните поля формы.");
			return false;
		}

		var email_regexp = /.+@.+\..+/i;
		var email_test = email_regexp.test(email);
		if (!email_test) {
			alert("Введен некоректный Email-адрес.");
			return false;
		}

		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $("form").serialize(),
			success: function(response) {
				//$('#order_status').html(response);
				$('#order_status').html('Спасибо, Ваша заявка отправлена!');
				console.log("jquery-ajax-mail-success");
				console.log('response: ' + response);
			},
			error:  function(xhr, str){
				alert('Возникла ошибка: ' + xhr.responseCode);
				console.log('response: ' + xhr);
			}
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 1000);
		});
		return false;
	});

});