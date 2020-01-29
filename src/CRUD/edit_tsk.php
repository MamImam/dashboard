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
    $con=mysqli_query($koneksi, "SELECT*FROM tb_tsk where id_tsk='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="update_tsk.php" method="post">
		<div class="form-group">
      		<label id="name-label" for="name">ID tersangka</label>
      		<input
        	type="text"
        	name="id_bb"
        	class="form-control"
        	value="<?php echo $data['id_tsk'] ?>"
        	readonly
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Nama tersangka</label>
      		<input
        	type="text"
        	name="nama_tsk"
        	class="form-control"
        	value="<?php echo $data['nama_tsk'] ?>"
        	required
      	/>
		
		</div>
		
		<div class="form-group">
      		<label id="name-label" for="name">Alamat tersangka</label>
      		<input
        	type="text"
        	name="alamat_tsk"
        	class="form-control"
        	value="<?php echo $data['alamat_tsk'] ?>"
        	required
      	/>
		  
		</div>

    <div class="form-group">
          <label id="name-label" for="name">Kelurahan tersangka</label>
          <input
          type="text"
          name="Kelurahan_tsk"
          class="form-control"
          value="<?php echo $data['Kelurahan_tsk'] ?>"
          required
        />
    
    </div>

    <div class="form-group">
          <label id="name-label" for="name">Kecamatan tersangka</label>
          <input
          type="text"
          name="kecamatan_tsk"
          class="form-control"
          value="<?php echo $data['kecamatan_tsk'] ?>"
          required
        />
    
    </div>
    
    <div class="form-group">
          <label id="name-label" for="name">Tempat tanggal lahir</label>
          <input
          type="text"
          name="ttl_tsk"
          class="form-control"
          value="<?php echo $data['ttl_tsk'] ?>"
          required
        />
    
    </div>
    <div class="form-group">
          <label id="name-label" for="name">Jenis kelamin</label>
          <input
          type="text"
          name="jk_tsk"
          class="form-control"
          value="<?php echo $data['jk_tsk'] ?>"
          required
        />
    
    </div>

    <div class="form-group">
          <label id="name-label" for="name">Usia tersangka</label>
          <input
          type="text"
          name="usia_tsk"
          class="form-control"
          value="<?php echo $data['usia_tsk'] ?>"
          required
        />
    
    </div>
    
    <div class="form-group">
          <label id="name-label" for="name">Pekerjaan tersangka</label>
          <input
          type="text"
          name="pekerjaan_tsk"
          class="form-control"
          value="<?php echo $data['pekerjaan_tsk'] ?>"
          required
        />
    
    </div>
		
    <div class="form-group">
          <label id="name-label" for="name">Pendidikan tersangka</label>
          <input
          type="text"
          name="pendidikan_tsk"
          class="form-control"
          value="<?php echo $data['pendidikan_tsk'] ?>"
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