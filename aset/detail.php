<?php 
include 'header.php';
include 'koneksii.php';

$id_kondisi = $_GET['id_kondisi'];

$sql = "SELECT * FROM kondisi where id_kondisi = '$id_kondisi'";
$res = mysqli_query($connect,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="container">
	<div class ="row mt-4">
		<div class="col-md">
			<center>
			<div class="card" style="width: 100%;">
				<div class="card-header" style="width:100%;">
					<h2><i class="fas fa-address-card"></i>Detail ODP</h2>
				</div>
				<div class="card-body">
				<table class="table">
					<tr>
						<td width="100px"><strong>Nama</strong></td>
						<td width="500px"><?= $detail['nama'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Jenis Kelamin</strong></td>
						<td width="500px"><?= $detail['jeniskelamin'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Usia</strong></td>
						<td width="500px"><?= $detail['usia'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Alamat</strong></td>
						<td width="500px"><?= $detail['alamat'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Suhu</strong></td>
						<td width="500px"><?= $detail['suhu'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Pertanyaan 1</strong></td>
						<td width="500px"><?= $detail['jawaban1'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Pertanyaan 2</strong></td>
						<td width="500px"><?= $detail['jawaban2'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Pertanyaan 3</strong></td>
						<td width="500px"><?= $detail['jawaban3'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Pertanyaan 4</strong></td>
						<td width="500px"><?= $detail['jawaban4'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Pertanyaan 5</strong></td>
						<td width="500px"><?= $detail['jawaban5'] ?></td>
					</tr>
					<tr>
						<td width="100px"><strong>Hasil</strong></td>
						<td width="500px"><?= $detail['hasil'] ?></td>
					</tr>

					<center>
					<tr>
						<td></td>
						<td>
    						<a href="hapus.php?id_kondisi=<?= $detail['id_kondisi']; ?>" class="badge badge-danger">Hapus</a>
    						<a href="http://localhost/tugasakhir/aset/dataodp.php" class="badge badge-warning">Kembali</a>	
						</td>
					</tr>
				</center>
				</table>
				
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>