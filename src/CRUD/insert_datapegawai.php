<?php

session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:index.php");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <link rel="stylesheet" type="text/css" href="../css/styleform.css">
<div class="container">
  <header class="header">
    <title>Badan Narkotika Nasional</title>
    <link rel="icon" type="image/ico" href="./img/Logo_BNN.png" sizes="any" />

    <h1 id="title" class="text-center">DIVISI UMUM</h1>
    <p id="description" class="description text-center">
      Silahkan Masukkan Data!
    </p>
  </header>
  <body>
    <form class="" action="inputb_bb.php" method="post">
      <div class="form-group">
      <label id="name-label" for="name">Nomor Induk Pegawai</label>
      <input 
      type="number" 
      name="nip"
      class="form-control" 
      placeholder="NIP"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Nama</label>
      <input 
      type="text" 
      name="nama"
      class="form-control" 
      placeholder="nama"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Tempat Tanggal Lahir</label>
      <input 
      type="text" 
      name="ttl"
      class="form-control" 
      placeholder="tempat tanggal lahir"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Jenis Kelamin</label>
      <select 
      type="text" 
      name="jenis_kelamin"
      class="form-control" 
      required>
      <option value="narkotika">Pria</option>
      <option value="non_narkotika">Wanita</option>
      </select>

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Alamat</label>
      <input 
      type="text" 
      name="alamat"
      class="form-control" 
      placeholder="alamat"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Agama</label>
      <input 
      type="text" 
      name="agama"
      class="form-control" 
      placeholder="agama"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Divisi Pegawai</label>
      <select 
      type="text" 
      name="divisi_pegawai"
      class="form-control" 
      required>
      <option value="umum">Umum</option>
      <option value="p2m">P2M</option>
      <option value="rehabilitasi">Rehabilitasi</option>
      <option value="pemberantasan">Pemberantasan</option>
      </select>

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Unit Kerja</label>
      <input 
      type="text" 
      name="unit_kerja"
      class="form-control" 
      placeholder="unit kerja"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Masa Kerja Pegawai</label>
      <input 
      type="text" 
      name="masa_kerja_pegawai"
      class="form-control" 
      placeholder="masa kerja pegawai"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Tanggal Pengangkatan</label>
      <input 
      type="text" 
      name="tgl_pengangkatan"
      class="form-control" 
      placeholder="00-00-0000"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Tanggal Mulai Tugas</label>
      <input 
      type="text" 
      name="tmt"
      class="form-control" 
      placeholder="00-00-0000"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Pangkat Golongan</label>
      <input 
      type="text" 
      name="pangkat_golongan"
      class="form-control" 
      placeholder="pangkat golongan"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Jabatan</label>
      <input 
      type="text" 
      name="jabatan"
      class="form-control" 
      placeholder="jabatan"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">Gaji Pokok Pegawai</label>
      <input 
      type="number" 
      name="gaji_pokok_pegawai"
      class="form-control" 
      placeholder="gaji pokok"
      required 
      />

    </div>

      <div class="form-group">
      <label id="name-label" for="name">ID Petugas</label>
      <input 
      type="text" 
      name="id_petugas"
      class="form-control" 
      placeholder="id petugas"
      required 
      />

    </div>

      <div class="form-group">
      <button type="submit" name="tambah" class="submit-button" value="tambah">
        TAMBAH
      </button>    
    </form>
  </body>
</html>
