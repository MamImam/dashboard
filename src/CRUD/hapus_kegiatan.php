<?php
require_once 'koneksi.php';
$d=$_GET['d'];
$con=mysqli_query($koneksi, "DELETE FROM tb_kegiatan where id_kegiatan='$d'");
if ($con) {
  echo "<script>alert('data berhasil dihapus');window.location='divisi_p2m.php'</script>";
}else {
  echo "<script>alert('gagal menghapus data');window.location='divisi_p2m.php'</script>";
}
 ?>
