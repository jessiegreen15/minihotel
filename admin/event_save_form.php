<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form'])){
		$extra_lunch = $_POST['extra_lunch'];
		$extra_snack = $_POST['extra_snack'];
		$query = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN event_type WHERE `transaction_id` = '$_REQUEST[transaction_id]' && `status` = 'Check In'");
		$row = $query->num_rows;
		$time = date("H:i:s", strtotime("+6 HOURS"));
		if($row > 0){
			echo "<script>alert('Event not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN `guest` NATURAL JOIN event_type WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			$fetch2 = $query2->fetch_array();
			$total = $fetch2['price'] * $fetch2 ['days'];
			$total2 = $fetch2['lunch_price'] * $extra_lunch;
			$total3 = $fetch2['snack_price'] * $extra_snack;
			$total4 = $total2 + $total3;
			$total5 = $total4 + $total;			
			$total6 = $fetch2['reservation_fee'] + $total5;
			$checkout = date("Y-m-d", strtotime($fetch2['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `event_transaction` SET  `extra_lunch` = '$extra_lunch', 
			 `extra_snack` = '$extra_snack',  `status` = 'Check In', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total6' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			header("location:event_checkin.php");
		}
	}
?>


