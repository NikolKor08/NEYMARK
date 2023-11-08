<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="stylein.css">
	<title>index</title>
</head>
<body>
	<form action="registor.php" method = "post">
  <link rel="stylesheet"href="Reg/style.css" type="text/css"/>
    <div class="container">
      
      <h1 style="color:white">Регистрация</h1>
      <p style="color:white">Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
      <hr>
  
      <label for="email"><b style="color:white">Электронная почта</b></label>
      <input type="text" placeholder="Введите адрес электронной почты" name="email" required>
  
      <label for="psw"><b style="color:white">Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="psw" >

      <hr>

  
      <p style="color:white">Создавая учетную запись, вы соглашаетесь с нашими <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Условия и конфиденциальность</a>.</p>
      <button type="submit" class="registerbtn" style="color:white">Зарегистрировать</button>
    </div>
  
    <div class="container signin">

      <p style="color:white">У вас уже есть учетная запись? <a href="entrance.php" style="color:white">Войти</a>.</p>
    </div>
</body>
</html>