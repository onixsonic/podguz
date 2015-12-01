<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'podguznikpamp@gmail.com';
$subject = 'Podguzniko замовлення';
$message = 'Мене звати: '.$name.' Ось мій Email: '.$email.' Та мій номер телефону: '.$message;
$headers = 'Від: podguzniko.com.ua' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
mail($to, $subject, $message, "$headers Content-type:text/plain");
echo "<span id=\"yes\">tak</span>";
}else{
echo "<span id=\"no\">no</span></br> ";
}

?>
<script language="JavaScript">

		var requ = document.getElementById("yes");

		if(requ.id = "yes"){
			var sentmsg = confirm(" Дякуємо! \n Ми отримали замовлення \n Чекайте наш менеджер вам зателефонує! \n Ви хочете повернутись до сайту?");
		}

		if(sentmsg){
			  window.location.href = "http://podguzniko.com.ua/";
		}
		else{
			 window.location.href = "https://www.google.com/";
		}
	       var requq = document.getElementById("no");
	 	if(requq.id = "no"){
			alert("Ви не коректно ввели Email");
			window.location.href = "http://podguzniko.com.ua/";
		}


</script>
