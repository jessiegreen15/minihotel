<?php
	require_once 'connect.php';
	if(ISSET($_POST['update'])){
		$Title = $_POST['Title'];
		$about = $_POST['about'];

		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `aboutus` SET `Title` = '$Title', `about` = '$about', `photo` = '$photo_name' WHERE `id` = '1'");
		header("location: aboutus.php");
	}
?>

