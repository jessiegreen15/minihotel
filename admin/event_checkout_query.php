<?php
	require_once 'connect.php';
	$time = date("H:i:s", strtotime("+8 HOURS"));
	$conn->query("UPDATE `event_transaction` SET `checkout_time` = '$time', `status` = 'Check Out' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	header("location:event_checkin.php");
?>