<?php
include('connect.php');
	if(ISSET($_POST['add_payment'])){
		$query = $conn->query("SELECT * FROM event_transaction NATURAL JOIN `event_type`  WHERE transaction_id ='$_REQUEST[transaction_id]'");
		$fetch = $query->fetch_array();
		$transaction_id = $fetch['transaction_id'];
		$amount = $_POST['amount'];
		$conn->query("UPDATE `event_transaction` SET `amount` = '$amount'  WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
		header("location:event_checkin.php");
	}
?>

