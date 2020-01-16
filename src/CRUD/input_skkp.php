<?php
  require_once 'koneksi.php';

  $no_skkp=$_POST['no_skkp'];
  $tanggal_skkp=$_POST['tanggal_skkp'];
  $tmt_lama=$_POST['tmt_lama'];
  $tmt_baru=$_POST['tmt_baru'];
  $masa_kerja_lama=$_POST['masa_kerja_lama'];
  $masa_kerja_baru=$_POST['masa_kerja_baru'];
  $nip=$_POST['nip'];
  if ($no_skkp==null || $tanggal_skkp==null || $tmt_lama==null || $tmt_baru==null || $masa_kerja_lama==null || $masa_kerja_baru==null|| $nip==null ) {
    echo "<script>alert('silahkan lengkapi data');window.location='insert_skkp.php'</script>";
    }else {
      $con= mysqli_query($koneksi, "INSERT INTO tb_skkp (no_skkp, tanggal_skkp, tmt_lama, tmt_baru, masa_kerja_lama, masa_kerja_baru, nip)
      values ('$no_skkp','$tanggal_skkp','$tmt_lama','$tmt_baru','$masa_kerja_lama','$masa_kerja_baru','$nip')");
      echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../divisi_umum.php'</script>";
    }
 ?>
