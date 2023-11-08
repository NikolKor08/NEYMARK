<?php


    $server ="localhost";
    $login = "root";
    $pass = "";
    $name = "Events";

    $link = mysqli_connect($server,$login,$pass,$name);
    if($link == False)
    {
        echo "ERROR!!!";
    }

    $result = mysqli_query($link,"SELECT * FROM Events52");
    $goods = mysqli_fetch_assoc($result);
	$good = mysqli_fetch_assoc($result);
	$goo = mysqli_fetch_assoc($result);
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE+edge">
	<link rel="stylesheet" type="text/css" href="Stele.css">
	<title>Неймарк мероприятия</title>
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo1">
				<img src="https://sun9-15.userapi.com/impg/6ttwzVxv_eu2qjO1l-S7SRJzncenzjIQH5LO1w/SEyEGvDDUt4.jpg?size=2250x2250&quality=95&sign=6d8a4c4fcea73223cdf09a832d9aecd0&type=album">
			</div>
			<div class="name">
				<h3 style="color:white">
					Неймарк
				</h3>
			</div>
			<div class="login_menu">
				<div class="info_panel">
				    <h5 style="color:white; line-height: 20px">
				        Выполнен вход <br>
				    </h5>
				</div>
                    <a href="index.php"><button type="button" class="exit">
                    	<p style="color: white">
                        Выйти
                        </p>
                    </button></a>

		    </div>
			<div class="contact">
				<h5 style="color:white">
					<p style="line-height: 20px">
					Неймарк: <a href="https://neimark-it.ru/" 
				    style="color:white">https://t.me/neimarkitlektoriy</a><br>

				    Telegram: <a href="https://t.me/neimarkitlektoriy" 
				    style="color:white">https://t.me/neimarkitlektoriy</a><br>

				    ВКонтакте: <a href="https://vk.com/neimark_it" 
				    style="color:white">https://vk.com/neimark_it</a>
				    </p>
			    </h5>
			</div>
		</div>
		    <div class="Heading_1">
			    <p style="color:white">
				    <h1 style="color:white">Мероприятия</h1>
			    </p>
		    </div>
		<div class="Heading_2_karkas">
		    <div class="Heading_3">
			    <p style="color:white">
				    Расписание мероприятий
			    </p>
		    </div>
		        
		</div>
		<div class="content">
			<div class="Criteria">
		    	<div class="Criteria_description">
		    	    <p style="color:white">
					Страницы
		    	    </p>
		        </div>

		    	<div class="Criteria_input">
		    	<form action="Rec.php">
    <input type="submit" value="Настройки предпочтенний" />
</form>
		    		
		        </div>
		    </div>
		    <div class="event_hive">
    
    <div class="honeycomb">
        <div class="honey">
            <div class="honey_left">
                <p>


                    <?php if(isset($_POST['IT'])){echo "Рекомендую !!!";};   echo $goods['title'];echo "<br/>";echo $goods['OPI'];echo "<br/>"; echo $goods['date'];?>

                </p>
            </div>
            <div class="honey_right">
           
            </div>
        </div>
        <a href="pomogite.php">
            <button type="submit" class="comb">
                <p style="color: black">
                    Записаться
                </p>
            </button>
        </a>
    </div>
	<div class="honeycomb">
        <div class="honey">
            <div class="honey_left">
                <p>
                    <?php if(isset($_POST['X'])){echo "Рекомендую !!!";}; echo $goo['title'];echo "<br/>";echo $goo['OPI'];echo "<br/>"; echo $goo['date'];?>
                </p>
            </div>
            <div class="honey_right">
           
            </div>
        </div>
        <a href="pomogite.php">
            <button type="submit" class="comb">
                <p style="color: black">
                    Записаться
                </p>
            </button>
        </a>
    </div>
	<div class="honeycomb">
        <div class="honey">
            <div class="honey_left">
                <p>
                    <?php  if(isset($_POST['IT'])){echo "Рекомендую !!!";};echo $good['title'];echo "<br/>";echo $good['OPI'];echo "<br/>"; echo $good['date'];?>
                </p>
            </div>
            <div class="honey_right">
           
            </div>
        </div>
        <a href="pomogite.php">
            <button type="submit" class="comb">
                <p style="color: black">
                    Записаться
                </p>
            </button>
        </a>
    </div>
				
		    </div>
			
		</div>
	</div>
</body>