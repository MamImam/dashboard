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
    <form class="" action="input_tsk.php" method="post">
      <div class="form-group">
      <label id="name-label" for="name">ID Laporan Tersangka</label>
      <input 
      type="text" 
      name="id_tsk"
      class="form-control" 
      placeholder="Id tsk"
      required 
      />

    </div>

    <div class="form-group">
      <label id="name-label" for="name">Nama Tersangka</label>
      <input 
      type="text" 
      name="alamat_tsk"
      class="form-control" 
      placeholder="Masukkan Nama Tersangka"
      required 
      />

    </div>

    <div class="form-group">
      <label id="name-label" for="name">Alamat Tersangka</label>
      <input 
      type="text" 
      name="alamat_tsk"
      class="form-control" 
      placeholder="alamat"
      required 
      />

    </div>

    <div class="form-group">
      <label id="name-label" for="name">Kelurahan Tersangka</label>
      <input 
      type="text" 
      name="kelurahan_tsk"
      class="form-control" 
      placeholder="kelurahan"
      required 
      />
        
    </div>

    <div class="form-group">
      <label id="name-label" for="name">Kecamatan Tersangka</label>
      <input 
      type="text" 
      name="kecamatan_tsk" 
      class="form-control" 
      placeholder="kecamatan"
      required 
      />

    </div>

    <div class="form-group">
      <label id="name-label" for="name">Tempat Tanggal Lahir</label>
      <input 
      type="datetime" 
      name="ttl_tsk"
      class="form-control" 
      placeholder="yy-dd-mmmm"
      required 
      />

    </div>

    <div class="form-group">
      <label id="name-label" for="name">Jenis Kelamin</label>
      <select 
      type="text"
      name="jk_tsk"
      class="form-control"
      required>
      <option value="pria">Pria</option>
      <option value="wanita">Wanita</option>
      </select>

    </div>

    <div class="form-group">
      <label id="name-label" for="name">Usia Tersangka</label>
      <input 
      type="number" 
      name="usia_tsk"
      class="form-control" 
      placeholder="usia"><br 
      required
      />

    </div>  
    
    <div class="form-group">
      <label id="name-label" for="name">Pekerjaan Tersangka</label>
      <input 
      type="text" 
      name="pekerjaan_tsk" 
      class="form-control" 
      placeholder="pekerjaan"
      required 
      />

    </div>

    <div class="form-group">
      <label id="name-label" for="name">Pendidikan Tersangka</label>
      <input 
      type="text" 
      name="pendidikan_tsk" 
      class="form-control" 
      placeholder="pendidikan"
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
