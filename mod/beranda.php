<div class="main-boxmneus">
	<div class="span12">
		<?php
			$getproduk = mysqli_query($con,"SELECT * FROM produk ORDER BY idproduk ASC");
			while ($res = mysqli_fetch_array($getproduk)) {
		?>
		<div class="span3">
			<h4><?php echo $res['nama_produk']; ?></h4>
			<img src="<?php echo $site; ?>upload/produk/<?php echo $res['foto']?>" class="img-responsive">
			<p><?php echo $res['deskripsi']; ?></p>
		</div>
		<?php } ?>
	</div>
</div>