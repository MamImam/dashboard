<?php
  require_once 'koneksi.php';

 if (isset($_POST['tambah'])) {
    $id_kegiatan=$_POST['id_kegiatan'];
  $kategori_kegiatan=$_POST['kategori_kegiatan'];
  $tempat_kegiatan=$_POST['tempat_kegiatan'];
  $sasaran_kegiatan=$_POST['sasaran_kegiatan'];
  $jml_peserta_kegiatan=$_POST['jml_peserta_kegiatan'];
  $biaya_kegiatan=$_POST['biaya_kegiatan'];
  $keterangan_kegiatan=$_POST['keterangan_kegiatan'];
  if ($id_kegiatan==null || $kategori_kegiatan==null || $tempat_kegiatan==null || $sasaran_kegiatan==null || $jml_peserta_kegiatan==null || $biaya_kegiatan==null || $keterangan_kegiatan==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='insert_kegiatan.php'</script>";
    }else {
      $con= mysqli_query($koneksi, "INSERT INTO tb_kegiatan (id_kegiatan, kategori_kegiatan, tempat_kegiatan, sasaran_kegiatan, jml_peserta_kegiatan, biaya_kegiatan, keterangan_kegiatan)
      values ('$id_kegiatan','$kategori_kegiatan','$tempat_kegiatan','$sasaran_kegiatan','$jml_peserta_kegiatan','$biaya_kegiatan','$keterangan_kegiatan')");
      echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../divisi_p2m.php'</script>";
    }
 }
 ?>
