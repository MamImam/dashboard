<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<body>
	<br>
	<a href="../divisi_pemberantasan.php">Divisi Pemberantasan</a> || <a href="../divisi_p2m.php">Divisi P2m</a> || <a href="../divisi_rehabilitasi.php">Divisi Rehabilitasi</a> || <a href="../divisi_umum.php">Divisi Umum</a>
	
	<br>
	<p></p>
	<div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <td>Id Petugas</td>
                  <td>Username</td>
                  <td>Nama</td>
                  <td colspan="2">Aksi</td>
                </tr>
                <?php
                  require_once 'koneksi.php';
                  $con=mysqli_query($koneksi, "SELECT*FROM tb_petugas");
                  while ($data =mysqli_fetch_array($con)) {
                  ?>
                  <tr>
                    <td><?php echo $data['id_petugas']?></td>
                    <td><?php echo $data['username_petugas']?></td>
                    <td><?php echo $data['nama_petugas']?></td>
       				<td><a href="hapus_petugas.php?d=<?= $data['id_petugas'] ?>">Hapus</a>
                        || <a href="edit_petugas.php?d=<?= $data['id_petugas'] ?>">Edit</a></td>
                  </tr>
                <?php } ?>
              </table>
             </div>
        </div>
      </div>
    </div>
</body>
</html>>