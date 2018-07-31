<head>
	<meta charset="utf-8" />
	<title>Dashboard  - Admin Page </title>
	<meta name="description" content="This is page-header (.page-header &gt; h1)" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--basic styles-->
	<link rel="shortcut icon" href="../../assets/bootstrap/img/favico.ico">
	<link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="../../assets/themes-back/font-awesome/css/font-awesome.min.css" />
	<!--page specific plugin styles-->
	<link rel="stylesheet" href="../../assets/themes-back/css/prettify.css" />
	<!--inline styles if any-->
	<script src='../../assets/themes-back/js/jquery.min.js'></script>
	<script src="../../assets/bootstrap/js/jquery.validate.js"></script>
	<script src="../../assets/bootstrap/js/messages_id.js"></script>
	</head>
	<style type="text/css"> 
	label.error {color: red; } .wrap-login:{display: block; position: relative; } .middle-container {width: 100%; height: auto; background: #438eb9; height: 44px; } .heading-company{float: left; padding: 2px 15px; color: #fff; } .main-traingle{/*background: url("../../assets/icon/triangle.png");*/ width: 100%; height: auto; display: block; position: relative; } .main-innercontainer{display: inline-block; position: relative; height: auto; padding-top:100px; margin-left: 29%; } .image-admin{position: fixed; width: auto; height: auto; display: inline-block; } .navigation-boxform{height: 30px !important; width: 300px !important; border-radius: 2px !important; } 
	</style> <!-- <div class="span6  offset1 well"> -->
<div class="wrap-login">
	<div class="middle-container">
		<h4 class="heading-company">ProjectCamera Administrator</h4>
	</div>
</div>
<div class="main-traingle">
	<div class="main-innercontainer">
	<form method="POST" id="form1" class='form-horizontal' action="login_action.php">
		<div class="image-admin">
			<img src="../../assets/themes-back/images/user.png">
		</div>
		<div class="control-group">
			<div class="controls">
				<input type="text" name='username' autofocus required="" placeholder="username" class="form-control navigation-boxform">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<input type="password" name='password' autofocus placeholder="password" required="" class="form-control navigation-boxform">
			</div>
		</div>
		<div class="action-containersubmit">
			<div class="span4 offset2">
				<input type="submit" name="login" value='login'><!--  class="btn btn-primary" -->
			</div>
		</div>
		<a href='http://localhost/projectcamera/index.php'><~ Back to web</a>

	</form>
	</div>
</div>

