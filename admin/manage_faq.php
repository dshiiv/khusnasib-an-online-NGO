<?php include("./includes/session_check.php");
include("./includes/connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/logo_icon.png" />
	<title>Admin Panel - KhusNasib Charitable Trust</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/style_form.css">
</head>

<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="../images/khusnasib-logo.jpg" alt="logo"></a>
			<ul>
				<li><a href="home.php">Donations</a></li>
				<li><a href="upload_media.php">Upload Media</a></li>
				<!-- <li><a href="news.php">News</a></li> -->
				<li><a href="events.php">Events</a></li>
				<li class="current"><a href="ngo_activities.php">NGO Activities</a></li>
				<li class="log_btn"><a href="./logout.php">Logout</a></li>
				<li class=""><a href="../index.php">Main</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="ngo_activities">
			<div>
				<h3>FAQ(s)</h3>
				<hr>
				<?php
				$sql = "SELECT * FROM faq WHERE answer IS NOT NULL";
				$result = mysqli_query($conn, $sql);
				while ($rs = mysqli_fetch_array($result)) {
				?>
					<div>
						<h3><?php echo $rs['question']; ?></h3>
						<p><?php echo $rs['answer']; ?></p>
						<form action="add_answer.php" class="user">
							<input type="hidden" name="faq_id" value="<?php echo $rs['faq_id']; ?>">
							<input type="text" name="answer">
							<input type="submit" value="answer">
						</form>
						<hr>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
	<?php include("./includes/footer.html");	?>
</body>

</html>