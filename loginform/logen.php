<?php 
include 'koneksii.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($connect, "SELECT * FROM login WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);
echo $cek;

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	header("location:http://localhost/tugasakhir/index.php");
}else{
	header("location:login.php");
}
?>