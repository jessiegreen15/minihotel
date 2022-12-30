<?php
	if(ISSET($_POST['create'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
        $address = $_POST['address'];
		$email = $_POST['email'];
		$contactno = $_POST['contactno'];
        $username = $_POST['username'];
		$password = $_POST['password'];

		$conn->query("INSERT INTO `guest` (firstname, middlename, lastname, address, email, contactno, username, password) VALUES('$firstname', '$middlename', '$lastname', '$address','$email', '$contactno','$username', '$password')");
		echo "<script>alert('Account has been registered');document.location='index.php'</script>";
	}
?>