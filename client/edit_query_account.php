<?php
	require_once '../admin/connect.php';
	if(ISSET($_POST['edit_account'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
        $contactno = $_POST['contactno'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn->query("UPDATE `guest` SET `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `email` = '$email', `address` = '$address', `contactno` = '$contactno', `username` = '$username', `password` = '$password' WHERE `guest_id` = '$_REQUEST[guest_id]'");
		echo "<script>document.location='account.php'</script>";

	}	?>