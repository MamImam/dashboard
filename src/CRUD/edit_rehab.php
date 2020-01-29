 <!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="../css/styleform.css">
<div class="container">
  
  <header class="header">
    <title>Badan Narkotika Nasional</title>
    <link rel="icon" type="image/ico" href="./img/Logo_BNN.png" sizes="any" />

    <h1 id="title" class="text-center">DIVISI REHABILITASI</h1>
    <p id="description" class="description text-center">
      Silahkan Edit Data!
    </p>
  </header>

<body>

	<center> <a href="../divisi_rehabilitasi.php" style="color: white">Lihat Semua Data</a> </center>
	<br/>

	<?php
    require_once 'koneksi.php';
    $con=mysqli_query($koneksi, "SELECT*FROM tb_rehab where id_registrasi_klien='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>

	<form action="edit_rehab.php" method="post">
		<div class="form-group">
      		<label id="name-label" for="name">ID Registrasi Klien</label>
      		<input
        	type="text"
        	name="id_registrasi_klien"
        	class="form-control"
        	value="<?php echo $data['id_registrasi_klien'] ?>"
        	readonly
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Nama Klien</label>
      		<input
        	type="text"
        	name="nama_klien"
        	class="form-control"
        	value="<?php echo $data['nama_klien'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      		<label id="name-label" for="name">Tempat Tanggal Lahir</label>
      		<input
        	type="text"
        	name="ttl"
        	class="form-control"
        	value="<?php echo $data['ttl'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      		<label id="name-label" for="name">Usia</label>
      		<input
        	type="number"
        	name="usia"
        	class="form-control"
        	value="<?php echo $data['usia'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      		<label id="name-label" for="name">No Identitas</label>
      		<input
        	type="number"
        	name="no_identitas"
        	class="form-control"
        	value="<?php echo $data['no_identitas'] ?>"
        	required
      	/>
		
		</div>	
		
		<div class="form-group">
      		<label id="name-label" for="name">Pendidikan Terakhir</label>
      		<input
        	type="text"
        	name="pendidikan_terakhir"
        	class="form-control"
        	value="<?php echo $data['pendidikan_terakhir'] ?>"
        	required
      	/>
		
		</div>	
		
		<div class="form-group">
      		<label id="name-label" for="name">Pekerjaan</label>
      		<input
        	type="text"
        	name="pekerjaan"
        	class="form-control"
        	value="<?php echo $data['pekerjaan'] ?>"
        	required
      	/>
		
		</div>	

		<div class="form-group">
      		<label id="name-label" for="name">Tempat Rehab</label>
      		<input
        	type="text"
        	name="tempat_rehab"
        	class="form-control"
        	value="<?php echo $data['tempat_rehab'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      		<label id="name-label" for="name">Hasil Dari</label>
      		<input
        	type="text"
        	name="hasil_dari"
        	class="form-control"
        	value="<?php echo $data['hasil_dari'] ?>"
        	required
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Kecamatan</label>
      		<input
        	type="text"
        	name="kecamatan"
        	class="form-control"
        	value="<?php echo $data['kecamatan'] ?>"
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