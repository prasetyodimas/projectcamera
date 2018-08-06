<?php
if(empty($_SESSION['username'])){
	echo "<p style='color:red'>akses denied</p>";
	exit();		
}
?>
<div class='bs-docs-example'>
	<h4 id="headings">Data berita</h4>
	<table  class="table table-striped table-condensed">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul berita</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
			//bata paging 
			$batas='10';
			$tabel="berita";

			$posisi=null;

			if(empty($halaman)){
				$posisi=0;
				$halaman=1;
			}else{
				$posisi=($halaman-1)* $batas;
			}
				
			$no=1;
			$query=mysqli_query($con,"SELECT * from berita order by tanggal DESC ");
			while($rows=mysqli_fetch_array($query)){

		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $rows['judul'];?></td>
			<td>
				<a href="homeadmin.php?page=add-berita"><i class="icon-plus"></i>Tambah</a>
				<a href="homeadmin.php?page=berita&pg=berita_form&id=<?php echo $rows['idberita'];?>"><i class="icon-pencil"></i>Ubah</a>
				<a href="homeadmin.php?page=berita&pg=berita_view&act=del&id=<?php echo $rows['idberita'];?>" onclick="return confirm('Yakin data akan dihapus?') ";> 
				<i class="icon-trash"></i>Hapus</a>
			</td>
		</tr>
	<?php $no++; }?>
	</tbody>
</table>


<?php	
//=============CUT HERE for paging====================================
$tampil2=mysqli_query($con,"select idberita from berita");
$jmldata=mysqli_num_rows($tampil2);
$jumlah_halaman=ceil($jmldata/$batas);


echo "<div class='pagination'> <ul>";
for($i=1;$i<=$jumlah_halaman;$i++); 

echo "<li><a href='homeadmin.php?page=berita&pg=berita_view&halaman=$i'>$i</a></li>";

?>
</ul>
</div>
<br>Jumlah data :<?php echo $jmldata; ?>



</div>
