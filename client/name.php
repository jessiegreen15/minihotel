<?php
	require '../admin/connect.php';
	$query = $conn->query("SELECT * FROM `guest` WHERE `guest_id` = '$_SESSION[guest_id]'");
	$fetch = $query->fetch_array();
	$firstname = $fetch['firstname'];
	$middlename = $fetch['middlename'];
	$lastname = $fetch['lastname'];
	$contactno = $fetch['contactno'];
	$email = $fetch['email'];
	$address = $fetch['address'];
	$user = $fetch['username'];
	$pass = $fetch['password'];
?>