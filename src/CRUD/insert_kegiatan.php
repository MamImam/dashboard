<?php

session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <link rel="stylesheet" type="text/css" href="../css/styleform.css">
<div class="container">
  <header class="header">
    <title>Badan Narkotika Nasional</title>
    <link rel="icon" type="image/ico" href="./img/Logo_BNN.png" sizes="any" />

    <h1 id="title" class="text-center">DIVISI P2M</h1>
    <p id="description" class="description text-center">
      Silahkan Masukkan Data!
    </p>
  </header>
  <body>
    <form class="" action="input_kegiatan.php" method="post">
      
      <div class="form-group">
      <label id="name-label" for="name">ID Kegiatan</label>
      <input 
      type="text" 
      name="id_kegiatan"
      class="form-control" 
      placeholder="id kegiatan"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Kategori Kegiatan</label>
      <select 
      type="text" 
      name="kategori_kegiatan"
      class="form-control" 
      required>
      <option value="Kegiatan_Advokasi">Kegiatan Advokasi</option>
      <option value="Kegiatan_Pengelolaan_Informasi_&_Edukasi_P4GN">Kegiatan Pengelolaan Informasi & Edukasi P4GN</option>
      <option value="Kegiatan_Pemberdayaan_Masyarakat">Kegiatan Pemberdayaan Masyarakat</option>
      </select>

    </div>
      
      <div class="form-group">
      <label id="name-label" for="name">Tempat Kegiatan</label>
      <input 
      type="text" 
      name="tempat_kegiatan"
      class="form-control" 
      placeholder="tempat"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Sasaran Kegiatan</label>
      <input 
      type="text" 
      name="sasaran_kegiatan"
      class="form-control" 
      placeholder="sasaran"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Jumlah Peserta Kegiatan</label>
      <input 
      type="text" 
      name="jml_peserta_kegiatan"
      class="form-control" 
      placeholder="jumlah"
      required 
      />

    </div>
      
      <div class="form-group">
      <label id="name-label" for="name">Biaya Kegiatan</label>
      <input 
      type="varchar" 
      name="biaya_kegiatan"
      class="form-control" 
      placeholder="biaya"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Keterangan Kegiatan</label>
      <input 
      type="text" 
      name="keterangan_kegiatan"
      class="form-control" 
      placeholder="keterangan"
      required 
      />

    </div>

  
      <div class="form-group">
      <button type="submit" name="tambah" class="submit-button" value="tambah">
        TAMBAH
      </button>    
    </form>
  </body>
</html>
