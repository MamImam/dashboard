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

    <h1 id="title" class="text-center">DIVISI REHABILITASI</h1>
    <p id="description" class="description text-center">
      Silahkan Masukkan Data!
    </p>
  </header>
  <body>
    <form class="" action="input_rehab.php" method="post">

      <div class="form-group">
      <label id="name-label" for="name">Nama Klien</label>
      <input 
      type="text" 
      name="nama_klien"
      class="form-control" 
      placeholder="nama"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Tempat Tanggal Lahir</label>
      <input 
      type="text" 
      name="ttl"
      class="form-control" 
      placeholder="tempat tanggal lahir"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Usia</label>
      <input 
      type="text" 
      name="usia"
      class="form-control" 
      placeholder="Masukkan Usia Klien"
      required
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">No Identitas</label>
      <input 
      type="text" 
      name="no_identitas"
      class="form-control" 
      placeholder="Masukkan Nomer Identitas SIM/KTP"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Pendidikan Terakhir</label>
      <select
      type="text" 
      name="pendidikan_terakhi"
      class="form-control" 
      placeholder="pendidikan terakhir"
      required>
      <option value="SD">SD</option>
      <option value="SMP">SMP</option>
      <option value="SMA">SMA</option>
      <option value="SMK">SMK</option>
      <option value="Putus Sekolah">Putus Sekolah</option>
      </select>
    
    </div>

      <div class="form-group">
      <label id="name-label" for="name">Pekerjaan Klien</label>
      <input 
      type="text" 
      name="pekerjaan"
      class="form-control" 
      placeholder="Pekerjaan Klien"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Tempat_Rehabilitasi</label>
      <input 
      type="text" 
      name="tempat_rehab"
      class="form-control" 
      placeholder="Masukkan Tempat Rehab"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Hasil Dari</label>
      <input 
      type="text" 
      name="hasil_dari"
      class="form-control" 
      placeholder="Hasil Dari"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Kecamatan</label>
      <input 
      type="text" 
      name="kecamatan"
      class="form-control" 
      placeholder="Wilayah Kecamatan"
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
