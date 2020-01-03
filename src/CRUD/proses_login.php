
<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT*FROM login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['jabatan']=="SU"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "SU";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard admin
		header("location:../index.php");

	// cek jika user login sebagai kepala bagian
}else if($data['jabatan']=="kepala_bagianBerantas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "kepala_bagianBerantas";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard kepala bagian masing-masing
		header("location:../divisi_pemberantasan.php");

}else if($data['jabatan']=="kepala_bagianp2m"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['jabatan'] = "kepala_bagianp2m";
		$_SESSION['status'] = "login";
    // alihkan ke halaman dashboard kepala bagian masing-masing
    header("location:../divisi_p2m.php");

}else if($data['jabatan']=="kepala_bagianrehab"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['jabatan'] = "kepala_bagianrehab";
		$_SESSION['status'] = "login";
    header("location:../divisi_rehabilitasi.php");

}else if($data['jabatan']=="kepala_bagianumum"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['jabatan'] = "kepala_bagianumum";
		$_SESSION['status'] = "login";
    // alihkan ke halaman dashboard kepala bagian masing-masing
    header("location:../divisi_umum.php");

	// cek jika user login sebagai pegawai
}else if($data['jabatan']=="pegawai_berantas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "pegawai_berantas";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard pagawai
		header("location:../divisi_pemberantasan.php");

}else if($data['jabatan']=="pegawai_umum"){
  	// buat session login dan username
  	$_SESSION['username'] = $username;
  	$_SESSION['jabatan'] = "pegawai_umum";
		$_SESSION['status'] = "login";
  	// alihkan ke halaman dashboard pagawai
  	header("location:../divisi_umum.php");

}else if($data['jabatan']=="pegawai_p2m"){
  	// buat session login dan username
  	$_SESSION['username'] = $username;
  	$_SESSION['jabatan'] = "pegawai_p2m";
		$_SESSION['status'] = "login";
  	// alihkan ke halaman dashboard pagawai
  	header("location:../divisi_p2m.php");

}else if($data['jabatan']=="pegawai_rehab"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['jabatan'] = "pegawai_rehab";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard pagawai
		header("location:../divisi_rehabilitasi.php");

	}else{

		// alihkan ke halaman login kembali
		echo "<script>alert('login gagal');window.location='../login.php'</script>";
	}
}else{
	echo "<script>alert('login gagal');window.location='../login.php'</script>";
}

?>
