<?php session_start(); error_reporting(0);
	include ('../inc/config.php');
	include ('../inc/function.php');
	include ('../inc/header-back.php');
	include ('../inc/js.php'); 
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

		<!-- <div class="container-fluid" id="main-container">
			<a id="menu-toggler" href="#">
				<span></span>
			</a> -->
		<!--sidebar-->			
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
			<?php include "openpage.php";?>

			</div>
		</div>
	</body>
</html>
