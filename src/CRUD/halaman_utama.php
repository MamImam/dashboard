<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    session_start();

    // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
    if($_SESSION['jabatan']=""){
      header("location:../login.php?pesan=gagal");
    }

    // menampilkan pesan selamat datang
    echo "Hai, selamat datang ". $_SESSION['username'];

     ?>
  </body>
</html>
