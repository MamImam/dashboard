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
    $con=mysqli_query($koneksi, "SELECT*FROM tb_bb where id_bb='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="edit_bb.php" method="post">
		<table>
			<tr>
				<td>ID Barang Bukti</td>
				<td>
					<input type="text" name="id_bb" value="<?php echo $data['id_bb'] ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Barang Bukti</td>
				<td><input type="text" name="nama_bb" value="<?php echo $data['nama_bb'] ?>"></td>
			</tr>
			<tr>
				<td>Jenis Barang Bukti</td>
				<td><input type="text" name="jenis_bb" value="<?php echo $data['jenis_bb'] ?>"></td>
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