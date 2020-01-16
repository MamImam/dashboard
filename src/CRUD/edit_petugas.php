<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a href="halaman_admin.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php
    require_once 'koneksi.php';
    $d=$_GET['d'];
    $con=mysqli_query($koneksi, "SELECT*FROM tb_petugas where id_petugas='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="proses_editpetugas.php" method="post">
		<table>
			<tr>
				<td>Id Petugas</td>
				<td>
					<input type="text" name="id_petugas" value="<?php echo $data['id_petugas'] ?>">
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username_petugas" value="<?php echo $data['username_petugas'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Petugas</td>
				<td><input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>