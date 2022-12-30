<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_form'])){
		$query3 = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
		$fetch = $query3->fetch_array();
		$extra_bed = $_POST['extra_bed'];
		$extra_pillow = $_POST['extra_pillow'];
		$extra_sheet = $_POST['extra_sheet'];
		$extra_breakfast = $_POST['extra_breakfast'];
		$room_id = $fetch['room_id'];
		$query = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN room_type WHERE `room_id` = '$room_id' && `status` = 'Check In'");
		$row = $query->num_rows;
		$query2 = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
		$fetch2 = $query2->fetch_array();

		$time = date("H:i:s", strtotime("+6 HOURS"));
		if($fetch2['checkin'] < date("Y-m-d", strtotime('+6 HOURS'))){	
				echo "<script>alert('Sorry reservation date already passed, please book now instead')</script>";
				$conn->query("UPDATE `room_transaction` SET  `status` = 'reservation passed' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
				echo "<script>document.location='approve.php'</script>";
			}else{
		if($row > 0){
			echo "<script>alert('Room not available')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
			$fetch2 = $query2->fetch_array();
			$total = $fetch2['price'] * $fetch2 ['days'];
			$total2 = $fetch2['bed_price'] * $extra_bed;
			$total3 = $fetch2['pillow_price'] * $extra_pillow;
			$total4 = $fetch2['sheet_price'] * $extra_sheet;
			$total5 = $fetch2['breakfast_price'] * $extra_breakfast;

			$total6 = $total + $total2;//$fetch2['room_reservation_fee'];

			$total7 = $total6 + $total3;
			$total8 = $total7 + $total4;	
			$total9 = $total8 + $total5;
			$checkout = date("Y-m-d", strtotime($fetch2['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE `room_transaction` SET  `extra_bed` = '$extra_bed', 
			 `extra_pillow` = '$extra_pillow',  `extra_sheet` = '$extra_sheet',  `status` = 'Check In', `checkin_time` = '$time', `checkout` = '$checkout', `bill` = '$total9', `extra_breakfast` = '$extra_breakfast' WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
		echo "<script>document.location='approve.php'</script>";
	}
	}
}
?>                    
