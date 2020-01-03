<?php
  require_once 'koneksi.php';

  $id_tsk=$_POST['id_tsk'];
  $alamat_tsk=$_POST['alamat_tsk'];
  $kelurahan_tsk=$_POST['kelurahan_tsk'];
  $kecamatan_tsk=$_POST['kecamatan_tsk'];
  $ttl_tsk=$_POST['ttl_tsk'];
  $jk_tsk=$_POST['jk_tsk'];
  $usia_tsk=$_POST['usia_tsk'];
  $pekerjaan_tsk=$_POST['pekerjaan_tsk'];
  $pendidikan_tsk=$_POST['pendidikan_tsk'];
  if ($id_tsk==null || $alamat_tsk==null || $kelurahan_tsk==null || $kecamatan_tsk==null || $ttl_tsk==null || $jk_tsk==null
  || $usia_tsk==null || $pekerjaan_tsk==null || $pendidikan_tsk==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='insert_tsk.php'</script>";
    }else {
      $con= mysqli_query($koneksi, "INSERT INTO tb_tsk (id_tsk, alamat_tsk, kelurahan_tsk, kecamatan_tsk, ttl_tsk, jk_tsk, usia_tsk, pekerjaan_tsk, pendidikan_tsk)
      values ('$id_tsk','$alamat_tsk','$kelurahan_tsk','$kecamatan_tsk','$ttl_tsk','$jk_tsk','$usia_tsk','$pekerjaan_tsk','$pendidikan_tsk')");
      echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../divisi_pemberantasan.php'</script>";
    }
 ?>
