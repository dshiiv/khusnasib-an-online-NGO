<?php include("./includes/session_check.php");	?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/logoicon-removebg-preview.png" />
	<title>Admin Panel - KhusNasib Charitable Trust</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
</head>

<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="./images/khusnasib-logo.jpg" alt="logo"></a>
			<ul>
				<li><a href="home.php">Donations</a></li>
				<li><a href="upload_media.php">Upload Media</a></li>
				<!-- <li><a href="news.php">News</a></li> -->
				<li><a href="events.php">Upcoming Events</a></li>
				<li class="current"><a href="ngo_activities.php">NGO Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
				<li class=""><a href="../index.php">Main</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="ngo_activities">
			<div>

			</div>
		</div>
	</div>
	<?php include("./includes/footer.html");	?>
</body>

</html>