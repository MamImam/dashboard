<?php
require_once "koneksi.php";

if (isset($_POST['tambah'])) {
	$id_tsk = $_POST['id_tsk'];
$nama_tsk = $_POST['nama_tsk'];
$alamat_tsk = $_POST['alamat_tsk'];
$kelurahan_tsk = $_POST['kelurahan_tsk'];
$kecamatan_tsk = $_POST['kecamatan_tsk'];
$ttl_tsk = $_POST['ttl_tsk'];
$jk_tsk = $_POST['jk_tsk'];
$usia_tsk = $_POST['usia_tsk'];
$pekerjaan_tsk = $_POST['pekerjaan_tsk'];
$pendidikan_tsk = $_POST['pendidikan_tsk'];
 $u=mysqli_query($koneksi, "UPDATE tb_tsk SET id_tsk='$id_tsk',nama_tsk='$nama_tsk', alamat_tsk='$alamat_tsk', kelurahan_tsk='$kelurahan_tsk', kecamatan_tsk='$kecamatan_tsk', ttl_tsk='$ttl_tsk', jk_tsk='$jk_tsk', usia_tsk='$usia_tsk', pekerjaan_tsk='$pekerjaan_tsk', pendidikan_tsk='$pendidikan_tsk' where id_tsk='$id_tsk'");
 if ($u) {
   echo "<script>alert('terima kasih, data berhasil di edit');window.location='tampil_tsk.php'</script>";
 }else {
   echo "<script>alert('maaf, data gagal diedit');window.location='tampil_tsk.php'</script>";
 }
}
?>
