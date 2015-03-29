<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Get Lucky - получи свой приз бесплатно!</title>
    <script language="javascript" src="<?=base_url();?>js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?=base_url();?>js/jquery.scrollbar.min.js"></script>
    <script type="text/javascript">

            function initCustomScrollbar(){
                $('.scroll-standard').scrollbar();

                $('.scroll-simple').scrollbar({
                    "type": "simple"
                });

                $('.external-scroll').scrollbar({
                    "autoScrollSize": false,
                    "scrollx": $('.external-scroll_x'),
                    "scrolly": $('.external-scroll_y')
                });

//                $('.content').add('h2').add('.buttons').add('.content-container').hide();
//
//                $('#test-webkit-2, #test-webkit').prev().show().end().show().scrollbar({
//                    "type": "simple"
//                });
            }

            function destroyCustomScrollbar(){
                $('.scroll-content').scrollbar('destroy');
            }

            $(document).ready(function(){
                initCustomScrollbar();

                $('.buttons').each(function(){
                    $(this).find('input.default').attr('checked', true);
                }).find('input:radio').change(function(){
                    $(this).closest('form').next().find('.resizable').css($(this).attr('name'), $(this).val());
                });

            });
        </script>
    <link href="<?=base_url();?>styles/style.css" rel="stylesheet" type="text/css" />
    <link type="text/css" href="<?=base_url();?>styles/jquery.scrollbar.css" rel="stylesheet" media="all" />
</head>
<body>
<?php 
$user = $this->ion_auth->user()->row();
?>

<div style="height: 25px; border-bottom: 1px solid #127271; width: 100%; background-color: #EAF4F1 /*F0585C D0E4E7*/; ">
<div style="width: 1000px; margin: 0 auto; height: 100%; color: #fff; padding: 0 0 20px 0;">
<ul class="user"><li><strong>Баланс:</strong> 100 сом</li><li><strong><?=$user->email;?></strong></li></ul>
</div>
</div>

<!-- <div style="height: 8px; width: 100%; background: url(/img/ornament_top.gif);"></div> -->
<br />
<div id="container">

<h1>Случаная генерация времени</h1>



<ul class="admin">
<li>
<a href="<?=base_url();?>adimin">Главная</a>
</li>
<li>
<a href="<?=base_url();?>adimin/email">Рассылка</a>
</li>
<li>
<a href="<?=base_url();?>adimin/money_gen">Генерация времени</a>
</li>
<li>
<a href="<?=base_url();?>adimin/add_rozyg">Добавить розыгрыш</a>
</li>
<li>
<a href="<?=base_url();?>adimin/readExcel">Считать эксель</a>
</li>
<li>
<a href="<?=base_url();?>auth">Пользователи</a>
</li>
</ul>
<br /><br />


<br /><br />




<form method="post" action="<?=base_url();?>adimin/generate">
<table border="1">
<tr>
<td>
Количество дней
</td>
<td>
Номинал
</td>
<td>
Количество призов
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days1" />
</td>
<td>
<input type="hidden" value="1" name="nominal1" /> 1 сом
</td>
<td>
<input type="text" value="" name="quantity1" />
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days2" />
</td>
<td>
<input type="hidden" value="3" name="nominal2" /> 3 сом
</td>
<td>
<input type="text" value="" name="quantity2" />
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days3" />
</td>
<td>
<input type="hidden" value="5" name="nominal3" /> 5 сом
</td>
<td>
<input type="text" value="" name="quantity3" />
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days4" />
</td>
<td>
<input type="hidden" value="10" name="nominal4" /> 10 сом
</td>
<td>
<input type="text" value="" name="quantity4" />
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days5" />
</td>
<td>
<input type="hidden" value="20" name="nominal5" /> 20 сом
</td>
<td>
<input type="text" value="" name="quantity5" />
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days6" />
</td>
<td>
<input type="hidden" value="50" name="nominal6" /> 50 сом
</td>
<td>
<input type="text" value="" name="quantity6" />
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days7" />
</td>
<td>
<input type="hidden" value="100" name="nominal7" /> 100 сом
</td>
<td>
<input type="text" value="" name="quantity7" />
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days8" />
</td>
<td>
<input type="hidden" value="200" name="nominal8" /> 200 сом
</td>
<td>
<input type="text" value="" name="quantity8" />
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days9" />
</td>
<td>
<input type="hidden" value="500" name="nominal9" /> 500 сом
</td>
<td>
<input type="text" value="" name="quantity9" />
</td>
</tr>
<tr>
<td>
<input type="text" value="" name="days10" />
</td>
<td>
<input type="hidden" value="1000" name="nominal10" /> 1000 сом
</td>
<td>
<input type="text" value="" name="quantity10" />
</td>
</tr>
</table>
<br />
<input class="button" type="submit" value="генерация" class="submit" name="my_button" />
</form>


<br /><br />
</div>
<div class="clear mymarg"></div>
<br />
<div style="width: 980px; margin: 0 auto; height: 40px; border: 1px dashed #074343; padding: 20px 10px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; ">
<img src="<?=base_url();?>/img/water.png" style="float: left;"/>
<h4><span style="font-size: 22px; padding-right: 3px;">&#171;</span>В каждой странице розыгрыша имеется максимальное количество попыток за день<span style="font-size: 22px; padding-left: 3px;"">&#187;</span></h4>
</div>
<br /><br />
<div style="height: 8px; width: 100%; background: url(/img/ornament_bot.gif);"></div>
<div style="background: #127271; width: 100%; height: 140px;">
<div id="footer">
<div style="width: 230px; float: left; padding-right: 20px; line-height: 22px;">
<strong>О проекте</strong><br />
Пользовательское соглашение<br />
Правила сайта<br />
Наша команда<br />
</div>
<div style="width: 230px; float: left; padding-right: 20px; line-height: 22px;">
<strong>Помощь</strong><br />
Как работает GetLucky<br />
Найти ответ самостоятельно<br />
Написать нам в службу поддержки<br />
</div>
<div style="width: 230px; float: left; padding-right: 20px; line-height: 22px;">
<strong>Партнерам</strong><br />
Разместите свою компанию<br />
Реализованные кампании<br />
</div>
<div style="width: 230px; float: left; line-height: 22px;">
<strong>Контакты</strong><br />
0 (553) 899 433<br />
0 (312) 899 433<br />
info@getlucky.kg<br />
</div>
</div>
</div>
<div style="background: #0E4444; width: 100%; height: 35px;">
<div id="footer">
<strong>&copy; 2013-2014 GetLucky.kg</strong> <br />
</div>
</div>

</body>
</html>