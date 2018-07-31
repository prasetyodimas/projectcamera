<div class="main-boxmneus">
	<?php

	$getproduk = mysqli_query($con,"SELECT * FROM produk ");
	while ($res = mysqli_fetch_array($getproduk)) {

	?>
	<h4><?php echo $res['nama_produk']; ?></h4>
	<img src="<?php echo $site; ?>upload/produk/<?php echo $res['foto']?>">
	<?php } ?>
</div>