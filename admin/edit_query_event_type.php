<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_event_type'])){
		$event_type_name = $_POST['event_type_name'];
		$price = $_POST['price'];
		$lunch_price = $_POST['lunch_price'];
		$snack_price = $_POST['snack_price'];
		$reservation_fee = $_POST['reservation_fee'];
		$type_description = $_POST['type_description'];
		$snack_description = $_POST['snack_description'];
		$lunch_description = $_POST['lunch_description'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"../photo/" . $_FILES['photo']['name']);
		$conn->query("UPDATE `event_type` SET `event_type_name` = '$event_type_name', `type_description` = '$type_description',   `price` = '$price' , `reservation_fee` = '$reservation_fee' ,  `lunch_price` = '$lunch_price' ,
		 `snack_description` = '$snack_description' , `lunch_description` = '$lunch_description' , `photo` = '$photo_name' WHERE `event_type_id` = '$_REQUEST[event_type_id]'");
		echo "<script>document.location='event_type.php'</script>";
	}
?>