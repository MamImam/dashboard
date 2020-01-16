<?php
  require_once 'koneksi.php';

  $id_registrasi_klien=$_POST['id_registrasi_klien'];
  $nama_klien=$_POST['nama_klien'];
  $ttl=$_POST['ttl'];
  $usia=$_POST['usia'];
  $no_identitas=$_POST['no_identitas'];
  $pendidikan_terakhi=$_POST['pendidikan_terakhi'];
  $pekerjaan=$_POST['pekerjaan'];
  $tempat_rehab=$_POST['tempat_rehab'];
  $hasil_dari=$_POST['hasil_dari'];
  $kecamatan=$_POST['kecamatan'];
  $id_bb=$_POST['id_bb'];
  $id_petugas=$_POST['id_petugas'];
  if ($id_registrasi_klien==null || $nama_klien==null || $ttl==null || $usia==null || $no_identitas==null || $pendidikan_terakhi==null || $pekerjaan==null || $tempat_rehab==null || $hasil_dari==null || $kecamatan==null || $id_bb==null || $id_petugas==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='insert_rehab.php'</script>";
    }else {
      $con= mysqli_query($koneksi, "INSERT INTO tb_rehab (id_registrasi_klien, nama_klien, ttl, usia, no_identitas, pendidikan_terakhi, pekerjaan, tempat_rehab, hasil_dari, kecamatan, id_bb, id_petugas)
      values ('$id_registrasi_klien','$nama_klien','$ttl','$usia','$no_identitas','$no_identitas','$pendidikan_terakhi','$pekerjaan','$tempat_rehab','$hasil_dari','$kecamatan','$id_bb','$id_petugas')");
      echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../divisi_rehabilitasi.php'</script>";
    }
 ?>