
<?php
require_once 'connect.php';
if (isset($_POST['approve'])) {
	$room_id = $_POST['room_id'];
	$query = $conn->query("SELECT * FROM `room_transaction` WHERE   `room_id` = '$room_id' && `status` = 'approved'");
	$row = $query->num_rows;

	$time = date("H:i:s", strtotime("+8 HOURS"));
	if ($row > 0) {
		$query2 = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
		$fetch2 = $query2->fetch_array();
		$conn->query("UPDATE `room_transaction` SET `status` = 'disapprove' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
		echo "<script>alert('Sorry this Room is no longer available, Request disapprove');document.location='room_reserve.php'</script>";
	} else {
		$query2 = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
		$fetch2 = $query2->fetch_array();
		$changes = $_POST['changes'];
		$conn->query("UPDATE `room_transaction` SET  `status` = 'approved', `changes` = '$changes' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
		echo "<script>document.location='room_reserve.php'</script>";
	}
}
?>
<?php
require_once 'connect.php';
if (isset($_POST['disapprove'])) {
	$room_id = $_POST['room_id'];
	$query2 = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	$fetch2 = $query2->fetch_array();
	$conn->query("UPDATE `room_transaction` SET  `extra_bed` = '$extra_bed', 
			 `extra_pillow` = '$extra_pillow',  `extra_sheet` = '$extra_sheet',  `status` = 'disapprove', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total7' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	echo "<script>document.location='room_reserve.php'</script>";
}

?>