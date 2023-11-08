<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "USERS";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn)
{
    die("conection Filed".mysqli_connect_error());
}else{


}
?>