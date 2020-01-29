<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="../css/styleform.css">
<div class="container">
  <header class="header">
    <title>Badan Narkotika Nasional</title>
    <link rel="icon" type="image/ico" href="./img/Logo_BNN.png" sizes="any" />

    <h1 id="title" class="text-center">DIVISI P2M</h1>
    <p id="description" class="description text-center">
      Silahkan Edit Data!
    </p>
  </header>
<body>

	<center> <a href="../divisi_p2m.php" style="color: white">Lihat Semua Data</a> </center>
	<br/>

	<?php
    require_once 'koneksi.php';
    $d=$_GET['d'];
    $con=mysqli_query($koneksi, "SELECT*FROM tb_kegiatan where id_kegiatan='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="update_kegiatan.php" method="post">
		<div class="form-group">
      		<label id="name-label" for="name">Id</label>
      		<input
        	type="text"
        	name="id_kegiatan"
        	class="form-control"
        	value="<?php echo $data['id_kegiatan'] ?>"
        	readonly
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Kategori kegiatan</label>
      		<input
        	type="text"
        	name="kategori_kegiatan"
        	class="form-control"
        	value="<?php echo $data['kategori_kegiatan'] ?>"
        	required
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Tempat kegiatan</label>
      		<input
        	type="text"
        	name="tempat_kegiatan"
        	class="form-control"
        	value="<?php echo $data['tempat_kegiatan'] ?>"
        	required
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Sasaran kegiatan</label>
      		<input
        	type="text"
        	name="sasaran_kegiatan"
        	class="form-control"
        	value="<?php echo $data['sasaran_kegiatan'] ?>"
        	required
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">jumlah peserta kegiatan</label>
      		<input
        	type="text"
        	name="jml_peserta_kegiatan"
        	class="form-control"
        	value="<?php echo $data['jml_peserta_kegiatan'] ?>"
        	required
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Biaya kegiatan</label>
      		<input
        	type="text"
        	name="biaya_kegiatan"
        	class="form-control"
        	value="<?php echo $data['biaya_kegiatan'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      		<label id="name-label" for="name">Keterangan kegiatan</label>
      		<input
        	type="text"
        	name="Keterangan_kegiatan"
        	class="form-control"
        	value="<?php echo $data['Keterangan_kegiatan'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      		<label id="name-label" for="name">Id petugas</label>
      		<input
        	type="text"
        	name="id_petugas"
        	class="form-control"
        	value="<?php echo $data['id_petugas'] ?>"
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
