<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit'])){
		$amenities_description = $_POST['amenities_description'];
		$amenities_title = $_POST['amenities_title'];
		$conn->query("UPDATE `amenities` SET `amenities_description` = '$amenities_description', `amenities_title` = '$amenities_title' WHERE `amenities_id` = '$_REQUEST[amenities_id]'");
		header("location:amenities.php");
	}	?>