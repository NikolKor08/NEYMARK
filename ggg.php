<?php
$server = "localhost";
$login = "root";
$pass = "";
$name_db = "events";

$link = mysqli_connect($server,$login,$pass,$name_db);

if($link == FALSE)
{
  echo "error";
}


?>