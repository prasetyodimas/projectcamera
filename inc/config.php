<?php	
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass','');
	define('db_name','db_projectcamera');
	
	mysqli_connect(db_host,db_user,db_pass);
	mysqli_select_db(db_name);
	
?>
