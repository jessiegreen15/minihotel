<?php
	require 'connect.php';
	$query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'");
	$fetch = $query->fetch_array();
	$firstname = $fetch['firstname'];
	$middlename = $fetch['middlename'];
	$lastname = $fetch['lastname'];
	$username = $fetch['username'];
	$password = $fetch['password'];
?>