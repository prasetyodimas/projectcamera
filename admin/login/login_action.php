<?php session_start();
include '../../config/koneksi.php';

if(isset($_POST)){
$username =mysqli_real_escape_string($con,$_POST['username']);
$password =mysqli_real_escape_string($con,md5($_POST['password']));

$sql_login =mysqli_query($con,"SELECT * FROM pengelola WHERE username='$username' and password='$password'");
$hasil = mysqli_fetch_array($sql_login);

	if ($hasil['username']==$username AND $hasil['password']==$password) {

	    $_SESSION['id_pengelola'] = $hasil ['idpengelola'];
	    $_SESSION['username']     = $hasil ['username'];
	    $_SESSION['password']     = $hasil ['password'];

	    echo "<script>alert('Selamat datang ".$_SESSION['username']." !!')</script>";
	    echo "<meta http-equiv=refresh content=0;url=".$site."admin/homeadmin.php?page=dashboard>";

	}else{
	    echo "<script>alert('maaf username dan password anda salah ulangi lagi !!')</script>";
	    echo "<meta http-equiv=refresh content=0;url=".$site."admin/login/login_form.php>";

	}

}

?>

