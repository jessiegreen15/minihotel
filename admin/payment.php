<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_pay'])){
		$amount_two = $_POST['changes_two'];
		$amenities_title = $_POST['amenities_title'];
		$conn->query("UPDATE `room_transaction` SET `changes_two` = '$amount_two' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
		header("location:checkin.php");
	}	?>