<?php 
if(empty($_SESSION['username'])){
	echo "<p style='color:red'>akses denied</p>";
	exit();		
}
?>
<style type="text/css">
	.tables-config_fontsize{
		font-size: 13px !important;
	}
</style>
<div class="tables-config_fontsize">
	<h4 id="headings">Data Kategori Produk</h4>
	<table class="table table-striped table-bordered table-condensed tables-config_fontsize">
		<thead>
			<tr>
				<th width="20">No</tg>
				<th width="100">Kode Kategori</th>
				<th width="70%;">Nama kategori</th>
				<th width="">Aksi</th>
			</tr>
		</thead>
		<tbody>
		<!-- <?php

			$no=1;
			$getdata_kategori  =mysqli_query($con,"SELECT * FROM kategori ORDER BY nama_kategori ASC");
			while($rows=mysqli_fetch_array($getdata_kategori)){
	?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $rows['idkategori'];?></td>
			<td><?php echo $rows['nama_kategori'];?></td>
			<td>
				<a href="homeadmin.php?page=addkategori&act=tambah"><i class="icon-plus"></i>Tambah</a>
				<a href="homeadmin.php?page=editkategori&act=ubah&id=<?php echo $rows['idkategori'];?>"><i class="icon-pencil"></i>Ubah</a>
				<a href="page/kategori/kategori_proses.php?act=hapus&id=<?php echo $rows['idkategori'];?>" onclick="return confirm('Yakin data akan dihapus?');"><i class="icon-trash"></i>Hapus</a>
			</td>
		</tr>
	<?php $no++; } ?> -->
		</tbody>
	</table>
</div>

<!-- <?php //=============CUT HERE for paging====================================
	$tampil2 = mysqli_query($con,"select idkategori from kategori");
	$jmldata = mysqli_num_rows($tampil2);
	$jumlah_halaman = ceil($jmldata / $batas);

		echo "<div class='pagination'> <ul>";
		for ($i = 1; $i <= $jumlah_halaman; $i++);

			echo "<li><a href='index.php?mod=kategori&pg=kategori_view&halaman=$i'>$i</a></li>";

		mysqli_close();
	?>
</ul>
</div>
<br>Jumlah data :<?php echo $jmldata; ?> -->
