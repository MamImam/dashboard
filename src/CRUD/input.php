<?php
  require_once 'koneksi.php';

  $id_lkn=$_POST['id_lkn'];
  $tgl_lkn=$_POST['tgl_lkn'];
  $tkp_lkn=$_POST['tkp_lkn'];
  $nama_tsk=$_POST['nama_tsk'];
  $pasal_lkn=$_POST['pasal_lkn'];
  $modus_operandi_lkn=$_POST['modus_operandi_lkn'];
  $jumlah_bb_lkn=$_POST['jumlah_bb_lkn'];
  $satuan_bb_lkn=$_POST['satuan_bb_lkn'];
  $asal_barang_lkn=$_POST['asal_barang_lkn'];
  $id_petugas=$_POST['id_petugas'];
  $id_bb=$_POST['id_bb'];
  $id_tsk=$_POST['id_tsk'];
  if ($id_lkn==null || $tgl_lkn==null || $tkp_lkn==null || $nama_tsk==null || $pasal_lkn==null || $modus_operandi_lkn==null || $jumlah_bb_lkn==null|| $satuan_bb_lkn==null || $asal_barang_lkn==null || $id_petugas==null || $id_bb==null || $id_tsk==null ) {
    echo "<script>alert('silahkan lengkapi data');window.location='insert.php'</script>";
    }else {
      $con= mysqli_query($koneksi, "INSERT INTO tb_lkn (id_lkn, tgl_lkn, tkp_lkn, nama_tsk, pasal_lkn, modus_operandi_lkn, jumlah_bb_lkn, satuan_bb_lkn, asal_barang_lkn, id_petugas, id_bb, id_tsk)
      values ('$id_lkn','$tgl_lkn','$tkp_lkn','$nama_tsk','$pasal_lkn','$modus_operandi_lkn','$jumlah_bb_lkn','$satuan_bb_lkn','$asal_barang_lkn','$id_petugas','$id_bb','$id_tsk')");
      echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../divisi_pemberantasan.php'</script>";
    }
 ?>
