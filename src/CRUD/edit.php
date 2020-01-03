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
    $con=mysqli_query($koneksi, "SELECT*FROM tb_lkn where id_lkn='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="update_lkn.php" method="post">
		<table>
      <tr>
				<td>Id</td>
				<td>
					<input type="text" name="id_lkn" value="<?php echo $data['id_lkn'] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Tempat kejadian perkara</td>
				<td>
					<input type="text" name="tkp_lkn" value="<?php echo $data['tkp_lkn'] ?>">
				</td>
			</tr>
			<tr>
				<td>Modus operandi</td>
				<td><input type="text" name="modus_operandi_lkn" value="<?php echo $data['modus_operandi_lkn'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah barang bukti</td>
				<td><input type="text" name="jumlah_bb_lkn" value="<?php echo $data['jumlah_bb_lkn'] ?>"></td>
			</tr>
      <tr>
				<td>Satuan barang bukti</td>
				<td><input type="text" name="satuan_bb_lkn" value="<?php echo $data['satuan_bb_lkn'] ?>"></td>
			</tr>
      <tr>
				<td>Asal barang bukti</td>
				<td><input type="text" name="asal_barang_lkn" value="<?php echo $data['asal_barang_lkn'] ?>"></td>
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
