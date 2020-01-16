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
    <form class="" action="inputb_bb.php" method="post">
      <div class="form-group">
      <label id="name-label" for="name">No. Surat Keterangan Kenaikan Gaji Baru</label>
      <input 
      type="number" 
      name="no_skkgb"
      class="form-control" 
      placeholder="nomor skkgb"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Tanggal SKKGB</label>
      <input 
      type="datetime" 
      name="tanggal_skkgb"
      class="form-control" 
      placeholder="yy-dd-mmmm"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Gaji Pokok Baru</label>
      <input 
      type="number" 
      name="gapok_baru"
      class="form-control" 
      placeholder="gaji pokok baru"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Nomor Induk Pegawai</label>
      <input 
      type="number" 
      name="nip"
      class="form-control" 
      placeholder="nomor induk pegawai"
      required 
      />

    </div>

      <div class="form-group

      <div class="form-group">
      <button type="submit" name="tambah" class="submit-button" value="tambah">
        TAMBAH
      </button>    
    </form>
  </body>
</html>
