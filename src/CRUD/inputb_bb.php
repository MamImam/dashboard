<?php
  require_once 'koneksi.php';

  $id_bb=$_POST['id_bb'];
  $nama_bb=$_POST['nama_bb'];
  $jenis_bb=$_POST['jenis_bb'];

  if ($id_bb==null || $nama_bb==null || $jenis_bb==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='insertb_bb.php'</script>";
    }else {
      $con= mysqli_query($koneksi, "INSERT INTO tb_bb (id_bb,nama_bb,jenis_bb)
      values ('$id_bb','$nama_bb','$jenis_bb')");
      echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../divisi_pemberantasan.php'</script>";
    }
 ?>
