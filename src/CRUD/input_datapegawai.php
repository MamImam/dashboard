<?php
  require_once 'koneksi.php';

  $nip=$_POST['nip'];
  $nama_pegawai=$_POST['nama_pegawai'];
  $ttl=$_POST['ttl'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  $alamat=$_POST['alamat'];
  $agama=$_POST['agama'];
  $divisi_pegawai=$_POST['divisi_pegawai'];
  $unit_kerja=$_POST['unit_kerja'];
  $masa_kerja_pegawai=$_POST['masa_kerja_pegawai'];
  $tgl_pengangkatan=$_POST['tgl_pengangkatan'];
  $tmt=$_POST['tmt'];
  $pangkat_golongan=$_POST['pangkat_golongan'];
  $jabatan=$_POST['jabatan'];
  $gaji_pokok_pegawai=$_POST['gaji_pokok_pegawai'];
  $id_petugas=$_POST['id_petugas'];
  if ($nip==null || $nama_pegawai==null || $nama_pegawai==null || $ttl==null || $jenis_kelamin==null || $alamat==null || $agama==null  || $divisi_pegawai==null || $unit_kerja==null || $masa_kerja_pegawai==null || $tgl_pengangkatan==null || $tmt==null || $pangkat_golongan==null || $jabatan==null || $gaji_pokok_pegawai==null 
    || $id_petugas==null) {
    echo "<script>alert('silahkan lengkapi data');window.location='../insert_datapegawai.php'</script>";
    }else {
      $con= mysqli_query($koneksi, "INSERT INTO tb_data_pegawai (nip, nama_pegawai, ttl, jenis_kelamin, alamat, agama, divisi_pegawai, unit_kerja', masa_kerja_pegawai, tgl_pengangkatan, tmt, pangkat_golongan, jabatan, gaji_pokok_pegawai, id_petugas)
      values ('$nip','$nama_pegawai','$ttl','$jenis_kelamin','$alamat','$agama','$divisi_pegawai','$unit_kerja','
      $masa_kerja_pegawai','$tgl_pengangkatan','$tmt','$pangkat_golongan','$jabatan','$gaji_pokok_pegawai','
      $id_petugas')");
      echo "<script>alert('terima kasih, data berhasil di masukkan');window.location='../divisi_umum.php'</script>";
    }
 ?>
