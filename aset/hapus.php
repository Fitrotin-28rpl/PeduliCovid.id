<?php

include 'koneksii.php';
$id_kondisi = $_GET["id_kondisi"];

$query = "DELETE FROM kondisi WHERE 
		id_kondisi = '$id_kondisi' ";
$kondisi = mysqli_query($connect,$query);

echo "<script>alert('Data berhasil dihapus');
		window.location='../index.php';</script>";

?>


