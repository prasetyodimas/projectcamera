<?php

 if(empty($_SESSION['username'])){
		echo "<p style='color:red'>akses denied</p>";
	exit();		
}

	/*$aksi = null;
	if(isset($_GET['id'])) {
		$aksi = "edit";
		$id = $_GET['id'];
		//baris dibawah ini disesuaikan dengan nama tabel dan idtabelnya
			$sql = "select * from stok where idstok='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
		$data = mysql_fetch_object($result);

	} else {
		$aksi = "tambah";*/
?>




<h2> Form stok</h2>
<form  class="form-horizontal" method="POST" id="form1"  enctype="multipart/form-data" action="stok/stok_action.php">
	<div class="control-group">
		<label class="control-label" for="idproduk">Nama Produk</label>
		<div class="controls">
			<select id='idproduk' name='idproduk' class="required " >
					
			</select>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="lon">Harga beli</label>
		<div class="controls">
			<input type="text" name='harga_beli' id='harga_beli' value='<?=$data->harga_beli?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="lon">Harga Jual</label>
		<div class="controls">
			<input type="text" name='harga_jual' id='harga_jual' value='<?=$data->harga_jual?>' class='required'
			>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="lon">jumlah</label>
		<div class="controls">
			<input type="text" name='jumlah' id='jumlah' value='<?=$data->jumlah?>' class='required'
			>
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