<?php error_reporting(0); 

	$mod = isset($_GET['mod']) ? $_GET['mod'] : null;
 	$mod = $_GET['mod'];


    if ($_GET['mod'] =="") {
		include ("mod/beranda.php");

    }elseif ($_GET['mod']=="kategori") {
        include ("mod/kategori.php");

    }elseif ($_GET['mod']=="accesories") {
        include ("mod/accesories.php");

    }elseif ($_GET['mod']=="register") {
        include ("mod/register_member.php");

    }elseif ($_GET['mod']=="aboutus") {
        include ("mod/about.php");
        
    }elseif ($_GET['mod']=="contact") {
        include ("mod/contact.php");
    }
 		
?>