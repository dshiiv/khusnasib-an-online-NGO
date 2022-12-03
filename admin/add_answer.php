<?php
	include("./includes/connection.php");
	
	$sql = "UPDATE faq SET answer='".$_GET['answer']."' WHERE faq_id='".$_GET['faq_id']."'";
	if(mysqli_query($conn,$sql)){
		header("location:manage_faq.php");
	}
	else{
		echo mysqli_connect_error($conn);
	}
?>