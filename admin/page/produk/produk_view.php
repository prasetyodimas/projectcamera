<?php include "../config/koneksi.php";

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
<div>
	<h4 id="headings">Data Produk</h4>
	<table class="table table-striped table-condensed tables-config_fontsize">
		<thead>
			<tr>
				<th>No</th>
				<th>Kategori</th>
				<th>Nama</th>
				<th>Deskripsi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php

		//var functpaging
		$batas  ='10';
		$tabel  ="produk";
		$posisi =null;

		if(empty($halaman)){
			$posisi=0;
			$halaman=1;
		}else{

			$posisi=($halaman-1)* $batas;
		}

		$no=1;
		$query  ="SELECT * FROM produk p JOIN kategori k ON k.idkategori=p.idkategori";		
		$result =mysqli_query($con,$query) or die(mysql_error());
		while($rows=mysqli_fetch_array($result)){

		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $rows['nama_kategori'];?></td>
			<td><?php echo $rows['nama_produk'];?></td>
			<td><?php echo $rows['deskripsi'];?></td>
			<td>	
				<a href="homeadmin.php?page=addproduk&act=tambah"><i class="icon-plus"></i>Tambah</a>
				<a href="homeadmin.php?page=&pg=produk_form&id=<?php echo $row['idproduk'];?>"><i class="icon-pencil"></i>Ubah</a>
				<a href="page/produk/produk_proses.php?act=hapus&id=<?php echo $rows['idproduk'];?>"onclick="return confirm('Yakin data akan dihapus?') ";><i class="icon-trash"></i>Hapus</a>
			</td>
		</tr>
		<?php $no++; } ?>	
	</tbody>
</table>


<?php //============= CUT HERE for paging====================================
	$tampil2 = mysqli_query($con,"SELECT idproduk from produk");
	$jmldata = mysqli_num_rows($tampil2);
	$jumlah_halaman = ceil($jmldata / $batas);
?>

<div class='pagination'> 
	<ul>
		<?php pagination($halaman, $jumlah_halaman, "produk"); ?>
	</ul>
</div>
<div class='well'>Jumlah data :<strong><?php echo $jmldata; ?> </strong></div>
</div>
