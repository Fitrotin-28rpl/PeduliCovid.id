<?php
include 'koneksii.php';

$sql = "SELECT * FROM kondisi ORDER BY nama  ";
$res = mysqli_query($connect, $sql);

$kondisi = array();

while($data = mysqli_fetch_assoc($res)){
	$kondisi[] = $data;
}?>

<?php
include 'header.php';
?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>

<div class="card">
  <div class="card-header">
    <center>
    <h2 class="card-title"><i class="fas fa-hospital-user"></i> Data ODP
    </h2></center>
  </div>
  <div class="card-body">
  	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Usia</th>
      <th scope="col">Alamat</th>
      <th scope="col">Suhu</th>
      <th scope="col">Hasil</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  		$no = 1;
  		foreach ($kondisi as $p ) {
  		?>

  		<tr>
  			<th scope = "row"><?= $no ?></th>
  			<td><?= $p['nama'];?></td>
  			<td><?= $p['jeniskelamin'];?> </td>
  			<td><?= $p['usia'];?> </td>
  			<td><?= $p['alamat'];?> </td>
  			<td><?= $p['suhu'];?></td>
  			<td><?= $p['hasil'];?></td>
  			<td>
  				<a href="detail.php?id_kondisi=<?= $p['id_kondisi'] ?>  " class="badge badge-success">Detail</a>
				<a href="hapus.php?id_kondisi=<?= $p['id_kondisi'] ?>" class="badge badge-danger">Hapus</a>
  			</td>

  		</tr>
  		
  		<?php
  			$no++;
  		}
  		?>
  	

    
  </tbody>
</table>
  </div>
</div>
</table>
  </div>
</div>
		<td>
  			<center><a class="nav-item btn btn-danger" href="http://localhost/tugasakhir/index.php">Beranda</a></center>
  		</td>


<?php
include '../aset/footer.php'
?>