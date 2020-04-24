<?php 
include 'koneksii.php';
 
	$namalengkap= @$_POST['namalengkap'];
    $jeniskelamin= @$_POST['jeniskelamin'];
    $usia= @$_POST['usia'];
    $alamat= @$_POST['alamat'];
    $suhu= @$_POST['suhu'];
    $jawaban1= @$_POST['jawaban1'];
    $jawaban2= @$_POST['jawaban2'];
    $jawaban3= @$_POST['jawaban3'];
    $jawaban4= @$_POST['jawaban4'];
    $jawaban5= @$_POST['jawaban5'];
 
$query = mysqli_query($connect, "SELECT * FROM kondisi WHERE nama, jeniskelamin, usia, alamat, suhu, jawaban1, jawaban2, jawaban3,jawaban4, jawaban5, hasil
        VALUES '$namalengkap','$jeniskelamin','$usia','$alamat', '$suhu','$jawaban1','$jawaban2',
        '$jawaban3','$jawaban4','$jawaban5','$hasildetek'");
$cek = mysqli_num_rows($query);


if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	header("location:http://localhost/tugasakhir/index.php");
}else{
	header("location:login.php");
}
?>
<div class="container">
			<div class="row mt-4">
			<div class = "col-md"></div>
		</div>
	</div>
		
		<div class="card">
  			<div class="card-header">
  				<h2 class="card-title"><i class="fas fa-book"></i> Data Buku</h2>
  			</div>
 	 <div class="card-body">
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Judul</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Stok</th>
      <th scope="col"> Aksi</th>
    </tr>