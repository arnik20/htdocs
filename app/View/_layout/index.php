<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $SERVER; ?>style/style.css" />

 <script type="text/javascript">
  function animateText(id, text, i) {
    document.getElementById(id).innerHTML = text.substring(0, i);
    i++;
    if (i > text.length) i = 0;
    setTimeout("animateText('" + id + "','" + text + "'," + i + ")", 100);
  }
</script>
 </head>
<body style="color:#000;" onload = 'animateText("dynamic-text", "MyFrame.ru  ", 0);'>

	<div id="content">
		<h1 align=center>Информационная безопасность</h1>
		<ul id="menu">
			<?php echo $menu;?>
		</ul>
		
		<div class="post">
		
			
			
			<?php echo $content_for_layout; ?>
			
			<div class="details">
				<h3><span id = 'dynamic-text'></span></h3>		
			</div>
			
			<div class="x"></div>
			
		</div>

		
		<div class="col">
			<h3><b>Защита устройств</b></h3>
			<a href="personal"><p>Как отключить USB-флешки совсем</p></a>
			<a href="planshet"><p>Защита персональных данных</p></a>
			<a href="mobale"><p>Смартфоны</p></a>
			
		</div>
		
		<div class="col">
		
			<h3><b>Информационная безопасность</b></h3>
			<a href="Unix"><p>Unix</p></a>
			<a href="shifr"><p>Шифр Цезаря</p></a>
			<a href="atbah"><p>Шифр Атбаш</p></a>
			
		</div>
		
		<div class="col">
			<h3><b>Новости безопасности</b></h3>
			<a href="xolodnie_zvonki"><p>Безопасны ли холодные звонки</p></a>
			<a href="sistema"><p>Система инженерной безопасности </p></a>
			<a href="birza"><p>Фондовую биржу атаковали хакеры из ANONYMOUS</p></a>
			
		
		</div>
		
		<div id="footer">
			<p>Copyright &copy;</p>
		</div>	
	</div>
</body>
</html>