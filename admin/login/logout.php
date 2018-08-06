<?php include "../../config/koneksi.php";

  	session_start();
  	// session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['nama_lengkap']);
	unset($_SESSION['password']);
	
  	echo "<center>Logout berhasil anda telah keluar dari sistem !<b>[LOGOUT]<b><br/>";
  	echo "<meta http-equiv='refresh' content='2; url=$site"."admin'>";
?>