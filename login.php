
<?php
   require('db.php');

    // Получение данных из формы
    $username = $_GET['email'];
    $password = $_GET['psw'];

    // Проверка наличия переменных
    if ($username && $password) {
        $query = "SELECT  *  FROM USERS WHERE email = '$username' AND psw = '$password'";
        $result = $conn->query($query);
        if($result->num_rows > 0 )
        {  
            header('location: osnova.php');
        } else{
            header('location: index.php');
        }
    } else{
        
    }

?>
