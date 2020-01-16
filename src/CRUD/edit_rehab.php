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
    $con=mysqli_query($koneksi, "SELECT*FROM tb_rehab where id_registrasi_klien='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="edit_rehab.php" method="post">
		<table>
			<tr>
				<td>ID Registrasi Klien</td>
				<td><input type="text" name="id_registrasi_klien" value="<?php echo $data['id_registrasi_klien'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Klien</td>
				<td><input type="text" name="nama_klien" value="<?php echo $data['nama_klien'] ?>"></td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td><input type="number" name="ttl" value="<?php echo $data['ttl'] ?>"></td>
			</tr>
			<tr>
				<td>Usia</td>
				<td><input type="number" name="usia" value="<?php echo $data['usia'] ?>"></td>
			</tr>
			<tr><td>No Identitas</td>
				<td><input type="number" name="no_identitas" value="<?php echo $data['no_identitas'] ?>"></td>
			</tr>
			<tr>
				<td>Pendidikan Terakhir</td>
				<td><input type="text" name="pendidikan_terakhir" value="<?php echo $data['pendidikan_terakhir'] ?>"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>
			</tr>
			<tr>
				<td>Tempat Rehab</td>
				<td><input type="text" name="tempat_rehab" value="<?php echo $data['tempat_rehab'] ?>"></td>
			</tr>
			<tr>
				<td>Hasil Dari</td>
				<td><input type="text" name="hasil_dari" value="<?php echo $data['hasil_dari'] ?>"></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><input type="text" name="kecamatan" value="<?php echo $data['kecamatan'] ?>"></td>
			</tr>
			<tr>
				<td>ID Barang Bukti</td>
				<td><input type="number" name="id_bb" value="<?php echo $data['id_bb'] ?>"></td>
			</tr>
			<tr>
				<td>ID Petugas</td>
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