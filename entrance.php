<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styleent.css">
	<title>entrance</title>
</head>
<body>
	<h2 style="color: white; text-align:center">Вход</h2>
<form action="/action_page.php">
    <div class="container">
        <label for="email"><b style="color: white">Имя пользователя</b></label>
        <input type="text" placeholder="Введите имя пользователя" name="email" required>
        <label for="psw"><b style="color: white">Пароль</b></label>
        <input type="password" placeholder="Введите пароль" name="psw" required>
       
        <button type="submit" formmethod="get" formaction="login.php">Отправить</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"><b style="color:white">Запомни меня</b>
        </label>
    </div>

  <div class="container">
   <a href = "index.php"> <button type="button"  class="cancelbtn" style="border-radius: 10px">Отменить</button></a>
  </div>
</form>
</body>
</html>

