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

    <h1 id="title" class="text-center">DIVISI BERANTAS</h1>
    <p id="description" class="description text-center">
      Silahkan Masukkan Data!
    </p>
  </header>
  <body>
    <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "Login gagal! username dan password salah!";
      }else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
      }else if($_GET['pesan'] == "belum_login"){
        echo "<script>alert('anda harus login untuk melihat halaman')</script>";
      }
    }
    ?>
<form class="" action="input.php" method="post">
    <div class="form-group">
      <label id="name-label" for="name">ID Laporan Kasus Narkotika</label>
      <input
        type="text"
        name="id_lkn"
        class="form-control"
        placeholder="Masukkan Nomer LKN"
        required
      />

    </div>

    <div class="form-group">
      <label id="email-label" for="email">Tanggal</label>
      <input
        type="date"
        name="tgl_lkn"
        class="form-control"
        placeholder="00-00-0000"
        required
        />

    </div>

    <div class="form-group">
      <label id="email-label" for="email">Tempat Kejadian Perkara</label>
      <input
        type="text" 
        name="tkp_lkn"
        class="form-control" 
        placeholder="Lokasi TKP"
        required
        />
    </div>
      
      <div class="form-group">
      <label id="email-label" for="email">Nama tersangka</label>
      <input
        type="text" 
        name="nama_tsk"
        class="form-control" 
        placeholder="Masukkan Nama Tersangka"
        required
        />
    </div>

      <div class="form-group">
      <label id="email-label" for="email">Pasal</label>
      <input 
        type="text" 
        name="pasal_lkn"
        class="form-control" 
        placeholder="Masukkan Pasal"
        required
        />
    </div>
      
      <div class="form-group">
      <label id="email-label" for="email">Modus Operandi</label>
      <input
        type="text" 
        name="modus_operandi_lkn"
        class="form-control" 
        placeholder="Masukkan Modus Tersangka"
        required
        />
    </div>
      
      <div class="form-group">
      <label id="email-label" for="email">Jumlah Barang Bukti</label>
      <input
        type="number" 
        name="jumlah_bb_lkn"
        class="form-control" 
        placeholder="Masukkan Jumlah Barang Bukti "
        required
        />
    </div>
      
      <div class="form-group">
      <label id="email-label" for="email">Satuan Barang Bukti</label>
      <select 
        name="satuan_bb_lkn"
        class="form-control"
        required>
        <option value="gram">Gram</option>
        <option value="butir">Butir</option>
        </select>
    </div>
      
    <div class="form-group">
      <label id="email-label" for="email">Asal Barang Bukti</label>
      <input
        type="text" 
        name="asal_barang_lkn"
        class="form-control" 
        placeholder="Masukkan Asal Barang Bukti"
        required
        />
    </div>
  
    <div class="form-group">
      <label id="email-label" for="email">ID Petugas</label>
      <input 
        type= "text" 
        name="id_petugas" 
        class="form-control" 
        placeholder="Id petugas"
        required 
        />
    </div>
  
    <div class="form-group">
      <label id="email-label" for="email">ID Barang Bukti</label>
      <input 
        type="text"
        name="id_bb" 
        class="form-control" 
        placeholder="Id barang bukti"
        required
        />
    </div>
  
    <div class="form-group">
      <label id="email-label" for="email">ID Tersangka</label>
      <input 
        type="text" 
        name="id_tsk" 
        class="form-control" 
        placeholder="Id tersangka"
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