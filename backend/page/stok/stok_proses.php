<?php error_reporting(0);

include ('../../../config/koneksi.php');
/*include ('../../inc/function.php');*/

$act = $_GET['act'];
$id  = $_GET['id'];

//data dari stok
if(isset($_POST)){

if($act == 'tambah') {

	$idproduk    = $_POST['idproduk'];
	$harga_jual  = $_POST['harga_jual'];
	$jumlah      = $_POST['jumlah'];
	$harga_beli  = $_POST['harga_beli'];

	$sql = "INSERT INTO stok (idproduk, harga_jual, harga_beli,jumlah) VALUES('$idproduk','$harga_jual','$harga_beli','$jumlah')";
	$result = mysqli_query($con,$sql);

	if ($result) {
		echo "<script>alert('Stok berhasil disimpan!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=stok>";
	}else{
		echo "<script>alert('Stok gagal disimpan!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=stok>";
	}


/*}elseif ($act =='ubah') {

	$idproduk    = $_POST['idproduk'];
	$harga_jual  = $_POST['harga_jual'];
	$jumlah      = $_POST['jumlah'];
	$harga_beli  = $_POST['harga_beli'];

	$id  = $_GET['id'];
	$sql = "UPDATE stok SET idproduk='$idproduk', harga_beli='$harga_beli', jumlah='$jumlah', harga_jual='$harga_jual' WHERE idstok='$id'";
	$result = mysqli_query($con,$sql);

	if ($result) {
		echo "<script>alert('Stok berhasil diubah!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=stok>";
	}else{
		echo "<script>alert('Stok gagal diubah!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=stok>";
	}
*/
}elseif ($act=='hapus') {

	$id  = $_GET['id'];
	$sql = "DELETE FROM stok WHERE idstok='$id'";
	$result = mysqli_query($con,$sql);

	if ($result) {
		echo "<script>alert('Stok berhasil dihapus!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=stok>";
	}else{
		echo "<script>alert('Stok gagal dihapus!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=stok>";
	}

}

}/*end of isset*/


//===========CODE DELETE RECORD ================
/*if(isset($_GET['act'])) {
	$id = $_GET['id'];
	$sql = "delete from stok where idstok='$id' ";
	mysql_query($sql) or die(mysql_error());

}
if(isset($_POST['update'])) {
	$persen = $_POST['persen'];
	$persen=$persen/100;
	$sql = "update stok set harga_jual=harga_jual+(harga_jual*$persen) ";
	mysql_query($sql) or die(mysql_error());

}*/

?>
