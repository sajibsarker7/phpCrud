<?php
	require_once("config.php");

	if (isset($_REQUEST["updateBtn"])) {
		$name = $_REQUEST["name"];
		$email = $_REQUEST["email"];
		$pass = $_REQUEST["pass"];
		$getID = $_REQUEST["editingId"];

		$upQuery =" UPDATE showcase SET Name ='$name' , Email = '$email', Password = '$pass' WHERE id=$getID";

		$runq = mysqli_query($connect,$upQuery);

		if ($runq == true) {
			header("Location:all_users.php?edited");
		}
	}

?>