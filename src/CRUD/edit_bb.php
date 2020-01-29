<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="../css/styleform.css">
<div class="container">
  <header class="header">
    <title>Badan Narkotika Nasional</title>
    <link rel="icon" type="image/ico" href="./img/Logo_BNN.png" sizes="any" />

    <h1 id="title" class="text-center">DIVISI BERANTAS</h1>
    <p id="description" class="description text-center">
      Silahkan Edit Data!
    </p>
  </header>
<body>

	<center> <a href="../divisi_pemberantasan.php" style="color: white">Lihat Semua Data</a> </center>
	<br/>

	<?php
    require_once 'koneksi.php';
    $d=$_GET['d'];
    $con=mysqli_query($koneksi, "SELECT*FROM tb_bb where id_bb='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="update_bb.php" method="post">
		<div class="form-group">
      		<label id="name-label" for="name">ID Barang Bukti</label>
      		<input
        	type="text"
        	name="id_bb"
        	class="form-control"
        	value="<?php echo $data['id_bb'] ?>"
        	readonly
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Nama Barang Bukti</label>
      		<input
        	type="text"
        	name="nama_bb"
        	class="form-control"
        	value="<?php echo $data['nama_bb'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      		<label id="name-label" for="name">Jenis Barang Bukti</label>
      		<input
        	type="text"
        	name="jenis_bb"
        	class="form-control"
        	value="<?php echo $data['jenis_bb'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      <button type="submit" name="tambah" class="submit-button" value="tambah">
        TAMBAH
      </button>
      		
	</form>
	<?php } ?>
</body>
</html>