<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE+edge">
	<link rel="stylesheet" type="text/css" href="ybeite.css">
	<title>Анкета</title>
</head>
<body>
	<div class="do_sdachi_12_chasov">
		<h1 style="color:white">Анкета записи на мероприятие</h1>
	</div>
	<form class="container" action="Knock.php" method="post">
        <input class="input_text" type="text" name="name" placeholder="Фамилия Имя Отчество"><br>
        <input class="input_text" type="email" name="email" placeholder="Email"><br>
        <textarea class="input_text" name="message" placeholder="Название мероприятия"></textarea><br>
        <input class="ne_nazhimaite_pzh" type="submit" value="Отправить">
    </form>
</body>
</html>