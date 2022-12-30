<?php
	if(ISSET($_POST['add_gallery'])){
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../images/gallery" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `gallery` (photo) VALUES( '$photo_name')");
		echo "<script>document.location='gallery.php'</script>";
	}
?>
