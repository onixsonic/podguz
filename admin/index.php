<html>

<head>
  <title></title>

<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 	 <script src="http://malsup.github.com/jquery.form.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
</head>
<body>
<table width="600px" cellpadding="0" cellspacing="0" border="0" align="center">
    <tr>
        <td valign="top" align="center">
        <form action="login.php" method="post" name="form">
            <br>
            <input style="width:150px;" name="loginDB" autocomplete="off" style="color: rgb(119, 119, 119);" value="Логін"  onfocus="if (this.value == 'Логін') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Логін'; this.style.color = '#777';}" type="text">

            <br>
            <input style="width:150px;" name="passDB"  autocomplete="off" style="color: rgb(119, 119, 119);" value="Пароль" onfocus="if (this.value == 'Пароль') {this.value = ''; this.style.color = '#000';}" onblur="if (this.value == '') {this.value = 'Пароль'; this.style.color = '#777';}" type="password">
            <br><br><input type="submit" value="Авторизація">
        </form>
        </td>
    </tr>
</table>

</body>

</html>