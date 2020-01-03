<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a href="halaman_utama.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php
    require_once 'koneksi.php';
    $d=$_GET['d'];
    $con=mysqli_query($koneksi, "SELECT*FROM tb_kegiatan where id_kegiatan='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="update_kegiatan.php" method="post">
		<table>
      <tr>
				<td>Id</td>
				<td>
					<input type="text" name="id_kegiatan" value="<?php echo $data['id_kegiatan'] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Kategori kegiatan</td>
				<td>
					<input type="text" name="kategori_kegiatan" value="<?php echo $data['kategori_kegiatan'] ?>">
				</td>
			</tr>
			<tr>
				<td>Tempat kegiatan</td>
				<td><input type="text" name="tempat_kegiatan" value="<?php echo $data['tempat_kegiatan'] ?>"></td>
			</tr>
			<tr>
				<td>Sasaran kegiatan</td>
				<td><input type="text" name="sasaran_kegiatan" value="<?php echo $data['sasaran_kegiatan'] ?>"></td>
			</tr>
      <tr>
				<td>jumlah peserta kegiatan</td>
				<td><input type="text" name="jml_peserta_kegiatan" value="<?php echo $data['jml_peserta_kegiatan'] ?>"></td>
			</tr>
      <tr>
				<td>Biaya kegiatan</td>
				<td><input type="text" name="biaya_kegiatan" value="<?php echo $data['biaya_kegiatan'] ?>"></td>
			</tr>
		<tr>
				<td>Keterangan kegiatan</td>
				<td><input type="text" name="Keterangan_kegiatan" value="<?php echo $data['Keterangan_kegiatan'] ?>"></td>
			</tr>
			<tr>
				<td>Id petugas</td>
				<td><input type="text" name="id_petugas" value="<?php echo $data['id_petugas'] ?>"></td>
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
