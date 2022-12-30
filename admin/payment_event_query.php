<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_payment'])){

			$query2 = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN `guest` NATURAL JOIN `event` NATURAL JOIN event_type WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			$fetch5 = $query2->fetch_array();		
			$amount = $_POST['amount'];
            $changes = $amount - $fetch5['bill'];
            $payment = "PAID";
			$conn->query("UPDATE `event_transaction` SET   `payment` = '$payment', `amount` = '$amount', `changes` = '$changes' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			header("location:event_history.php");
		}
	
?>