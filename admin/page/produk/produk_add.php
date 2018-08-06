<?php include '../config/koneksi.php';
	
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
<h4> Tambah Produk</h4>		
<form class="form-horizontal" method="POST" id="form1"  enctype="multipart/form-data" action="page/produk/produk_proses.php?act=tambah">
	<input type='hidden' name='id' value="">
	<div class="control-group">
		<label class="control-label" for="nama_produk">Nama Produk</label>
		<div class="controls">
			<input type="text" name='nama_produk' class='config-form' autofocus required="">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="idkategori">kategori</label>
		<div class="controls">
			<select name='idkategori' class="required " autofocus required="">
				<?php 
					$get_kate =mysqli_query($con,"SELECT * FROM kategori");
					while ($data =mysqli_fetch_array($get_kate)) {
						echo "<option value='".$data['idkategori']."'>".$data['nama_kategori']."</option>";
					}
				 ?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="foto">Gambar</label>
		<div class="controls">
			<input type="file" name='foto'>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="deskripsi">deskripsi</label>
		<div class="controls">
			<textarea name='deskripsi' class="input-xxlarge"></textarea>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit">Tambah</button>
			<button type="submit" value="batal" onclick="javascript:history.back();">Batal</button>
		</div>
	</div>
</form>
</div>