<?php
	require_once 'connect.php';
	if(ISSET($_POST['update'])){
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../images/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `contactus` SET `address` = '$address', `contact` = '$contact', `email` = '$email', `photo` = '$photo_name' WHERE `id` = '1'");
		header("location: contactus.php");
	}
?>

