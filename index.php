<?php include 'config/koneksi.php'; ?>

<style type="text/css">
body {
	background-color:#fff;
	font-family:Arial, Helvetica, sans-serif;
	color:#FFF;
     }
 
    .menu-wrap {
	background-color:#53bd84; 
	height:50px; 
	line-height:50px; 
	position:relative;
	width:770px;
	margin:auto;
	margin-top:80px;
     }
 
     .menu-wrap ul {
	list-style:none;
     }
 
     .menu-wrap ul li a {
 	float:left; 
	width:150px; 
	display:block; 
	text-align:center; 
	color:#FFF; 
	text-decoration:none; 
	text-transform:uppercase;
     }
 
     .menu-wrap ul li a:hover {
	background-color:#666; 
	display:block;
     }
 
     .menu-wrap ul li:hover ul {
	display:block;
     }
 
     .menu-wrap ul ul {
	display:none; 
	list-style:none; 
	position:absolute; 
	background-color:#53bd84;
	left:300px; 
	top:50px; 
	width:190px;
     }
 
     .menu-wrap ul ul li a {
	float:none; 
	display:block; 
	padding-left:30px; 
	text-align:left; 
	width:160px;
     }
 
     .menu-wrap ul ul li a:hover {
	color:#fff;
      }
</style>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ProjectCamera</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<!-- bootstrap -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	
	<link href="assets/themes-front/css/bootstrappage.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="assets/bootstrap/img/favico.ico">
	<!-- global styles -->
	<link href="assets/themes-front/css/flexslider.css" rel="stylesheet"/>
	<link href="assets/themes-front/css/main.css" rel="stylesheet"/>

	<!-- scripts -->
	<script src="assets/themes-front/js/jquery-1.7.2.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>				
	<script src="assets/themes-front/js/superfish.js"></script>	
	<script src="assets/themes-front/js/jquery.scrolltotop.js"></script>
	<!--[if lt IE 9]>			
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="assets/themes-front/js/respond.min.js"></script>
	<![endif]-->
	<script src="assets/bootstrap/js/jquery.validate.js"></script>
	<script src="assets/bootstrap/js/messages_id.js"></script>

	<script src="assets/themes-front/js/common.js"></script>
	<script src="assets/themes-front/js/jquery.flexslider-min.js"></script>

	<script src="assets/themes-front/js/common.js"></script>
	<script src="assets/themes-front/js/jquery.flexslider-min.js"></script>


	<script type="text/javascript">
		$(function() {
			$(document).ready(function() {
				$('.flexslider').flexslider({
					animation: "fade",
					slideshowSpeed: 4000,
					animationSpeed: 600,
					controlNav: false,
					directionNav: true,
					controlsContainer: ".flex-container" // the container that holds the flexslider
				});
			});
		});
	</script>
</head>
<body>		
<div id="top-bar" class="container">
	<div class="row"></div>
		<div class="span8">
			<!-- <div class="account pull-right"> -->
				<!--menu user -->
				 <!--  <div class="menu-wrap">
						<ul>
							<li><a href="beranda.html">Beranda</a></li>
							<li><a href="tentang.html">Tentang Kami</a></li>
							<li><a href="kontak.html">Kontak Kami</a>
								<ul>
									<li><a href="alamat.html">Alamat Kami</a></li>
									<li><a href="kebijakan.html">Kebijakan</a></li>
								</ul>
							</li>
						</ul>
				  </div> -->
		<ul class="user-menu">				
			<?php if(empty($_SESSION['idpelanggan'])){ ?>

				<li><a href="index.php">Beranda</a></li>  
				<li><a href="index.php">Kategori produk</a>
					
				</li>  
				<li><a href="index.php?mod=accesories">Accesories</a></li>
				<li><a href="index.php?mod=register">Register/Login</a></li>
				<li><a href="index.php?mod=aboutus">About Us</a></li>
				<li><a href="index.php?mod=contact">Contact Us</a></li>
						
			<?php }else{ ?>

				<li><a href="index.php?mod=chart&pg=chart">Keranjang Belanja</a></li>	
				<li><a href="index.php?mod=chart&pg=invoice">Invoice</a></li>	
				<li><a href="index.php?mod=user&pg=profil">Profil</a></li>	
				<li><a href="user/logout.php">logout</a></li>	

			<?php } ?>
		</ul>
			<!-- </div> --><!--account pull-right -->
		</div>
	</div>
</div>

<!-- SLIDER -->
<div id="wrapper" class="container">
	<section class="navbar main-menu">
		<div class="navbar-inner main-menu">				
			<a href="index.php" class="logo pull-left"></a>
			<!-- menu kategori -->
			<nav id="menu" class="pull-right">
		</div>
	</section>
	<section  class="homepage-slider" id="home-slider">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="upload/banner/baner.jpg" alt=""/>
				</li>
				<li>
					<img src="upload/banner/banner-1.jpg" alt="" />
					<div class="intro">
						<h1>Promo Diskon</h1>
						<p><span>Sampai 50% </span></p>
						<p><span>Untuk Pembelian produk produk tertentu</span></p>
					</div>
				</li>
			</ul>
		</div>			
	</section>

	<!-- conainer view all produk -->
	<div class="container-menus">
		
	<?php include 'pageconf.php'; ?>

	<section id="footer-bar">
	<div class="row">
		<div class="span3">
			<h4>Navigation</h4>
			<ul class="user-menu">
				<li><a href="index.php?mod=beranda">Homepage</a></li>  
				<li><a href="index.php?mod=about">About Us</a></li>
				<li><a href="index.php?mod=contact">Contac Us</a></li>
									
			</ul>					
		</div>
		<div class="span4"></div>
		<div class="span5">
			<p style="font-weight:bold;color:#fff;">PROJECT CAMERA</p>
			<!-- <p class="logo"><img src="assets/themes-front/images/logo.png" class="site_logo" alt=""></p> -->
			<p style="color: #ddd;">Project Camera adalah sebuah toko yang menjual berbagai macam kamera: mulai dari handycam hingga DSLR dan accesories perlengkapan kamera.</p>
			<br/>
		</div>					
	</div>	
	</section>
	<section id="copyright">
		<span style="float:right;margin-right:10px;">Copyright <?php echo date("Y"); ?> Project Camera</span>
	</section>

</body>
</html>

