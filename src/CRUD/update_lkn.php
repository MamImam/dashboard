<?php
require_once "koneksi.php";
$id_lkn = $_POST['id_lkn'];
$tkp_lkn = $_POST['tkp_lkn'];
$modus_operandi_lkn = $_POST['modus_operandi_lkn'];
$jumlah_bb_lkn = $_POST['jumlah_bb_lkn'];
$satuan_bb_lkn = $_POST['satuan_bb_lkn'];
$asal_barang_lkn = $_POST['asal_barang_lkn'];
 $u=mysqli_query($koneksi, "UPDATE tb_lkn SET id_lkn='$id_lkn',tkp_lkn='$tkp_lkn', modus_operandi_lkn='$modus_operandi_lkn', jumlah_bb_lkn='$jumlah_bb_lkn', satuan_bb_lkn='$satuan_bb_lkn', asal_barang_lkn='$asal_barang_lkn' where id_lkn='$id_lkn'");
 if ($u) {
   echo "<script>alert('terima kasih, data berhasil di edit');window.location='halaman_utama.php'</script>";
 }else {
   echo "<script>alert('maaf, data gagal diedit');window.location='halaman_utama.php'</script>";
 }
?>
