
<?php
require_once 'connect.php';
if (isset($_POST['approve'])) {
	$room_id = $_POST['room_id'];
	$amount = $_POST['amount'];
	$query2 = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	$fetch2 = $query2->fetch_array();
	$conn->query("UPDATE `room_transaction` SET  `status` = 'Check In', `amount` = '$amount' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	echo "<script>document.location='checkin.php'</script>";
}

?>