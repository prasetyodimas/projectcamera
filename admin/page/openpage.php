<?php include '../config/koneksi.php';

if (isset($_GET['page'])) {
		$page = $_GET['page'];
		switch ($page) {
			case 'dashboard':
				//view 
				include ("page/dashboard/dashboard.php");
			break;
			case 'kategori':
				//view kategori produk
				include ("page/kategori/kategori_view.php");
			break;
				//add kategori
			case 'addkategori':
				include ("page/kategori/kategori_add.php");
			break;
				//edit kategori
			case 'editkategori':
				include ("page/kategori/kategori_edit.php");
				break;
			case 'produk':
				//view produk
				include ("page/produk/produk_view.php");
			break;
				//addproduk
			case 'addproduk':
				include ("page/produk/produk_add.php");
			break;
				//editproduk
			case 'editproduk':
				include ("page/produk/produk_edit.php");
			break;
				//view stok
			case 'stok':
				include ("page/stok/stok_view.php");	
			break;
			case 'addstok':
				include ("page/stok/stok_add.php");	
			break;
			case 'editstok':
				include ("page/stok/stok_edit.php");	
			break;
			case 'berita':
				include ("page/berita/berita_view.php");	
			break;
			case 'add-berita':
				include ("page/berita/berita_form.php");	
			break;
	}
}

?>