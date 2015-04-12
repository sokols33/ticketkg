<!DOCTYPE html>
<html>
  <head>
 <title>Билеты в театры и на концерты Бишкека</title>
 	<!-- Bootstrap -->
 <link href="<?=base_url();?>styles/reset.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/bootstrap.min.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/style.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/owl-carousel/owl.carousel.css" rel="stylesheet"/>
 <link href="<?=base_url();?>styles/owl-carousel/owl.theme.css" rel="stylesheet"/> 
 <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
 </head>
 <body>
<div id="upper_bg"></div>
<div id="wrapper" class="container">
	<div id="header" class="row">
		<div id="logo" class="col-md-3"><div class="well"><a href="<?=base_url();?>">Ticket.kg</a></div></div>
		<div id="header-content" class="col-md-9"><div class="well">9<br/>header-content</div></div>
	</div>
	<div id="navigation" class="row">
		<div class="product col-sm-12 col-md-12 col-lg-12">
			<div class="nav">
	            <ul class="nav nav-pills nav-justified">
					<li class="active"><a href="#">ГЛАВНАЯ</a></li>
					<li><a href="#">СПЕКТАКЛИ</a></li>
					<li><a href="#">КОНЦЕРТЫ</a></li>
					<li><a href="#">МЮЗИКЛЫ</a></li>
					<li><a href="#">КЛАССИКА</a></li>
					<li><a href="#">СПОРТ</a></li>
					<li><a href="#">ФЕСТИВАЛИ</a></li>
					<li><a href="#">ДЕТЯМ</a></li>
	            </ul>
        	</div>
    	</div>
	</div>
	<div class="row"><a href="">Главная</a>-><a href=""><?=$page_id?></a>-><a href=""><?=$page_id2?></a>-><a href=""><?=$main_info['item_name']?></a></div>
	<div class="row"><h1><?=$main_info['item_name']?></h1></div>
	<div id="content" class="row">
		<div id="featured" class="col-md-6">
			<div class="row">
				<img src="<?=base_url();?>img/items/<?=$main_info['item_img']?>">
			</div>
			<div class="row padding-top">

			</div>
		</div>
		<div id="sidebar" class="col-md-6">
			<div class="well">
				<div class="padding_in">
				<ul class="list-group">
					<li class="list-group-item"><span class="badge">14</span><a href="#">ТЕАТРЫ</a></li>
					<li class="list-group-item"><span class="badge">5</span><a href="#">ЦИРКИ</a></li>
					<li class="list-group-item"><span class="badge">1</span><a href="">СПОРТИВНЫЕ КОМПЛЕКСЫ</a></li>
					<li class="list-group-item"><span class="badge">8</span><a href="">КОНЦЕРТНЫЕ ЗАЛЫ</a></li>
					<li class="list-group-item"><span class="badge">2</span><a href="">КЛУБЫ</a></li>
					<li class="list-group-item"><span class="badge">7</span><a href="">КИНОТЕАТРЫ</a></li>
					<li class="list-group-item"><span class="badge">4</span><a href="">ДОМА КУЛЬТУРЫ</a></li>
					<li class="list-group-item"><span class="badge">3</span><a href="">ВЫСТАВОЧНЫЕ ЦЕНТРЫ</a></li>
					<li class="list-group-item"><span class="badge">1</span><a href="">МУЗЕИ</a></li>
					<li class="list-group-item"><span class="badge">0</span><a href="">ДРУГОЕ</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<h2>Описание</h2>
		<h2>Отзывы</h2>
	</div>
	<div id="footer">
		<div class="footer-top row">
			<div class="menu-footer col-sm-6 col-md-2"><div class="well">
<ul>
<li><a href="#">Онас</a></li><br />
<li><a href="#">О компании</a></li><br />
<li><a href="#">Адреса наших касс</a></li><br />
<li><a href="#">Адреса офисов</a></li><br />
<li><a href="#">Лого Ticket.kg</a></li><br />
<li><a href="#">Пресс-центр</a></li><br />
<li><a href="#">Реквизиты</a></li><br />
<li><a href="#">Вакансии</a></li></div></div>
			<div class="menu-footer col-sm-6 col-md-2"><div class="well">Проекты<br />
Электронный билет<br />
Программа «Карта Зрителя»<br />
Подарочная карта<br />
Благотворительность<br />
Промо-код</div></div>
			<div class="menu-footer col-sm-6 col-md-2"><div class="well">Помощь<br />
Изменения в репертуаре<br />
Часто задаваемые вопросы<br />
Как заказать билеты<br />
Карта сайта</div></div>
			<div class="menu-footer col-sm-6 col-md-2"><div class="well">Правила использования<br />
Пользовательское соглашение<br />
Публичная оферта<br />
Политика конфиденциальности</div></div>
			<div class="menu-footer col-sm-6 col-md-4"><div class="well">Контакты<br />
+996 (312) 99-77-99<br />
Ибраимова, д. 103, Бишкек, 720000 (остановка «ЦУМ»)</div></div>
		</div>
		<div class="footer-bottom row">
			<div class="copyrights col-sm-6 col-md-6"><div class="well">© ОсОО «TICKET», 2015
Ибраимова, д. 103, Бишкек, 720000
Телефон: +996 (312) 99-77-99
office@ticket.kg</div></div>
			<div class="social-icons col-sm-6 col-md-6"><div class="well">6<br>.social-icons</div></div>
		</div>
	</div>
</div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?=base_url();?>js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/menulist.js"></script>
    <script language="javascript" src="<?=base_url();?>js/core.js" type="text/javascript"></script>
    
    <script>
    $(document).ready(function() {
 		var owl = $("#owl-demo");
      owl.owlCarousel({
      
      baseClass : "owl-carousel",
      theme : "owl-theme",
        
      //navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      autoPlay : true,
      stopOnHover : true

      });

      // Custom Navigation Events

      $("#next").click(function(){
        owl.trigger('owl.next');
      })
      $("#prev").click(function(){
        owl.trigger('owl.prev');
      })
     }); 
     

   
    </script>

  </body>
</html>