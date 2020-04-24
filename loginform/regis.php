<?php
include 'koneksii.php';
$id = $_POST["id"];
$username = $_POST["username"];
$password = $_POST["password"];


$query = "INSERT INTO login(id, username, password)
          VALUES ('$id','$username', '$password')";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if($num>0){
    header("location:login.php");
}else{
    header("location:registrasi.php");
}
?>