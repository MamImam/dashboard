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

    <!--<h1 id="title" class="text-center"></h1>-->
    <p id="description" class="description text-center">  
      Silahkan Masukkan Nama Petugas!
    </p>
  </header>
  <body>
    <form class="" action="input_petugas.php" method="post">
      
      <div class="form-group">
        <label id="name-label" for="name">ID Petugas</label>
        <input 
        type="int" 
        name="id_petugas"
        class="form-control"
        placeholder="Masukkan ID Petugas"
        required 
        />
      </div>

    <div class="form-group">
      <label id="name-label" for="name">Username Petugas</label>
      <input 
      type="text" 
      name="username_petugas"
      class="form-control"
      placeholder="Masukkan Username Petugas" 
      required
      />
    </div>

    <div class="form-group">
      <label id="name-label" for="name">Nama Petugas</label>
      <input 
      type="text" 
      name="nama_petugas"
      class="form-control" 
      placeholder="Masukkan Nama Petugas"
      required
      />    
    </div>

     <div class="form-group">
      <button type="submit" name="tambah" class="submit-button" class="form-control" value="tambah">
        TAMBAH
      </button>

  </form>
  </body>
</html>