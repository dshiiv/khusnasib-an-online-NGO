<?php session_start();
include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Gallery - KhusNasib</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/khusnasib-logo.jpg" alt="logo"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li class="current"><a>gallery</a></li>
				<!-- <li><a href="news.php">News</a></li> -->
				<li><a href="event.php">Events</a></li>
				
				<?php
				if (isset($_SESSION["user_id"])) {
				?>
					<li><a href="profile.php">profile</a></li>
					<li><a href="faq.php">FAQ</a></li>
					<li><a href="donate.php">Donate</a></li>
					<li class="log_btn"><a href="logout.php">Logout</a></li>
				<?php
				} else {
				?>
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
				}
				?>
				<li><a href="./admin/index.php">Admin</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="gallery">
			<div class="header">
				<div>
					<h2></h2>
					<p>
					</p>
				</div>
				<img src="./uploads/khusnasib.jpeg" height="250px" width="400px">
			</div>
			<div class="body">

				<?php
				$select_products = mysqli_query($conn, "SELECT * FROM `media_gallery`") or die('query failed');
				if (mysqli_num_rows($select_products) > 0) {
					while ($fetch_products = mysqli_fetch_assoc($select_products)) {
				?>
						<div width="268px" height="365px">
							<img class="image" src="<?php echo $fetch_products['image']; ?>" alt="image" width="100%" height="100%">
							<p><?php echo $fetch_products['caption']; ?></p>
						</div>
				<?php
					}
				} else {
					echo '<p class="empty">no products added yet!</p>';
				}
				?>
			</div>
			<div class="footer">
				<p>
					stay connected with us, we know the needs of pepole who are poor, disabled. get invloved with us and start helping pepole with your abilities
				</p>
				<a href="login.php">Get Involved</a>
			</div>
		</div>
	</div>
	<?php include("./includes/footer.html");	?>
</body>

</html>