<?php
	if(ISSET($_POST['add_room'])){

		$query = $conn->query("SELECT * FROM `room_type`  WHERE room_type ='$_REQUEST[room_type]'");
		$fetch = $query->fetch_array();
		$room_type_id = $fetch['room_type_id'];
		$description = $_POST['description'];

		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("INSERT INTO `room` (room_type_id, photo, description, room_status_name) VALUES('$room_type_id', '$photo_name', '$description', 'Dirty')");
		echo "<script>document.location='room.php'</script>";
	}
?>