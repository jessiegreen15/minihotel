<?php
	require_once 'connect.php';
	$conn->query("UPDATE `room_transaction` SET `status` = 'cancelled' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	header("location:event_epproved.php");
?>

