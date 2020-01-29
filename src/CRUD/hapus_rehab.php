<?php
require_once 'koneksi.php';
$d=$_GET['d'];
$con=mysqli_query($koneksi, "DELETE FROM tb_rehab where id_registrasi_klien='$d'");
if ($con) {
  echo "<script>alert('data berhasil dihapus');window.location='../divisi_rehabilitasi.php'</script>";
}else {
  echo "<script>alert('gagal menghapus data');window.location='../divisi_rehabilitasi.php'</script>";
}
 ?>
