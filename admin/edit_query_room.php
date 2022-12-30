<?php
if (isset($_POST['edit_room'])) {
	$query = $conn->query("SELECT * FROM room NATURAL JOIN `room_type`  WHERE room_type ='$_REQUEST[room_type]'");
	$fetch = $query->fetch_array();
	$room_type_id = $fetch['room_type_id'];
	$description = $_POST['description'];
	$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$photo_name = addslashes($_FILES['photo']['name']);
	$photo_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES['photo']['tmp_name'], "../photo/" . $_FILES['photo']['name']);
	$conn->query("UPDATE `room` SET `room_type_id` = '$room_type_id', `description` = '$description', `photo` = '$photo_name'  WHERE `room_id` = '$_REQUEST[room_id]'");
	echo "<script>document.location='room.php'</script>";
}
