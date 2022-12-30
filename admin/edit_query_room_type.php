<?php
require_once 'connect.php';
if (isset($_POST['edit_room_type'])) {
	$room_type = $_POST['room_type'];
	$person = $_POST['person'];
	$pillow_price = $_POST['pillow_price'];
	$sheet_price = $_POST['sheet_price'];
	$bed_price = $_POST['bed_price'];
	$breakfast_price = $_POST['breakfast_price'];
	$price = $_POST['price'];
	$downpayment = $_POST['downpayment'];
	$conn->query("UPDATE `room_type` SET `room_type` = '$room_type', `person` = '$person', 
		 `price` = '$price', `pillow_price` = '$pillow_price'
		 ,`bed_price` = '$bed_price',`breakfast_price` = '$breakfast_price' , `downpayment` = '$downpayment' WHERE `room_type_id` = '$_REQUEST[room_type_id]'");
	echo "<script>document.location='room_type.php'</script>";
}
