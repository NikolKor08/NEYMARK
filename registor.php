<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['psw'];
 


        $id = rand();

        $sql = "INSERT INTO `users` (id, email, psw) VALUES ('$id', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "Данные успешно добавлены";
            header('location: osnova.php');
        } else {
            echo "Ошибка при добавлении данных: " . mysqli_error($conn);
            header('location: index.php');
        }
}?>