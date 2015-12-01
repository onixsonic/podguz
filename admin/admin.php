<?php  require_once('mysql_connect.php');
//СКРИПТ ПРОВЕРКИ АВТОРИЗАЦИИ
if(isset($_GET['logSESS'])) {$logSESS = $_GET['logSESS'];unset($logSESS);}
if(isset($_POST['logSESS'])) {$logSESS = $_POST['logSESS'];unset($logSESS);}
  session_start();
  $logSESS = $_SESSION['$logSESS'];
  if(!isset($logSESS))
  {
    header("location: index.php");
    exit;
  }

  $query = 'SELECT name_admin FROM admin';
	 $result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $name_ad[] = $col_value;
    }
    }
  ?>
<!DOCTYPE html><head>	<meta charset="utf-8">	<title>Адмін панель PodGuzniko.Com.UA</title>	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 	 <script src="http://malsup.github.com/jquery.form.js"></script>	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>	<script type="text/javascript" src="js/jquery.main.js"></script>	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->

	<script>
function AjaxFormRequest(result_id,formMain,url) {
   jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+formMain).serialize(),
      success: function(response) {
         var action = document.getElementById(result_id).innerHTML = "<span name=\"top\" style=\"color:white;  margin:15px; height:15px;  background:#00BFFF;\">Поле змінено</span>";
            function func() {
					document.getElementById(result_id).innerHTML = "<span style=\"color:gray;\">Вносіть дані та тисніть змінити</span>";
                   }

             setTimeout(func, 2000);
      },
      error: function(response) {
         document.getElementById(result_id).innerHTML = "Виникла помилка при відпраці форми. Спробуйте ще раз";
      }
   });
}

function AjaxFormRequest(result_id,formTime,url) {
   jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+formTime).serialize(),
      success: function(response) {
         var action = document.getElementById(result_id).innerHTML = "<span name=\"top\" style=\"color:white;  margin:15px; height:15px;  background:#00BFFF;\">Поле змінено</span>";
            function func() {
					document.getElementById(result_id).innerHTML = "<span style=\"color:gray;\">Вносіть дані та тисніть змінити</span>";
                   }

             setTimeout(func, 2000);
      },
      error: function(response) {
         document.getElementById(result_id).innerHTML = "Виникла помилка при відпраці форми. Спробуйте ще раз";
      }
   });
}


function AjaxFormRequest(result_id,formSlide,url) {
   jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+formSlide).serialize(),
      success: function(response) {
         var action = document.getElementById(result_id).innerHTML = "<span name=\"top\" style=\"color:white;  margin:15px; height:15px;  background:#00BFFF;\">Поле змінено</span>";
            function func() {
					document.getElementById(result_id).innerHTML = "<span style=\"color:gray;\">Вносіть дані та тисніть змінити</span>";
                   }

             setTimeout(func, 2000);
      },
      error: function(response) {
         document.getElementById(result_id).innerHTML = "Виникла помилка при відпраці форми. Спробуйте ще раз";
      }
   });
}

function AjaxFormRequest(result_id,formContact,url) {
   jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+formContact).serialize(),
      success: function(response) {
         var action = document.getElementById(result_id).innerHTML = "<span name=\"top\" style=\"color:white;  margin:15px; height:15px;  background:#00BFFF;\">Поле змінено</span>";
            function func() {
					document.getElementById(result_id).innerHTML = "<span style=\"color:gray;\">Вносіть дані та тисніть змінити</span>";
                   }

             setTimeout(func, 2000);
      },
      error: function(response) {
         document.getElementById(result_id).innerHTML = "Виникла помилка при відпраці форми. Спробуйте ще раз";
      }
   });
}


</script></head><body>
<?php
//СКРИПТ ПРОВЕРКИ АВТОРИЗАЦИИ

		 $res = mysqli_query($link, "SELECT COUNT(*) FROM feedback");
		 $row = mysqli_fetch_row($res);
		 $total = $row[0]; // всього записів

?>
	<div id="wrapper">		<div id="content">			<div class="c1">				<div class="controls">					<nav class="links">
						<ul>							<li><a href="#" class="ico1"> Відгуки <span class="num"><?=$total?></span></a></li>							<li><a href="http://podguzniko.com.ua/" target="_blank" class="ico2">Переглянути сайт</a></li>							<!--<li><a href="#" class="ico3">Товари <span class="num">3</span></a></li> -->						</ul>
					</nav>					<div class="profile-box">						<span class="profile">							<a href="#" class="section">								<img class="image" src="images/img1.png" alt="image description" width="26" height="26" />								<span class="text-box">									Вітаю в адмін панелі PodGuzniko.Com.UA		<strong class="name">
									<?php
										$first = mb_substr($name_ad[0],0,1, 'UTF-8');//первая буква
										$last = mb_substr($name_ad[0],1);//все кроме первой буквы
										$first = mb_strtoupper($first, 'UTF-8');
										$last = mb_strtolower($last, 'UTF-8');
										$name1 = $first.$last;
                                        echo "$name1";
                                      ?>

									</strong>								</span>							</a>						</span>						<a  class="btn-on" href="exit.php">On</a>					</div>				</div>				<div class="tabs">					<div id="tab-1" class="tab">						<article>							<div class="text-section">								<h1>Основні дані</h1>								<p>Швидке редагування основних даних даних</p>

    <div id="messegeResult">
        <p> Вносіть дані та тисніть змінити </p>
    </div>
<form method="POST" action="general.php" id="formMain">
<h2 align=center style="color:#9370DB; text-decoration:underline;"># Редагувати час роботи </h2>
   Ввеіть час роботи з-до
  <input name="time" autocomplete="off" style="color: rgb(119, 119, 119);" value="9:00-22:00" onfocus="if (this.value == '9:00-22:00') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = '9:00-22:00'; this.style.color = '#777';}" type="text">
       <input id="button"  type="button"  value="Змінити" onclick="AjaxFormRequest('messegeResult', 'formMain', 'general.php')"/>
 </form>
 <br>
  <hr class="line"/ >
  </br>

  <form method="POST" action="general.php" id="formTime">
<h2 align=center style="color:#3CB371; text-decoration:underline; "># Змінити номер телефону</h2>
   Ввеіть номер телефону 1
  <input name="phoneone" autocomplete="off" style="color: rgb(119, 119, 119);" value="(063)-076-68-58" onfocus="if (this.value == '(063)-076-68-58') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = '(063)-076-68-58'; this.style.color = '#777';}" type="text">
  телефону 2
   <input name="phonetwo" autocomplete="off" style="color: rgb(119, 119, 119);" value="(063)-076-68-58" onfocus="if (this.value == '(063)-076-68-58') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = '(063)-076-68-58'; this.style.color = '#777';}" type="text">

    <input id="button"  type="button"  value="Змінити" onclick="AjaxFormRequest('messegeResult', 'formTime', 'general.php')"/>
 </form>

    <br>
  <hr class="line"/ >
  </br>
 <form method="POST" action="general.php" id="formSlide">
<h2 align=center style="color:#9370DB; text-decoration:underline;"># Заголовок слайду</h2>
   Ввеіть заголовок  <input name="slogan" width="500px" autocomplete="off" style="color: rgb(119, 119, 119);" value="Інтернет-магазин" onfocus="if (this.value == 'Інтернет-магазин') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Інтернет-магазин'; this.style.color = '#777';}" type="text">
   Введіть короткий опис <input name="desc" autocomplete="off" style="color: rgb(119, 119, 119);" value="ми дбаємо про..." onfocus="if (this.value == 'ми дбаємо про...') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'ми дбаємо про...'; this.style.color = '#777';}" type="text">
    <input id="button"  type="button"  value="Змінити" onclick="AjaxFormRequest('messegeResult', 'formSlide', 'general.php')"/>
 </form>
 <br>
  <hr class="line"/ >
  </br>


<form method="POST" action="general.php" id="formContact">
<h2 align=center style="color:#3CB371; text-decoration:underline;"># Про нас</h2>
   Змінити інформацію про нас<br> <br><textarea rows="10" cols="45" name="contact_we"></textarea>    <br><br>
   <input id="button"  type="submit"  value="Змінити" />
 </form>
  <br>
  <hr class="line"/ >
  </br>
<form method="POST" action="general.php" id="formContactfoot">
<h2 align=center style="color: #9370DB; text-decoration:underline;"># Редагувати контактну інформацію в футері</h2>  <br> <br>
   Ввеіть дані які будуть відображені в футері
  <input name="contactfoot" autocomplete="off" style="color: rgb(119, 119, 119);" value="Зателефонуйте нам: " onfocus="if (this.value == 'Зателефонуйте нам: ') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Зателефонуйте нам: '; this.style.color = '#777';}" type="text">
     <input id="button"  type="button"  value="Змінити" onclick="AjaxFormRequest('messegeResult', 'formContactfoot', 'general.php')"/>
 </form>
   <br>
  <hr class="line"/ >
  </br>
<form action="general.php" method="post" enctype="multipart/form-data">
<h2 align=center style="color: #3CB371; text-decoration:underline;"># Замінити фото в слайді</h2>  <br> <br>
Виберіть номер слайду в першому полі та заванатжте фото:<br>
Завантажуйте файл розміром не більше 3 мбайт формат jpg бажаний розмір 580x360

   <select name="number">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
   </select>
      <input type="file" name="filename"><br>
      <input type="submit" value="Замінити"><br>
      </form>
 <br> <br> <br>							</div>						</article>					</div>					<div id="tab-2" class="tab">						<article>							<div class="text-section">								<h1>Додавання видалення редагування товару</h1>								<p>Тут ви зможете додати змінити та видалити товар</p>

								<?php

								echo "<span style=\"font-size:20px;\">Підгузники</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM product';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";


							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";


                     }
                     echo "</ul>"; ?>

                      <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_pam" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_pam" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_pam" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_pam" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_pam">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_pam" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_pam" value="Додати"><input type="submit" name="edit_pam" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_pampers" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>
											   		<br>

                     <?php

                                echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";

							/////////wash_crockery///////////
							echo "<span style=\"font-size:20px;\">Миюче для посуду</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM wash_crockery';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul>";

							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";



                     }
                     echo "</ul>";

                     ?>
                     <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_crockery" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_crockery" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_crockery" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_crockery" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_crockery">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_crockery" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_crockery" value="Додати"><input type="submit" name="edit_crockery" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_crockery" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>

                     <?php

								echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";

								//////////ties_past///////////

													  echo "<span style=\"font-size:20px;\">Зубна паста</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM ties_past';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul>";


							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";



                     }
                     	echo "</ul>";  ?>

                     	 <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_ties_past" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_ties_past" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_ties_past" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_ties_past" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_ties_past">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_ties_past" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_ties_past" value="Додати"><input type="submit" name="edit_ties_past" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_ties_past" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>

                                     <?

								echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";

                                       ///////////wash_items////////////
													  echo "<span style=\"font-size:20px;\">Миючі засоби</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM wash_items';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul>";

							$i = 0;
							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";


                     }
                     echo "</ul>";
                      ?>

                     <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_wash_items" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_wash_items" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_wash_items" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_wash_items" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_wash_items">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_wash_items" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_wash_items" value="Додати"><input type="submit" name="edit_wash_items" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_wash_items" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>
                                     <?php

								echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";

							////////tampon/////////

													  echo "<span style=\"font-size:20px;\">Прокладки</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM tampon';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";


							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";



                     }
                        echo "</ul>";

                          ?>

                     <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_tampon" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_tampon" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_tampon" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_tampon" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_tampon">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_tampon" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_tampon" value="Додати"><input type="submit" name="edit_tampon" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_tampon" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>
                                     <?php

								echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";
                             //////////servetca//////////
													  echo "<span style=\"font-size:20px;\">Серветки</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM servetca';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul>";

							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";


                     }
                          echo "</ul>";

                            ?>

                     <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_servetca" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_servetca" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_servetca" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_servetca" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_servetca">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_servetca" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_servetca" value="Додати"><input type="submit" name="edit_servetca" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_servetca" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>
                                     <?php

								echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";

                              ///////wash_powder//////////
													  echo "<span style=\"font-size:20px;\">Капсули</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM wash_powder';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul>";

							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";


                     }
                       echo "</ul>";

                           ?>

                     <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_wash_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_wash_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_wash_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_wash_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_wash_powder">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_wash_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_wash_powder" value="Додати"><input type="submit" name="edit_wash_powder" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_wash_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>
                                     <?php

								echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";

                                ///////powder//////
													  echo "<span style=\"font-size:20px;\">Порошок</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM powder';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul>";

							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";


                     }
                          echo "</ul>";

                             ?>

                     <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_powder">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_powder" value="Додати"><input type="submit" name="edit_powder" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_powder" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>
                                     <?php

								echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";
                               ////////head_clean////////

													  echo "<span style=\"font-size:20px;\">Шампунь</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM head_clean';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul>";

							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";


                     }
                          echo "</ul>";

                           ?>

                     <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_head_clean" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_head_clean" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_head_clean" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_head_clean" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_head_clean">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_head_clean" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_head_clean" value="Додати"><input type="submit" name="edit_head_clean" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_head_clean" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>
                                     <?php

								echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";

                             ////////ws/////////
													  echo "<span style=\"font-size:20px;\">Туалетний папір</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM ws';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul>";

							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";


                     }
                           echo "</ul>";

                           ?>

                     <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_ws" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_ws" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_ws" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_ws" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_ws">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_ws" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_ws" value="Додати"><input type="submit" name="edit_ws" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_ws" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>
                                     <?php

								echo " <hr style=\"background: #ADD8E6; width:100%; height:5px\">
													  </br>";

								/////////clean_gas//////////
														  echo "<span style=\"font-size:20px;\">Освіжувачі повітря</span>";
 						$query = 'SELECT id, path, name, price, availability, description FROM clean_gas';
						$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());
                   echo "<ul   class=\"row-fluid\">";

							while ($line = mysqli_fetch_assoc($result)){

					if($line[availability]==0){
						 $color = "red";
						 $ava = "Немає";
					}elseif($line[availability]==1){
						 $color = "green";
						 $ava = "В наявності";
						 }
	            echo "<li> <span style=\"color:black;\">$line[id]</span> $line[name] <div class=\"b\" >$line[price] <span style=\"color:$color ;\">$ava</span><span style=\"color:$color;\"></span> </div>  </li><br>";



                     }
                         echo "</ul>";
                         ?>

                     <form action="general.php" method="post" enctype="multipart/form-data">
                     	При додаванні товару id вказувати немає необхідності
						<br>
						<input name="id_clean_gas" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
						 Виберіть ідентифікаційнай номер
						<br>
						<input name="path_clean_gas" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ім'я_файлу.jpg" onfocus="if (this.value == 'Ім\'я_файлу.jpg') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ім\'я_файлу.jpg'; this.style.color = '#777';}" type="text">
						Введіть назву фото і'мя_файлу.jpg

						<br> <input name="name_clean_gas" autocomplete="off" style="color: rgb(119, 119, 119);" value="name" onfocus="if (this.value == 'name') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'name'; this.style.color = '#777';}" type="text">
						Введіть назву товару
						<br><input name="price_clean_gas" autocomplete="off" style="color: rgb(119, 119, 119);" value="Ціна: *** грн" onfocus="if (this.value == 'Ціна: *** грн') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Ціна: *** грн'; this.style.color = '#777';}" type="text">
                        Введіть ціну
						<br> <select name="ava_clean_gas">
							    <option value="1">В наявності</option>
							    <option value="0">Немає</option>
							    </select>Виберіть наявність товару
						<br><input name="desc_clean_gas" autocomplete="off" style="color: rgb(119, 119, 119);" value="Опис" onfocus="if (this.value == 'Опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Опис'; this.style.color = '#777';}" type="text">
                        Введіть опис товару
						  <br><br><input type="submit" name="add_clean_gas" value="Додати"><input type="submit" name="edit_clean_gas" value="Редагувати"><br>
						      </form> <br>

						      <form action="general.php" method="post" enctype="multipart/form-data">
								Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
				<input name="del_clean_gas" autocomplete="off" style="color: rgb(119, 119, 119);" value="id" onfocus="if (this.value == 'id') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'id'; this.style.color = '#777';}" type="text">
								  <input type="submit" value="Видалити"><br>
                                     </form>

							</div>						</article>					</div>					<div id="tab-3" class="tab">						<article>							<div class="text-section">								<h1>Категорії</h1>								<p>Змінюйте та додаввайте нові категорії</p>
<?php
								 $query = 'SELECT name FROM category';
	 $result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

		while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

   		foreach ($line as $col_value) {
        $namecat[] = $col_value;
    }
    }

    ?>
                                 <form action="general.php" method="post" enctype="multipart/form-data">
<h2 align=center style="color: #3CB371; text-decoration:underline;"># Замінити назву категорії</h2>  <br> <br>
Виберіть категорію яку хочете перейментувати та введіть нове і'мя так короткий опис 2-4 слова:<br>
   <select name="num_cat">
    <option value="1"><?=$namecat[0]?></option>
    <option value="2"><?=$namecat[1]?></option>
    <option value="3"><?=$namecat[2]?></option>
    <option value="4"><?=$namecat[3]?></option>
    <option value="5"><?=$namecat[4]?></option>
    <option value="6"><?=$namecat[5]?></option>
    <option value="7"><?=$namecat[6]?></option>
    <option value="8"><?=$namecat[7]?></option>
    <option value="9"><?=$namecat[8]?></option>
    <option value="10"><?=$namecat[9]?></option>
    <option value="11"><?=$namecat[10]?></option>
   </select>

	<br>
	<input name="name_cat" autocomplete="off" style="color: rgb(119, 119, 119);" value="Введіть: Ім'я" onfocus="if (this.value == 'Введіть: Ім\'я') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Введіть: Ім\'я'; this.style.color = '#777';}" type="text">

	<br>
	<input name="desc_cat" autocomplete="off" style="color: rgb(119, 119, 119);" value="Введіть: короткий опис" onfocus="if (this.value == 'Введіть: короткий опис') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Введіть: короткий опис'; this.style.color = '#777';}" type="text">
 	<br>
      <input type="submit" value="Змінити"><br>
      </form>
							</div>						</article>					</div>					<!--<div id="tab-4" class="tab">						<article>							<div class="text-section">								<h1>Акція</h1>								<p>Якщо у вас появилась Акція ви можете підклбчити це поле</p>							</div>							<ul class="states">								<li class="error">Error : This is an error placed text message.</li>								<li class="warning">Warning: This is a warning placed text message.</li>								<li class="succes">Succes : This is a succes placed text message.</li>							</ul>						</article>					</div>
					-->					<div id="tab-5" class="tab">						<article>							<div class="text-section">								<h1>Профіль</h1>								<p>Змінити пароль та логін</p>

								 <form action="general.php" method="post" enctype="multipart/form-data">
  	Зміна логіна
	<br>
	<input name="name_adm" autocomplete="off" style="color: rgb(119, 119, 119);" value="Введіть: LOGIN" onfocus="if (this.value == 'Введіть: LOGIN') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Введіть: LOGIN'; this.style.color = '#777';}" type="text">
 	<br>
 	Зміна пароля
	<br>
	<input name="pass_adm" autocomplete="off" style="color: rgb(119, 119, 119);" value="Введіть: PASSWORD" onfocus="if (this.value == 'Введіть: PASSWORD') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Введіть: PASSWORD'; this.style.color = '#777';}" type="text">
 	<br> <br>
      <input type="submit" value="Змінити"><br>
      </form>
							</div						</article>					</div>					<div id="tab-6" class="tab">						<article>							<div class="text-section">								<h1>Відгуки</h1>								<p>Відгуки які вам надійшли</p>							</div>
							  <div>

							  <form action="general.php" method="post" enctype="multipart/form-data">
<h2 align=center style="color: #3CB371; text-decoration:underline;"># Опублікувати або видалити відгук</h2>  <br>
Виберіть ідентифікаційнай номер запису який хочете додати на сайт та натисніть додати
       <input name="addcom" autocomplete="off" style="color: rgb(119, 119, 119);" value="1 або 2 і т.д." onfocus="if (this.value == '1 або 2 і т.д.') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = '1 або 2 і т.д.'; this.style.color = '#777';}" type="text">
 		<input type="submit" value="Додати"><br>
      </form>
         <br>
      <form action="general.php" method="post" enctype="multipart/form-data">
Виберіть ідентифікаційнай номер запису який хочете видалити та натисніть видалити
 		<input name="delcom" autocomplete="off" style="color: rgb(119, 119, 119);" value="1 або 2 і т.д." onfocus="if (this.value == '1 або 2 і т.д.') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = '1 або 2 і т.д.'; this.style.color = '#777';}" type="text">
  <input type="submit" value="Видалити"><br>
      </form>
       <br>


							  	  <?php

	      							    $query = 'SELECT name, comment, id FROM feedback ORDER BY id DESC';
										$result = mysqli_query($link, $query) or die('Запит не вдався: ' . mysql_error());

										while ($line = mysqli_fetch_assoc($result)) {
										 	  echo "<span style=\"color:black; margin-left:35px;\">" . $line[id]."</span><br>";
                                              echo "<span style=\"color:blue; margin-left:35px; font-size:14px;\">" . $line[name]."</span><br>";
                                              echo "<span style=\"margin-left:35px;\">" .$line[comment]."</span><br> ";
                                               echo "
												  <hr class=\"line\"/ >
												  </br>";
									        }


										?>



							  </div>						</article>					</div>				</div>			</div>		</div>		<aside id="sidebar">			<strong class="logo"><a href="#">lg</a></strong>			<ul class="tabset buttons">				<li class="active">					<a href="#tab-1" class="ico1"><span>Основна інформація</span><em></em></a>					<span class="tooltip"><span>Основна інформація</span></span>				</li>				<li>					<a href="#tab-2" class="ico2"><span>Товари</span><em></em></a>					<span class="tooltip"><span>Товари</span></span>				</li>				<li>					<a href="#tab-3" class="ico3"><span>Категорії</span><em></em></a>					<span class="tooltip"><span>Категорії</span></span>				</li>				<!--
				<li>					<a href="#tab-4" class="ico4"><span>Акція</span><em></em></a>					<span class="tooltip"><span>Акція</span></span>				</li>
				-->				<li>					<a href="#tab-5" class="ico5"><span>Профіль</span><em></em></a>					<span class="tooltip"><span>Профіль</span></span>				</li>				<li>					<a href="#tab-6" class="ico6">						<span>Відгуки</span><em></em>					</a>					<span class="tooltip"><span>Відгуки</span></span>				</li>			</ul>			<span class="shadow"></span>		</aside>	</div></body></html>