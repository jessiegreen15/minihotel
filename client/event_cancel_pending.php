<?php
	require_once '../admin/connect.php';
	$conn->query("UPDATE `event_transaction` SET `status` = 'cancelled' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	header("location:event_reserve.php");
?>

