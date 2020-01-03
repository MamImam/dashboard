<?php

session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:index.php");
}

// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>data Petugas</title>
  </head>
  <body>
    <form class="" action="input_petugas.php" method="post">
      Id petugas : <input type="text" name="id_petugas" placeholder="Id petugas"><br />
      Username petugas : <input type="text" name="username_petugas" placeholder="username"><br />
      Nama petugas : <input type="text" name="nama_petugas" placeholder="nama"><br />
      <input type="submit" name="tambah" value="tambah">
    </form>
  </body>
</html>
