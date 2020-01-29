<?php
  require_once 'koneksi.php';

  if (isset($_POST['tambah'])) {
    $nama_klien=$_POST['nama_klien'];
  $ttl=$_POST['ttl'];
  $usia=$_POST['usia'];
  $no_identitas=$_POST['no_identitas'];
  $pendidikan_terakhi=$_POST['pendidikan_terakhi'];
  $pekerjaan=$_POST['pekerjaan'];
  $tempat_rehab=$_POST['tempat_rehab'];
  $hasil_dari=$_POST['hasil_dari'];
  $kecamatan=$_POST['kecamatan'];

  if ($nama_klien==null || $ttl==null || $usia==null || $no_identitas==null || $pendidikan_terakhi==null || $pekerjaan==null || $tempat_rehab==null || $hasil_dari==null || $kecamatan==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='insert_rehab.php'</script>";
  }else {
    $con= mysqli_query($koneksi, "INSERT INTO tb_rehab (nama_klien, ttl, usia, no_identitas, pendidikan_terakhi, pekerjaan, tempat_rehab, hasil_dari, kecamatan)
    values ('$nama_klien', '$ttl', '$usia','$no_identitas','$pendidikan_terakhi','$pekerjaan','$tempat_rehab','$hasil_dari','$kecamatan')");
   echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../divisi_rehabilitasi.php'</script>";
  }
  }
 ?>