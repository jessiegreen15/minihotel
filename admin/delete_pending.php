<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `room_transaction` WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	header("location:room_reserve.php");
?>

