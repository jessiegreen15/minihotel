<?php
if (isset($_POST['add_room_type'])) {
	$room_type = $_POST['room_type'];
	$person = $_POST['person'];
	$price = $_POST['price'];
	$pillow_price = $_POST['pillow_price'];
	$sheet_price = $_POST['sheet_price'];
	$bed_price = $_POST['bed_price'];
	$breakfast_price = $_POST['breakfast_price'];
	$conn->query("INSERT INTO `room_type` (room_type, person,price, pillow_price, sheet_price, bed_price, breakfast_price, downpayment) 
		VALUES('$room_type','$person', '$price', '$pillow_price','$sheet_price','$bed_price', '$breakfast_price', '$downpayment')");
	echo "<script>document.location='room_type.php'</script>";
}
