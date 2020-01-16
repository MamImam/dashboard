  <?php
require_once "koneksi.php";
$id_petugas = $_POST['id_petugas'];
$username_petugas = $_POST['username_petugas'];
$nama_petugas = $_POST['nama_petugas'];

  $u=mysqli_query($koneksi, "UPDATE tb_petugas SET id_petugas='$id_petugas', username_petugas='$username_petugas', nama_petugas='$nama_petugas' where id_petugas='$id_petugas'");
  if ($u) {
    echo "<script>alert('terima kasih, data berhasil di edit');window.location='halaman_admin.php'</script>";
  }else {
    echo "<script>alert('maaf, data gagal diedit');window.location='halaman_admin.php'</script>";
  }
 ?>