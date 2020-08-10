<?php 
	require_once("config.php");

	$getId = $_REQUEST["id"];

	$deletedQ ="DELETE FROM showcase WHERE Id=$getId";
	$runQuery = mysqli_query($connect,$deletedQ);
	if ($runQuery == true) {
		header("Location:all_users.php?deleted");
	}
 ?>