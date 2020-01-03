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
    <title>data Kegiatan</title>
  </head>
  <body>
    <form class="" action="input_kegiatan.php" method="post">
      Id kegiatan : <input type="text" name="id_kegiatan" placeholder="Id kegiatan"><br />
      Kategori kegiatan : <input type="text" name="kategori_kegiatan" placeholder="kategori"><br />
      Tempat kegiatan : <input type="text" name="tempat_kegiatan" placeholder="tempat"><br />
      Sasaran kegiatan : <input type="text" name="sasaran_kegiatan" placeholder="sasaran"><br />
      Jumlah peserta kegiatan : <input type="text" name="jml_peserta_kegiatan" placeholder="jumlah"><br />
      Biaya kegiatan : <input type="text" name="biaya_kegiatan" placeholder="biaya"><br />
      Keterangan kegiatan : <input type="number" name="keterangan_kegiatan" placeholder="Keterangan"><br />
      Id petugas : <input type="text" name="id_petugas" placeholder="Id petugas"><br />
      <input type="submit" name="tambah" value="tambah">
    </form>
  </body>
</html>
