<?php
	require_once 'connect.php';
	$conn->query("UPDATE `event_transaction` SET `status` = 'cancelled' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
	header("location:disapprove.php");
?>

