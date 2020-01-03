<?php
require_once "koneksi.php";
$id_kegiatan = $_POST['id_kegiatan'];
$kategori_kegiatan = $_POST['kategori_kegiatan'];
$tempat_kegiatan = $_POST['tempat_kegiatan'];
$sasaran_kegiatan = $_POST['sasaran_kegiatan'];
$jml_peserta_kegiatan = $_POST['jml_peserta_kegiatan'];
$biaya_kegiatan = $_POST['biaya_kegiatan'];
$keterangan_kegiatan = $_POST['keterangan_kegiatan'];
$id_petugas = $_POST['id_petugas'];
 $u=mysqli_query($koneksi, "UPDATE tb_kegiatan SET id_kegiatan='$id_kegiatan',kategori_kegiatan='$kategori_kegiatan', tempat_kegiatan='$tempat_kegiatan', sasaran_kegiatan='$sasaran_kegiatan', biaya_kegiatan='$biaya_kegiatan', keterangan_kegiatan='$keterangan_kegiatan', id_petugas='$id_petugas' where id_kegiatan='$id_lkn'");
 if ($u) {
   echo "<script>alert('terima kasih, data berhasil di edit');window.location='halaman_utama.php'</script>";
 }else {
   echo "<script>alert('maaf, data gagal diedit');window.location='halaman_utama.php'</script>";
 }
?>
