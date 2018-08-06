<?php session_start();
	include ('../config/koneksi.php');
	include ('../inc/function.php');
	include ('../inc/header-back.php');
	include ('../inc/js.php'); 

if (empty($_SESSION['username'])) {
	echo "<script>alert('Maaf anda tidak memiliki session ID !!');</script>";
	echo "<meta http-equiv=refresh content=0;url=$site/admin>";
	exit();
}else{
?>
<!DOCTYPE html>
<html lang="en">
	<body>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small><i class="icon-desktop"></i> ProjectCamera Dashboard</small>
					</a><!--/.brand-->
					<ul class="nav ace-nav pull-right">
					<?php 
						if (isset($_SESSION['username'])){ ?>
						<li>	
							<a href="login/logout.php"><i class="icon-off"></i>Logout</a>
						</li>
					<?php } ?>
					</ul><!--/.w8-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>
		<div id="sidebar">
			<?php
				if(isset($_SESSION['username'])){
					include('../inc/sidebar-back.php');
				}
			?>
		</div>
		<!--content -->
		<div id="main-content" class="clearfix">
		<div style='margin:10px;padding: 10px'>
			<?php/* PHP Code untuk mendapatkan halaman view masing masing tabel */?>
			<?php include "page/openpage.php";?>
			</div>
		</div>
	</body>
</html>

<?php } ?>