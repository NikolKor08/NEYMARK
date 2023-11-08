<?php
require('db.php');
$to = 'nik.korablev08@mail.ru';
$subject = 'Заявка';
$message = 'hello';
$headers = implode(', ', $_GET);

mail($to, $subject, $message, $headers);

?>
