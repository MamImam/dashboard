  <?php
require_once "koneksi.php";

$id_bb = $_POST['id_bb'];
$nama_bb = $_POST['nama_bb'];
$jenis_bb = $_POST['jenis_bb'];

  $u=mysqli_query($koneksi, "UPDATE tb_bb SET id_bb='$id_bb', nama_bb='$nama_bb', jenis_bb='$jenis_bb' where id_bb='$id_bb'");
  if ($u) {
    echo "<script>alert('terima kasih, data berhasil di edit');window.location='tampil_bb.php'</script>";
  }else {
    echo "<script>alert('maaf, data gagal diedit');window.location='edit_bb.php'</script>";
  }
 ?>