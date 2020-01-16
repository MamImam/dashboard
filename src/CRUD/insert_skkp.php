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

    <h1 id="title" class="text-center">DIVISI UMUM</h1>
    <p id="description" class="description text-center">
      Silahkan Masukkan Data!
    </p>
  </header>
  <body>
    <form class="" action="input_skkp.php" method="post">
      <div class="form-group">
      <label id="name-label" for="name">No. Surat Keputusan Kenaikan Pangkat</label>
      <input 
      type="varchar" 
      name="no_skkp"
      class="form-control" 
      placeholder="nomor skkp"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Tanggal SKKP</label>
      <input 
      type="datetime" 
      name="tanggal_skkp"
      class="form-control" 
      placeholder="yy-dd-mmmm"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Tanggal Mulai Tugas - Lama</label>
      <input 
      type="datetime" 
      name="tmt_lama"
      class="form-control" 
      placeholder="yy-dd-mmmm"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Tanggal Mulai Tugas - Baru</label>
      <input 
      type="datetime" 
      name="tmt_baru"
      class="form-control" 
      placeholder="yy-dd-mmmm"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Masa Kerja Lama</label>
      <input 
      type="text" 
      name="masa_kerja_lama"
      class="form-control" 
      placeholder="masa kerja lama"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Masa Kerja Baru</label>
      <input 
      type="text" 
      name="masa_kerja_baru"
      class="form-control" 
      placeholder="masa kerja baru"
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
