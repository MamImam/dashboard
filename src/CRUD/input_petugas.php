<?php
  require_once 'koneksi.php';

  $id_petugas=$_POST['id_petugas'];
  $username_petugas=$_POST['username_petugas'];
  $nama_petugas=$_POST['nama_petugas'];
  if ($id_petugas==null || $username_petugas==null || $nama_petugas==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='insert_petugas.php'</script>";
    }else {
      $con= mysqli_query($koneksi, "INSERT INTO tb_petugas (id_petugas, username_petugas, nama_petugas)
      values ('$id_petugas','$username_petugas','$nama_petugas')");
      echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../divisi_pemberantasan.php'</script>";
    }
 ?>
