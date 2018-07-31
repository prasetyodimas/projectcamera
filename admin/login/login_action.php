<?php session_start();

include '../../config/koneksi.php';

if(isset($_POST)){
/*
$username = $_POST['username'];
$password = md5(trim($_POST['password']));*/

$username =mysqli_real_escape_string($con,$_POST['username']);
$password =mysqli_real_escape_string($con,md5($_POST['password']));

$sql_login =mysqli_query($con,"SELECT * FROM pengelola WHERE username='$username' and password='$password'");
$hasil = mysqli_fetch_array($sql_login);
/*
$sql_login = mysqli_query($con,$sql) or die(mysqli_error());*/

	/*if(mysqli_num_rows($sql_login) == 1) {
		$_SESSION['username'] = $username;
		header("Location:../index.php?mod=produk&pg=produk_view");
	} else {
		header("Location:../index.php?mod=login&pg=login_form&s=1");
	}*/

	if ($hasil['username']==$username AND $hasil['password']==$password) {

	    $_SESSION['id_pengelola'] = $hasil ['idpengelola'];
	    $_SESSION['username']     = $hasil ['username'];
	    $_SESSION['password']     = $hasil ['password'];

	    echo "<script>alert('Selamat datang ".$_SESSION['username']." !!')</script>";
	    echo "<meta http-equiv=refresh content=0;url=".$site."admin/homeadmin.php?page=dashboard>";

	}else{
	    echo "<script>alert('maaf username dan password anda salah ulangi lagi !!')</script>";
	    echo "<meta http-equiv=refresh content=0;url=".$site."backend/login/login_form.php>";

	}

}

?>

