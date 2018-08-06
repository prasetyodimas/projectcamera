<?php  error_reporting(0);

include ('../../../config/koneksi.php');


if(isset($_POST)){

$nama_kategori = $_POST['nama_kategori'];
$idkategori    = $_POST['idkategori'];
$id            = $_POST['id'];


$act= $_GET['act'];

if ($act=='tambah'){

	//validasi data
	$checkquerry = mysqli_query($con,"SELECT * FROM kategori WHERE idkategori='$idkategori'");
	$cek_rows    = mysqli_num_rows($checkquerry);

	if ($cek_rows > 0) {
       	echo "<script>alert('Maaf kategori telah disimpan!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=kategori>";
	}else{

		$sql    ="INSERT INTO kategori (idkategori, nama_kategori) VALUES('$idkategori','$nama_kategori')";
		$result = mysqli_query($con,$sql);

		if($result) {
	       	echo "<script>alert('Kategori produk berhasil disimpan!');</script>";
	        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=kategori>";
		}else {
	       	echo "<script>alert('Kategori produk gagal disimpan!');</script>";
	        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=kategori>";
		}

	}

}elseif($act=='ubah'){

	$id  = $_GET['id'];

	//validasi data
	/*$checkquerry = mysqli_query($con,"SELECT * FROM kategori WHERE idkategori='$idkategori'");
	$cek_rows    = mysqli_num_rows($checkquerry);

	if ($cek_rows > 0) {
       	echo "<script>alert('Maaf kategori telah disimpan!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=kategori>";
	}else{
*/
	$sql="UPDATE kategori SET idkategori='$idkategori',nama_kategori='$nama_kategori' WHERE idkategori='$id'";

	$result = mysqli_query($con,$sql);

	if($result) {
       	echo "<script>alert('Kategori produk berhasil diubah!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=kategori>";
	}else {
       	echo "<script>alert('Kategori produk gagal diubah!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=kategori>";
    }

	/*}*//* end of check validation */


}elseif ($act=='hapus') {
		
	$id     = $_GET['id'];
	$query  ="DELETE FROM kategori WHERE idkategori='$id'";
	$result =mysqli_query($con,$query);

	if ($result) {
		echo "<script>alert('Kategori produk berhasil dihapus!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=kategori>";

	}else{
		echo "<script>alert('Kategori produk gagal dihapus!');</script>";
        echo "<meta http-equiv=refresh content=0;url=$site"."backend/homeadmin.php?page=kategori>";

	}

	}

}/*end of isset*/

?>
