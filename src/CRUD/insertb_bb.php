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

    <h1 id="title" class="text-center">DIVISI BERANTAS</h1>
    <p id="description" class="description text-center">
      Silahkan Masukkan Data!
    </p>
  </header>
  <body>
    <form class="" action="inputb_bb.php" method="post">
      <div class="form-group">
      <label id="name-label" for="name">ID Barang Bukti</label>
      <input 
      type="text" 
      name="id_bb"
      class="form-control" 
      placeholder="Id lkn"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Nama Barang Bukti</label>
      <input 
      type="text" 
      name="nama_bb"
      class="form-control" 
      placeholder="nama"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Jenis Barang Bukti</label>
      <select 
      type="text" 
      name="jenis_bb"
      class="form-control" 
      required>
      <option value="narkotika">Narkotika</option>
      <option value="non_narkotika">Non Narkotika</option>
      </select>

    </div>
      <div class="form-group">
      <button type="submit" name="tambah" class="submit-button" value="tambah">
        TAMBAH
      </button>    
    </form>
  </body>
</html>
