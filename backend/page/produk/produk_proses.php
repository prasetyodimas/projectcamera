<?php error_reporting(0);
 
include ('../../../config/koneksi.php');
/*include('../../inc/function.php');*/

//data dari produk
if(isset($_POST)){

$act =$_GET['act'];
$id  =$_GET['id'];

$nama_produk = $_POST['nama_produk'];
$idkategori  = $_POST['idkategori'];
$deskripsi   = $_POST['deskripsi'];


$lokasi_file = $_FILES['foto']['tmp_name'];
$foto_file   = $_FILES['foto']['name'];
$tipe_file   = $_FILES['foto']['type'];
$ukuran_file = $_FILES['foto']['size'];
$direktori = "../../../upload/produk/$foto_file";

$sql = null;
$MAX_FILE_SIZE = 1000000;//100kb

if($ukuran_file > $MAX_FILE_SIZE) {
	echo "<script>alert('Ukuran File melibihi ukuran yang ditentukan !');</script>";
    echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=produk>";
	exit();
}

if($ukuran_file > 0) {
	move_uploaded_file($lokasi_file, $direktori);
}

if($act == 'tambah') {
	$sql = "INSERT INTO produk(nama_produk,idkategori,foto, deskripsi) VALUES ('$nama_produk', '$idkategori', '$foto_file', '$deskripsi')";
	$result = mysqli_query($con,$sql);

	if ($result) {
		echo "<script>alert('Produk berhasil disimpan!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=produk>";
	}else{
		echo "<script>alert('Produk gagal disimpan!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=produk>";
	}

/*
}elseif($act=='ubah') {

	if($ukuran_file > 0){
		$sql = "UPDATE produk SET nama_produk='$nama_produk',foto='$foto_file', idkategori='$idkategori',deskripsi='$deskripsi' WHERE idproduk='$id'";
	}else{
		$sql = "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', idkategori='$idkategori' WHERE idproduk='$id'";
	}

	$result = mysqli_query($con,$sql);
	
	if ($result) {
		echo "<script>alert('Produk berhasil diubah!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=produk>";
	}else{
		echo "<script>alert('Produk gagal diubah!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=produk>";
	}


	}*/


}elseif ($act=='hapus') {

	$id  =$_GET['id'];
	$query = "DELETE FROM produk WHERE idproduk='$_GET[id]'";
	$result =mysqli_query($con,$query);
	echo $query;
	
	if ($result) {
		echo "<script>alert('Produk berhasil dihapus!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=produk>";
	}else{
		echo "<script>alert('Produk gagal dihapus!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=produk>";
	}

}
}

?>
