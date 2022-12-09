<?php
include("./includes/session_check.php");
include("./includes/connection.php");
?>
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
				<li class="current"><a>Upload Events</a></li>
				<!-- <li><a href="news.php">News</a></li> -->
				<li><a href="events.php">Events</a></li>
				<li><a href="ngo_activities.php">NGO Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
				<li class=""><a href="../index.php">Main</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="admin_manages">
			<h3>Events Held</h3>
			<hr>
			<form action="insert_media.php" method="post" enctype="multipart/form-data" class="user">
				<label>Caption</label>
				<input type="text" name="media_cation" required>
				<input type='file' name='fileToUpload' required>
				<label>Description</label>
				<textarea rows="5" cols="35" name="description" required></textarea>
				<label>Date & Time</label>
				<input type="date" name="date" required min="2019-01-01">
				<input type="time" name="time" required>
				<input type='submit' value='Upload'>
			</form>
			<div class="stored">
				<h4>uploaded media</h4>
				<hr>
				<?php
				$sql = "SELECT * FROM media_gallery ORDER BY view DESC";
				$result = mysqli_query($conn, $sql);
				$count = 1;
				while ($rs = mysqli_fetch_array($result)) {
					if ($count) {
				?>
						<a>
							<div>
								<span><?php echo $rs['caption']; ?></span>
								<img src="<?php echo "." . $rs['image']; ?>">
							</div>
						</a>
				<?php
					}
					$count++;
				}
				?>
			</div>
		</div>
	</div>
	<?php include("./includes/footer.html");	?>
</body>

</html>