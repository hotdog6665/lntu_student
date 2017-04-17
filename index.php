
<html> 
 <head>  
  <title>Test page</title> 
 </head> 
 <body> 
	 <h1>Hello, today is <?= date('l \t\h\e jS');  ?></h1>
	 <h2>My name is <?= "Andrew"; ?></h2>
	 <form name="f1" method="get" action="enter_data.php">
		<input name="link" type="hidden" value="index.php" />
		Логин: <br />
		<input name="login" type="text" size="25" maxlength="30" value="Вася" /> <br />
		Пароль: <br />
		<input name="pd" type="password" size="25" maxlength="30" value="" /> <br />
		<input name="remember" type="checkbox" value="yes" /> Запомнить <br />
		<input type="submit" name="enter" value="Вход" />
	</form>
 </body> 
</html> 