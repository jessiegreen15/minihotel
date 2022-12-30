<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `event_transaction` WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	header("location:event_approve.php");
?>

