<?php
	session_start();	
	if(isset($_SESSION["admin"])){
		header("location:./home.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/logoicon-removebg-preview.png" />
	<title>Admin Login - KhusNasib  Charitable Trust</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="./images/khusnasib-logo.jpg" alt="logo"></a>
			<ul>
			<li class=""><a href="../index.php">KHUSNASIB</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div>
			<div class="login_div">
				<h3>Login</h3>
				<form action="./admin_check.php" method="post" class="user">
					<label>Admin</label>
					<input type="text" name="admin">
					<label>Password</label>
					<input type="password" name="password">
					<input type="submit" value="Login">
				</form>
			</div>
		</div>
	</div>
</body>
</html>