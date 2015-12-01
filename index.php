<!DOCTYPE HTML>
<html>
<head>
<meta name="google-site-verification" content="NhzLbExKkADd8uRNgPz5zN2VLMTaXKHC3hHznmsQN54" />
<!-- ### Define Charset ### -->
<meta charset="utf-8">
<!-- ### Responsive MetaTag ### -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- ### Page Title ### -->
<title> Підгузники - інтернет магазин підгузників. Кyпити підгузники, купити побутові товари, дешево в Україні! </title>

      <!-- ### Description and Keyword ### -->
<meta name="keywords" content="Підзники, прокладки, порошок, пральний порошок, сипучі порошки, шампуні для волосся, туалетний папір, освіжувачі повітря, миюче для посуду, зубна паста, миючі засоби"/>
<meta name="description" content="побутова хімія, купити хімію, купити пральний порошок, хімія очистка, купити побутову хімію, бытовая химия оптом, купить химию оптом, оптом купить стриальный порошок, опт химии, купить бытовую химию"/>

<!-- ### Stylesheet and Bootstrap ### -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/styles.css" />

<link rel="stylesheet" href="css/lightbox.css" />

<!-- ### Favicon ### -->
<link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon" />

<!-- ### Google Fonts ### -->
<link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700,600,200" rel="stylesheet" type="text/css"/>

<!-- ### Javascript Files ### -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68935656-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32586680 = new Ya.Metrika({
                    id:32586680,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32586680" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type='text/javascript' src='js/scrollup.js'></script>
<!--<script type="text/javascript" src="js/lightbox.js"></script>   -->
<script type="text/javascript" src="js/slides.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/custom2.js"></script>
<script type="text/javascript" src="js/price.js"></script>

<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body>
<?php
       require_once('admin/mysql_connect.php');

        $query = 'SELECT head_info FROM general WHERE id=1';
		$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $time = $col_value;
    }
    }

    	$query = 'SELECT phoneone FROM general WHERE id=1';
		$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $phoneone = $col_value;
    }
    }
    	$query = 'SELECT phonetwo FROM general WHERE id=1';
		$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $phonetwo = $col_value;
    }
    }

      	$query = 'SELECT slidename FROM general WHERE id=1';
		$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $slogan = $col_value;
    }
    }

      	$query = 'SELECT slidedescription FROM general WHERE id=1';
		$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $desc = $col_value;
    }
    }

    $query = 'SELECT contact FROM general WHERE id=1';
		$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $contact = $col_value;
    }
    }

     $query = 'SELECT contactfoot FROM general WHERE id=1';
		$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $contactfoot = $col_value;
    }
    }

     $query = 'SELECT name, descript FROM category';
	 $result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $namecat[] = $col_value;
    }
    }



?>
<div class="wrap-switcher" id="home">
 <!-- ### START - Header Section ### -->
<header>
<div class="wrapper">
<div id="menu">
<div class="logo" style="display:inline"> </div>
<div style="padding-top:10px;"><i>Працюємо</br> Кожного дня <?=$time ?></i></br>PodGuzniko.Com.ua
</div>
<div style="display:inline;" >
<img src="img/tel2.png">
<select style="display:inline;" class="form-call" name="carlist" form="carform">

  <option value="volvo"><?=$phoneone ?></option>
  <!--<option value="saab"><?=$phonetwo ?></option> -->
</select>
</div>
</br>


	<ul style="position:relative; display:inline; left:200px; margin-top:5px;">
		<li><a href="#sel" class="red">Як замовити ?</a></li>
		<li><a href="#category" class="yellow">Каталог</a></li>
		<li><a href="#said" class="green">Відгуки</a></li>
		<li><a href="#adress" class="blue">Про нас</a></li>
		<!--<li><a href="#akcia" onclick="akcia()" class="orange">Акція</a></li>  -->
	</ul>
</div>
<div>
</header>
<!-- ### END - Header Section ### -->
<div class="clear"></div>

<!-- ### START - Main Section ### -->
<div class="main" >
<div class="gradient">
<div class="wrapper">
<div class="slogan" id="form-order">
<!--Інтернет-магазин побутових товарів >ми дбаємо про своїх клієнтів-->
	<h1><?=$slogan?></h1>
	<h2><?=$desc ?></h2>
</div>
<!-- ### Slider Ipad ### -->
    <div class="slides">
    <div class="slides_container">

    <img    src="img/slider/1.jpg" alt="sld1"/>

    <img   src="img/slider/2.jpg"  alt="sld2" />

    <img    src="img/slider/3.jpg"  alt="sld3" />

    <img    src="img/slider/4.jpg"  alt="sld4" />

    <img    src="img/slider/5.jpg"  alt="sld5" />

    <img    src="img/slider/6.jpg"  alt="sld6" />

    <img    src="img/slider/7.jpg"  alt="sld7" />

    <img    src="img/slider/8.jpg"  alt="sld8" />

    <img    src="img/slider/9.jpg"  alt="sld9" />

    <img    src="img/slider/10.jpg"  alt="sld10" />

    <img    src="img/slider/11.jpg"  alt="sld11" />

    </div>
    </div><!-- ### END - Slider Ipad ### -->
<div class="subscriber" >
<div class="subscriber-wrap">
<h3>Форма замовлення</h3>
<p>Введіть свої дані, наш менеджер зателефонує Вам!</p>
<!-- Newsletter -->

<form action="mailer.php" method="post" novalidate>
<input  value="Ваше ім'я"  name="name"    class="autoclear name-newsletter"     >
<input  value="Ваш Email"  name="email"  class="email-newsletter"     >
<input  value="Ваш номер телефону"  name="message"  class="phone-newsletter"   >
<input type="submit" value="Замовити дзвінок" name="subscribe"  class="button-newsletter">
<label>Ми зв'яжемось з вами протягом 3 годин!</label>
</form>

<!-- Newsletter -->
</div>
</div>
</div>
</div>
</div>

<!-- ### END - Main Section ### -->


<!-- ### START - Howitwork Section ### -->
<div class="howitwork" >
<div class="wrapper">
<div class="title" id="sel"><h3>Як отримати товар?</h3></div>
<div class="row-fluid">

<!-- ###   Feature 1 ### -->
<div class="span4 featu">
<div class="icon"> <img src="img/icons/features1.png" class="ft1" alt="" />  </div>
<h6>1. Шукаємо товар на сайті </p>
<div class="step"><p><a href="#product">Натисніть</a></p></div>
 </div>

<!-- ###   Feature 2 ### -->
<div class="span4 featu">
<div class="icon"> <img src="img/icons/features2.png" class="ft1" alt="" />  </div>
<h6> 2. Заповнюємо форму замовлення</h6>
<p>   </p>
<div class="step" ><p><a href="#form-order">Натисніть</a></p></div>
</div>

<!-- ###   Feature 2 ### -->
<div class="span4 featu">
<div class="icon"> <img src="img/icons/features3.png" class="ft1" alt="" />  </div>
<h6> 3. Отримайте товар</h6>
<p></p>
</div>


</div>
</div>
</div>
<!-- ### END - Howitwork Section ### -->


<!-- ### START - Features Section ### -->
<div class="features" >
<div class="wrapper">
<div class="feature1">
<h3 id="category">Виберіть категорію яка вас цікавить! </h3>
<h6>Натисніть на той продукт який вам потрібен! </h6>
<img src="img/logo/logo.png">

<ul>
<br><br>
<li><a onclick="myFunction4()" href="#product"><span class="cat_style"><?=$namecat[0] ?></span> - <?=$namecat[1] ?></a><br><br></li>
<li><a onclick="myFunction2()" href="#product"><span class="cat_style"><?=$namecat[2] ?></span> - <?=$namecat[3] ?>.</a><br><br></li>
<li><a onclick="myFunction3()" href="#product"><span class="cat_style"><?=$namecat[4] ?></span> - <?=$namecat[5] ?></a><br><br></li>
<li><a onclick="myFunction1()" href="#product"><span class="cat_style"><?=$namecat[6] ?></span> - <?=$namecat[7] ?></a><br><br></li>
<li><a onclick="myFunction5()" href="#product"><span class="cat_style"><?=$namecat[8] ?></span> - <?=$namecat[9] ?></a><br><br></li>
<li><a onclick="myFunction6()" href="#product"><span class="cat_style"><?=$namecat[10] ?></span> - <?=$namecat[11] ?></a><br><br></li>
</ul>
</div>
</div>
<ul class="feature1">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<li><a onclick="myFunction7()" href="#product"><span class="cat_style"><?=$namecat[12] ?></span> - <?=$namecat[13] ?></a><br><br></li>
<li><a onclick="myFunction8()" href="#product"><span class="cat_style"><?=$namecat[14] ?></span> - <?=$namecat[15] ?></a><br><br></li>
<li><a onclick="myFunction9()" href="#product"><span class="cat_style"><?=$namecat[16] ?></span> - <?=$namecat[17] ?></a><br><br></li>
<li><a onclick="myFunction10()" href="#product"><span class="cat_style"><?=$namecat[18] ?></span> - <?=$namecat[19] ?></a><br><br></li>
<li><a onclick="myFunction11()" href="#product"><span class="cat_style"><?=$namecat[20] ?></span> - <?=$namecat[21] ?></a><br><br></li>
</ul>
</div>
<!-- ### END - Features Section ### -->

<!-- ### START - Screenshots Section ### -->
<div class="screenshots" >
<div class="wrapper" id="product">
<div class="title"><h3>Вітрина</h3></div>
<div class="row-fluid">


<div id="tabs">
<ul class="tabs-ul">

<li><a href="#tabs-1" id="wash_items"></a></li>
<li><a href="#tabs-2" id="wash_crockery" > </a></li>
<li><a href="#tabs-3" id="ties_past"> </a></li>
<li><a href="#tabs-4" id="pampers"></a></li>
<li><a href="#tabs-5" id="tampon"> </a></li>
<li><a href="#tabs-6" id="servetca"></a></li>
<li><a href="#tabs-7" id="wash_powder"> </a></li>
<li><a href="#tabs-8" id="powder"> </a></li>
<li><a href="#tabs-9" id="head_clean"> </a></li>
<li><a href="#tabs-10" id="ws"> </a></li>
<li><a href="#tabs-11" id="clean_gas"> </a></li>

</ul>
 <div class="clear"></div>
 <div id="tabs-1" id="tovar" >
 <!-- ### First Gallery ### -->
<!-------------------------------------------------------
<ul   class="row-fluid">
/* Памперси */
<li class="span3"> <img src="img/screenshots/pampers/screen4.jpg" class="a" alt=""/>PAMPERS Aktive babi Duo 1<div class="b" > Ціна: 150грн <span style="color:green">В наявності</span><span style="color:red"></span> </div>  </li>
<li class="span3"> <img src="img/screenshots/pampers/screen4_2.jpg" class="a" alt=""/>PAMPERS Aktive babi Duo 2<div class="b">Ціна: 250грн <span style="color:green"></span><span style="color:red">Немає</span></div>  </li>
<li class="span3"> <img src="img/screenshots/pampers/screen4_3.jpg" class="a" alt=""/>PAMPERS Aktive babi Duo 3 <div class="b">Ціна: 170грн </div>  </li>
<li class="span3"> <img src="img/screenshots/pampers/screen4_4.jpg" class="a" alt=""/>PAMPERS Aktive babi Duo 4 <div class="b">Ціна: 430грн </div>  </li>
 </ul>

 ------------------------------------------------------>

 <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM product';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   >";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul>";
                     }
                     }


 ?>
 </div>
   <!-------------------------------------------------------
/* МИЮЧЕ ДЛЯ ПОСУДУ*/
------------------------------------------------------>
<div id="tabs-2" >

 <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM  wash_crockery';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>
</div>
<div id="tabs-3" >
   <!-------------------------------------------------------
/* Зубна паста*/
------------------------------------------------------>
 <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM  ties_past';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>

</div>
<div id="tabs-4" >
<!-- ### First Gallery ### -->
<!-------------------------------------------------------
/* Миючі засоби*/
------------------------------------------------------>
    <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM  wash_items';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>

</div>
<div id="tabs-5" >
<!-- ### First Gallery ### -->
<!-------------------------------------------------------
/* Прокладки*/
------------------------------------------------------>
     <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM  tampon';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>
</div>
<div id="tabs-6" >
<!-------------------------------------------------------
/* Серветки*/
------------------------------------------------------>
        <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM  servetca';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>
</div>
<div id="tabs-7" >
<!-------------------------------------------------------
/* Капусула*/
------------------------------------------------------>
      <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM wash_powder';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>
</div>
<div id="tabs-8" >
<!-------------------------------------------------------
/* Сипучы порошки*/
------------------------------------------------------>
      <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM powder';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>
</div>
<div id="tabs-9">
<!-------------------------------------------------------
/* Шампуні*/
------------------------------------------------------>
       <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM head_clean';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>
</div>
<div id="tabs-10" >
<!-------------------------------------------------------
/* Туалетний папір*/
------------------------------------------------------>
         <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM ws';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>
</div>
<div id="tabs-11" >
<!-------------------------------------------------------
/* Освіжувачі повітря*/
------------------------------------------------------>
   <?php
 						$query = 'SELECT id, path, name, price, availability, description FROM clean_gas';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li class=\"span3\"> <img src=\"$line[path]\" class=\"a\" alt=\"$line[description]\"/><br>$line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div></br>  </li>";
                     $i++;
                     if ($i % 4 == 0) {
                     	echo "</ul><ul   class=\"row-fluid\">";
                     }
                     }


 ?>
</div>

</div>
</div>
</div>
<!-- ### END - Screenshots Section ### -->


<!-- ### START - Testimonials Section ### -->
<div class="testimonials" >
<div class="wrapper">
<div class="row-fluid">
<!--<div class="sel_akcia" id="akcia"> -->

 </div>

<div class="title" id="adress"></div> <br><br>
 <h1 align="right" style="color:#00BFFF">Кyпити підгузники, купити побутові товари, дешево в Україні!</h1>
 <div class="cont_text">
 <br>

            <p>
             <?=$contact ?>
            </p>
         <br><br>
  </div>


 <div class="title" id="said"><h3>Відгуки клієнтів</h3></div>
 <div class="row-fluid">

 <!-- ### Testimonials 1 ### -->
 <div class="" style="margin-top:40px;">

 <?php

 		 $query = 'SELECT namev, commentv, id FROM feedbackview ORDER BY id DESC';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

						$max_post = 3;
						$num_post = mysqli_num_rows($result);
						$num_pages = intval(($num_post-1)/$max_post)+1;




								if(isset($_GET['page'])){
									$page = $_GET['page'];
									if($page<1)
										$page = 1;
									elseif ($page > $num_pages)
										$page = $num_pages;

								}else{
									$page = 1;
								}

								do {
								if(($line['id'] >($page*$max_post - $max_post)) && ($line['id'] <= $page*$max_post)){
	                                echo "<br><span  style=\"color:#558ED9; margin-left:35px; font-size:16px;\"><i>" . $line[namev].":</i></span><br>";
	                                echo "<span style=\"margin-left:35px;\">" .$line[commentv]."</span><br> ";
	                                echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";
										        }
										        }



							while ($line = mysqli_fetch_assoc($result));
							for ($i=1;$i<=$num_pages;$i++) {
							$a = "-";
                                   if($_GET['page']==$i){
                                   	 echo "<span class=\"navigatoractive\"><a href=\"index.php?page=$i#said\"><b> $i </b></a></span>";
                                   }
                                    elseif($_GET['page']!==$i){
                                   	 echo "<span class=\"navigator\"><a href=\"index.php?page=$i#said\"><i> $i </i></a></span>";
                                   }

                                   if($i<$num_pages){ echo "<span>$a</span>";}
                                   elseif($i=$num_pages){echo "<span> </span>";}

                                   }

 ?>
 <br> <br>
 </div>
   <h2 align=center style="color:blue; cursor:pointer; "><a onclick="comment()" href="#feed">&#x2193; Додати відгук</a></h2>

  <form method="POST" action="index.php" id="feed">

 </form>
  <br>
            <?php
      $feed = $_POST['feed'];
  $comment = $_POST['comment'];
             if(!empty($feed) & !empty($comment)){

		 $query = "INSERT INTO feedback SET name = '$feed', comment = '$comment'" ;


   		if($result == mysqli_query($link, $query)) {
                echo  "<h4 align=\"center\">Дякуємо за відгук!!! Після перевірки модератором його буде опубліковано!</h4>";
            } else {
                $status = "Виниклапомилка. Інформація не була записана.";

            }
            }

            ?>

  <br> <br>


</div>
</div>
<!-- ### END - Testimonials Section ### -->



<!-- ### START - Testimonials Section ### -->
<div class="action"  >
<div class="wrapper">
<h3> У нас найдешевші ціни. Найкраща якість</h3>

<a class="action-button" href="#top">Купити зараз!</a>
<span class="contact-foot">
	<?=$contactfoot ?>
    </span>

</div>

</div>

<!-- ### END - Testimonials Section ### -->


<!-- ### START - FOOTER Section ### -->
<footer>
<div class="wrapper">
	<div class="copy">  <p><strong> &#169; copyright PODGUZNIKO 2015-2016.</strong><br><i>Create by Serhii Onishchuk</i></p> </div>
<!--<div class="social">
<ul>
### Social Icons ###
<li class="google"> <a href="#"></a> </li>
<li class="facebook"> <a href="#"></a> </li>
<li class="twitter"> <a href="#"></a> </li>
</ul>
</div>
-->
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter21652120 = new Ya.Metrika({id:21652120,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21652120" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<div id="scrollup"><img alt="Прокрутити догори" src="img/icons/up.png"></div>
</footer>

<!-- ### END - FOOTER Section ### -->
</div>
</body>
</html>