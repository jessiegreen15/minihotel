<?php
	require_once 'connect.php';
	if(ISSET($_POST['add'])){
		$amenities_description = $_POST['amenities_description'];
        $amenities_title = $_POST['amenities_title'];
		$conn->query("INSERT INTO `amenities` (amenities_description, amenities_title) VALUES('$amenities_description' , '$amenities_title')");
		header("location:amenities.php");
		}
?>
