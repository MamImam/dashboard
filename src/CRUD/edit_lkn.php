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
    $con=mysqli_query($koneksi, "SELECT*FROM tb_lkn where id_lkn='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="update_lkn.php" method="post">
		<div class="form-group">
      		<label id="name-label" for="name">ID Laporan Kasus Narkotika</label>
      		<input
        	type="text"
        	name="id_lkn"
        	class="form-control"
        	value="<?php echo $data['id_lkn'] ?>"
        	readonly
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Tempat Kejadian</label>
      		<input
        	type="text"
        	name="tkp_lkn"
        	class="form-control"
        	value="<?php echo $data['tkp_lkn'] ?>"
        	required
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Modus Operandi</label>
      		<input
        	type="text"
        	name="modus_operandi_lkn"
        	class="form-control"
        	value="<?php echo $data['modus_operandi_lkn'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      		<label id="name-label" for="name">Jumlah Barang Bukti</label>
      		<input
        	type="text"
        	name="jumlah_bb_lkn"
        	class="form-control"
        	value="<?php echo $data['jumlah_bb_lkn'] ?>"
        	required
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Satuan Barang Bukti</label>
      		<input
        	type="text"
        	name="satuan_bb_lkn"
        	class="form-control"
        	value="<?php echo $data['satuan_bb_lkn'] ?>"
        	required
      	/>
		
		</div>		

		<div class="form-group">
      		<label id="name-label" for="name">Asal Barang</label>
      		<input
        	type="text"
        	name="asal_barang_lkn"
        	class="form-control"
        	value="<?php echo $data['asal_barang_lkn'] ?>"
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
