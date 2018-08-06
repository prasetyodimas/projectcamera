<?php error_reporting(0);
if(empty($_SESSION['username'])){
	echo "<p style='color:red'>akses denied</p>";
	exit();		
}
	
?>
<style type="text/css">
	.config-form{
		width: 221px !important;
		height: 30px !important;
	}
</style>
<form id="form1" class="form-horizontal" method="POST" enctype="multipart/form-data" action="page/kategori/kategori_proses.php?act=tambah">
	<h4>Tambah Kategori Produk</h4>
	<div class="control-group">
		<label class="control-label" for="nama">Kode Produk</label>
		<div class="controls">
			<select name="idkategori" autofocus required="">
				<option value="">Kode Produk</option>
				<option>CAM</option>
				<option>ACES</option>
				<option>TRPD</option>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="nama">Nama kategori</label>
		<div class="controls">
			<input type="text" name='nama_kategori' class="form-control config-form" value='<?php echo $baris['nama_kategori'];?>' autofocus required="">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" value="tambah">Tambah</button>
			<button type="submit" value='batal' onclick="javascript:history.back();" >Batal</button>
		</div>
	</div>
</form>
			