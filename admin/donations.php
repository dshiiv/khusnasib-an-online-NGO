<?php
include("./includes/session_check.php");
include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="./images/logoicon-removebg-preview.png" />
	<title>Admin Panel - KhusNasib Charitable Trust</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/report.css">
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
				<li><a href="ngo_activities.php">NGO Activities</a></li>
				<li class="current"><a>Reposts</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
				<li class=""><a href="../index.php">Main</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div style="width:600px; margin:0px auto;">
			<h1>Donations</h1>
			<hr>
			<table>
				<tr>
					<th>Donor Name</th>
					<th>Donations</th>
					<th>Mostly Donates</th>
				</tr>
				<tr>
					<td>Mausami</td>
					<td>336</td>
					<td>Clothes</td>
				</tr>
				<tr>
					<td>Ankit</td>
					<td>298</td>
					<td>Food</td>
				</tr>
				<tr>
					<td>Samir</td>
					<td>275</td>
					<td>Education</td>
				</tr>
				<tr>
					<td>Hardik</td>
					<td>195</td>
					<td>Education</td>
				</tr>
				<tr>
					<td>Pruthvi</td>
					<td>163</td>
					<td>Health</td>
				</tr>
			</table>
			<button>Download</button>
			<button>Print</button>
		</div>

	</div>
	<?php include("./includes/footer.html");	?>
</body>

</html>