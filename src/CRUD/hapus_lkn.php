<?php
require_once 'koneksi.php';
$d=$_GET['d'];
$con=mysqli_query($koneksi, "DELETE FROM tb_lkn where id_lkn='$d'");
if ($con) {
  echo "<script>alert('data berhasil dihapus');window.location='halaman_utama.php'</script>";
}else {
  echo "<script>alert('gagal menghapus data');window.location='halaman_utama.php'</script>";
}
 ?>
