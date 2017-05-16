<!--      -->

<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>onePHP</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/mainPage.css">
	<meta name="description" content="Информационно развлекательный портал для программистов ">
	<meta name="keywords" content="itProger, it, IT, курсы, новости">
	<!--   адаптивоность для мобильных устройств   -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--   изображение возле title   -->
	<link  href="image/shortcut.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body>
	<div id="wrapper">
		<div id="content">
	<!--  шапка сайта    -->
	<header>
		<div id="logo">
			<a href="index.php" title="На главную">
				<img src="image/headerLogo.png" title="itProger.com" alt="itProger.com">
				<span>itProger</span>
			</a>
		</div>
		<div id="aboutUs">
			<a href="#" title="Узнать детальнее о рекламе">Реклама</a>
			<a href="#" title="Написать нам письмо">Партнерка</a>
		</div>
		<div id="regAuth">
			<a href="#" title="Войти в кабинет пользователя">
				<div class="button">
					Войти
				</div>
			</a>
			<a href="#" title="Зарегистрироватся на сайте">
				<div class="button">
					Регистрация
				</div>
			</a>
		</div>
	</header>
	<nav>
		<div id="showMenu">
			<a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
			</div>
		<div id="hideMenu">
			<a href="#">IT </a>
			<a href="#">новости</a>
			<a href="#">Видеокурсы</a>
			<a href="#">Сайты на заказ</a>
			<a href="#">IT задачи</a>
			<a href="#">Магазин </a>
		</div>
		<div id="mobileMenu">
			<a href="#">IT </a><br> 
			<a href="#">новости</a><br> 
			<a href="#">Видеокурсы</a><br> 
			<a href="#">Сайты на заказ</a><br> 
			<a href="#">IT задачи</a><br> 
			<a href="#">Магазин </a><br> 
			<hr>
			<a href="#">Регистрация </a>
			<a href="#">Войти</a>
		</div>
		<!--       -->
	
		<!--  создаем поиск вверху    -->
		<div id="search">
			<span>Поиск</span>
			<i class="fa fa-search" aria-hidden="true"></i>

		</div>
	</nav>

	<div id="main">
		<div id="news">
			<h2 class="heading">Новости</h2> 
				<div style="clear:both;"><br></div>
				 <?php
				 for ($i=0; $i <6 ; $i++) { 
				 echo '
				<div class="article">
					<img src="http://www.therealityfiles.com/wp-content/uploads/2015/09/Man-standing-at-lighted-door-within-green-matrix-post.jpg" alt="test" title="test">
					<span>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. "</span>
				</div>
				';}

						?>
						
				<a href="#" title="Посмотреть больше статетй">
				<div class="button">
					Посмотреть больше статей
				</div>
				</a>
				</div>
			</div>
			<aside >
			<div id="courses">
			<h2 class="heading">Видеокурсы</h2>
			<!--    делаем отступ     -->
				<div style="clear:both;"><br></div>
				<!-- выводим курс -->
 				<?php
				 for ($i=0; $i <4 ; $i++) { 
				 echo '
				<div class="course">
					<img src="http://img11.deviantart.net/3e48/i/2010/044/2/8/programming_oop_wallpaper_red_by_hexeno.png" alt="test" title="test">
					Базовый C++
					<span>14 уроков </span>
					<div style="clear:both;"><br></div>
				</div>
				';}

						?>
<a href="#" title="Посмотреть все видеокурсы">
				<div class="button">
					Больше видеокурсов
				</div>
				</a>
	</div>
				<div id="moreCourses">
					<h2 class="heading">Assembler</h2>
			<!--    делаем отступ     -->
				<div style="clear:both;"><br></div>
				<img src="http://is5.mzstatic.com/image/thumb/Purple5/v4/89/62/cc/8962cc55-0a97-9eed-cf0f-5ae8da84a4ce/source/200x200bb.jpg" alt="test" title="test">
					Базовый Assembler
					<span>14 уроков </span>
					<div style="clear:both;"><br></div>
				</div>
			</aside>
			<div style="clear:both;"><br></div>
	</div>
	
	</div>
	<footer>
		<div id="siteName">
		<span>IT Proger</span> - сообщество программистов
		</div>
		<!--   отделяем девиз от всего остального    -->
		<div id="clear"></div>
		<div id="footerMenu">
			<a href="#" title="Узнать детальнее о рекламе">Реклама</a>
			<a href="#" title="Поддержать проэкт ">Поддержать проэкт</a>
			<a href="#" title="Написать письмо">Обратная связь</a>
		</div>
		<div id="rights">
		<a href="#">Все права защищены &copy; <?=date('Y')?></a>
		</div>
		<div id="socials">
			<a href="#" title="ВК"><i class="fa fa-vk" aria-hidden="true"></i>
</a>
			<a href="#" title="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i>
</a>
			<a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i>
</a>
			<a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i>
</a>
			<a href="#" title="Google+"><i class="fa fa-google-plus-square" aria-hidden="true"></i>
</a>
		</div>

	</footer>


</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script>
			$('#showMenu').click (function () {
		if ($('#mobileMenu').is(':visible'))
			$('#mobileMenu').hide ();
		else
			$('#mobileMenu').show ();
	});
			var width = $(window).width ();
	$(window).resize (function () {
		if ($(this).width () != width) {
			width = $(this).width ();
			$('#mobileMenu').hide ();
			$('nav').removeClass ('fixed');
			$('#search_field').removeClass ('fixed_search');
			if ($('#block_fixed').length)
				$('#block_fixed').hide ();
		}
	});

	$(document).scroll (function () {
		if ($(document).width () > 785) {
			if ($(document).scrollTop () > $('header').height () + 10) {
				$('nav').addClass ('fixed');
				$('#search_field').addClass ('fixed_search');
			} else {
				$('nav').removeClass ('fixed');
				$('#search_field').removeClass ('fixed_search');
			}
		}
	});
	
		</script>
</body>
</html>