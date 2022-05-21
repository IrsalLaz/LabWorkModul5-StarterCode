<!DOCTYPE html>
<html>
<head>
	<title>Cari Mahasiswa-2062</title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<?php include("config.php");?>
</head>
<body>
	<div id="container">
		<ul class="nav nav-pills nav-stacked sidebar">
			 <li role="presentation"><a href="index.php">Tambah Mahasiswa</a></li>
			 <li role="presentation"><a href="hapusmhs.php">Hapus Mahasiswa</a></li>
			 <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
			 <li role="presentation" class="active"><a href="cari.php">Cari</a></li>
			 <li role="presentation"><a href="update.php">Update</a></li>
		</ul>
		<div id="content">
			<form class="form-horizontal" method="post">
				<div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">NIM</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="NIM" name="nim">
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" name="cari">Cari Mahasiswa</button>
					</div>
  				</div>
			</form>

			<?php
			//kode php disini
			if (isset($_POST['cari'])) {
				$nim=$_POST['nim'];
				$query="select * from mahasiswa where NIM='$nim'";
				$hasil=mysqli_query($conn, $query);
				?>
					<table class="table">
						<tr>
							<td>NIM</td>
							<td>Nama</td>
						</tr>
					</table>
				<?php
				if ($hasil=true) {
					foreach ($hasil as $value) {
						$nim=$value['NIM'];
						$nama=$value['Nama_mhs']
						?>
							<tr>
								<td><?php echo "$nim";?></td>
								<td><?php echo "$nama";?></td>
							</tr>
						<?php
					}
				}else {
					echo"tidak ada data: ";
				}
				?>
				</table>
				<?php
			}
			?>
							
		</div>
	</div>
</body>
</html>