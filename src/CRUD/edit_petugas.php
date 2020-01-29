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

	<center> <a href="../halaman_admin.php" style="color: white">Lihat Semua Data</a> </center>
	<br/>

	<?php
    require_once 'koneksi.php';
    $d=$_GET['d'];
    $con=mysqli_query($koneksi, "SELECT*FROM tb_petugas where id_petugas='$d'");
    while ($data =mysqli_fetch_array($con)) {
    ?>
	<form action="proses_editpetugas.php" method="post">
		<div class="form-group">
      		<label id="name-label" for="name">Id Petugas</label>
      		<input
        	type="text"
        	name="id_petugas"
        	class="form-control"
        	value="<?php echo $data['id_petugas'] ?>"
        	readonly
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Username</label>
      		<input
        	type="text"
        	name="username_petugas"
        	class="form-control"
        	value="<?php echo $data['username_petugas'] ?>"
        	required
      	/>
		
		</div>

		<div class="form-group">
      		<label id="name-label" for="name">Nama Petugas</label>
      		<input
        	type="text"
        	name="nama_petugas"
        	class="form-control"
        	value="<?php echo $data['nama_petugas'] ?>"
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