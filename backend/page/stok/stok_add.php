<?php

 if(empty($_SESSION['username'])){
		echo "<p style='color:red'>akses denied</p>";
	exit();		
}


$proses ="backend/page/stok/stok_proses.php?act=tambah";

?>

<h2> Form stok</h2>
<form  class="form-horizontal" method="POST" id="form1"  enctype="multipart/form-data" action="<?php echo $site;?><?php echo $proses;?>">
	<div class="control-group">
		<label class="control-label" for="idproduk">Nama Produk</label>
		<div class="controls">
			<select id='idproduk' name='idproduk' autofocus required="">
				<option> Pilih Produk</option>
				<?php
					$getproduk= mysqli_query($con,"SELECT * FROM produk");
					while ($res = mysqli_fetch_array($getproduk)) {
						echo "<option value='".$res['idproduk']."'>".$res['nama_produk']."</option>";
				}

				?>
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="lon">Harga beli</label>
		<div class="controls">
			<input type="text" name='harga_beli' autofocus required="">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="lon">Harga Jual</label>
		<div class="controls">
			<input type="text" name='harga_jual' autofocus required="">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="lon">jumlah</label>
		<div class="controls">
			<input type="text" name='jumlah' autofocus required="">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" value="simpan">Tambah</button>
			<button type="submit" value="batal" onclick="javascript:history.back();">Batal</button>
		</div>
	</div>

</form>
</div>