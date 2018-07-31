<?php /*error_reporting(0);*/
if(empty($_SESSION['username'])){
	echo "<p style='color:red'>akses denied</p>";
exit();		
}

$id  = $_GET['id'];
$show = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM kategori WHERE idkategori='$id'"));

//link update
$proses ="page/kategori/kategori_proses.php?act=ubah&id="."$id";

?>

<style type="text/css">
	.config-form{
		width: 221px !important;
		height: 30px !important;
	}
</style>


<form id="form1" class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo "".$site."backend/$proses"; ?>">
	<h4>Edit Kategori Produk</h4>
	<input type='hidden' name='id' value="<?php echo $id; ?>">
	<div class="control-group">
		<label class="control-label" for="nama">Kode Produk</label>
		<div class="controls">
			<select name="idkategori" autofocus required="">
			<?php
				if (isset($id)) {
			  echo "<option>$show[idkategori]</option>";?>
					<option>CAM</option>
					<option>ACES</option>
					<option>TRPD</option>
				</select>
			<?php } ?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="nama">Nama kategori</label>
		<div class="controls">
			<input type="text" name='nama_kategori' class="form-control config-form" value='<?php echo $show['nama_kategori'];?>' autofocus required="">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" name='aksi'>Edit</button>
			<button type="submit" value='batal' onclick="javascript:history.back();" >Batal</button>
		</div>
	</div>
</form>
			