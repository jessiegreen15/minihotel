<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_account'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn->query("UPDATE `admin` SET `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `username` = '$username', `password` = '$password' WHERE `admin_id` = '$_REQUEST[admin_id]'");
		header("location: aboutus.php");
	}	?>