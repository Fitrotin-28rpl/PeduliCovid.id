<?php
$host="localhost";
$db = "loginn";
$user = "root";
$password = "";

$connect = mysqli_connect($host, $user, $password, $db);
if(!$connect){
    echo"koneksi gagal : ".mysqli_connect_error();
}
?>