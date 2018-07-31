<?php include '../config/koneksi.php';

 if(empty($_SESSION['username'])){
		echo "<p style='color:red'>akses denied</p>";
	exit();		
}

?>
<div>
<!-- <form  class="form-horizontal" method="POST" id="form1" action="homeadmin.php?page=stok&pg=stok_view">
	<h4>Update Semua harga Jual</h4>
	<input type='text' name='persen'>% (persen)
	<button type="submit" class="btn btn-success" name='update' >Update harga</button>

</form> -->
<style type="text/css">
	.tables-config_fontsize{
		font-size: 13px !important;
	}
</style>
<h4 id="headings"> Data stok</h4>
	<table class="table table-striped table-condensed tables-config_fontsize">
		<thead>
			<th>
				<td>Nama produk</td>
				<td>Harga Beli</td>
				<td>Harga Jual</td>
				<td>jumlah</td>
				<td>Aksi</td>
			</th>
		</thead>
	<tbody>
<?php

	$batas='10';
	$tabel="stok";
	/*$halaman=$_GET['halaman'];*/
	$posisi=null;

	if(empty($halaman)){
		$posisi=0;
		$halaman=1;
	}else{
		$posisi=($halaman-1)* $batas;
	}

	
	$no=1;
	$query =mysqli_query($con,"SELECT * FROM stok k JOIN produk p ON k.idproduk=p.idproduk ");
	while($rows=mysqli_fetch_array($query)){

?>
	<tr>
		<td><?php echo $no;?></td>
		<td><?php echo $rows['nama_produk'];?></td>
		<td align='right'><?php echo format_rupiah($rows['harga_beli']);?></td>
		<td align='right'><?php echo format_rupiah($rows['harga_jual']);?></td>
		<td align='right'><?php	echo $rows['jumlah'];?></td>
		<td width="200">	
			<a href="homeadmin.php?page=addstok&act=tambah"><i class="icon-pencil"></i>Tambah</a>
			<a href="homeadmin.php?page=stok&pg=stok_form&id=<?php echo $rows ['idstok'];?>"><i class="icon-pencil"></i>Ubah</a>
			<a href="page/stok/stok_proses.php?act=hapus&id=<?php echo $rows['idstok'];?>" onclick="return confirm('Yakin data akan dihapus?') ";><i class="icon-trash"></i>Hapus</a>
		</td>
	</tr>
<?php $no++; }?>
		</tbody>
	</table>


<?php
//=============CUT HERE for paging====================================
	$tampil2 = mysqli_query($con,"SELECT idstok from stok");
	$jmldata = mysqli_num_rows($tampil2);
	$jumlah_halaman = ceil($jmldata / $batas);
?>
<div class='pagination'> 
	<ul>
		<?php echo pagination($halaman, $jumlah_halaman,"stok");?>
	</ul>
</div>
	<div class='well'>Jumlah data :<strong><?=$jmldata;?> </strong></div>
</div>
