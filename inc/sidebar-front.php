<style type="text/css">
.main-boxmneus{
	display: inline-block;
	width: 70%;
}
.main-rightsidebar{
    margin-top: 40px;
	float: right;
    display: inline-block;
    position: relative;
}
</style>

<div class="span3 col main-rightsidebar">
	<div class="block">
	<h4 class="title"><strong>Kategori</strong> </h4>
	<ul class="nav nav-list">
		<li class="nav-header">
		<?php //list kategori
			$get_categori = mysqli_query($con,"SELECT * FROM Kategori");
			while ($row = mysqli_fetch_array($get_categori)) {
				echo "<li><a href='index.php?mod=produk&idkategori=".$row[0]."'>" . ucwords($row[1]) . "</a> </li>";
			}

		?>
		</li>
	</ul>
</div>
<div class='block'>
	<h4 class="title"><strong>Latest</strong> News</h4>
	<ul class="nav nav-list below">
		<li class="nav-header">
			<?php
				$query = mysqli_query($con,"SELECT idberita,judul FROM berita order by tanggal");
				while ($row = mysqli_fetch_row($query)) {
					echo "<li><a href='index.php?mod=page&pg=berita&idberita=".$row[0]."'>" . ucwords($row[1]) . "</a> </li>";
					
				}
			?>
			
		</li>
	</ul>
</div>
<div class="block">
	<h4 class="title"><strong>Random</strong> produk</h4>
		<!--<?php	
			$query="select produk.*,stok.* from produk,stok where produk.idproduk=stok.idstok order by rand() desc limit 1";
			$result = mysql_query($query) or die(mysql_error());
			$no = 1;
			while($rows = mysql_fetch_object($result)) {
		?>-->
	<div class="product-box">
		<span class="sale_tag"></span>
		<a href="#">
			<!--<?php
				if (!empty($rows['foto'])) {
				echo "<img src='upload/produk/".$rows['foto']."'/>";
				}
			?>-->
		</a>
		<br/>
		<a href="#" class="title"><?php echo $rows['nama_produk'];?></a>
		<br/>			
		<p class="price">
			<?php echo format_rupiah($rows['harga_jual']);?>
		</p>
		<p>
			<span class="label label-warning">Stok <?php echo get_status_stok($rows['jumlah']);?></span>
		</p>
		<!--<?php
			if(!empty($_SESSION['idpelanggan']) && ($rows['jumlah']>0)){ ?>
			<a href='index.php?mod=chart&pg=chart&action=add&id=<?php echo $rows['idproduk'];?>' class='btn btn-warning'>
			<i class='icon-shopping-cart icon-white'></i>Beli</a>
		<?php } ?>-->
					</div>
				</li>
		<?php } ?>
		
</div>
</div>