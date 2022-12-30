<?php
require_once 'connect.php';
if (isset($_POST['add_guest'])) {
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
	$contactno = $_POST['contactno'];
	$email = $_POST['email'];
	$checkin = $_POST['date'];
	$days = $_POST['days'];
	$checkout = date("Y-m-d", strtotime($checkin . "+" . $days . "DAYS"));
	$room_id = $_REQUEST['room_id'];
	$conn->query("INSERT INTO `guest` (firstname, middlename, lastname, address, contactno, email) VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactno', '$email')");
	$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'");
	$fetch = $query->fetch_array();
	$query2 = $conn->query("SELECT *  FROM room_transaction WHERE room_id = '$_REQUEST[room_id]' && `status` = 'Check In' &&  checkout >= '$checkin' AND checkin <= '$checkout' OR `status` = 'approved' && service = 'Under Maintainance' &&  checkout >= '$checkin' AND checkin <= '$checkout'");
	$row = $query2->num_rows;

	$time = date("H:i:s", strtotime("+6 HOURS"));
	if ($checkin < date("Y-m-d", strtotime("+8 HOURS"))) {
		echo "<script>alert('Check in now only accept till 2 hours before midnight')</script>";
	} else {
		if ($row > 0) {
			echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Room not Available</label><br />";

			"</div>";
		} else {
			if ($guest_id = $fetch['guest_id']) {

				$query2 = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type WHERE `room_id` = '$_REQUEST[room_id]'");
				$fetch2 = $query2->fetch_array();

				$room_id = $_REQUEST['room_id'];
				$total = $fetch2['price'] * $days;
				$extra_bed = $_POST['extra_bed'];
				$extra_pillow = $_POST['extra_pillow'];
				$extra_sheet = $_POST['extra_sheet'];
				$extra_breakfast = $_POST['extra_breakfast'];
				$total2 = $fetch2['bed_price'] * $extra_bed;
				$total3 = $fetch2['pillow_price'] * $extra_pillow;
				$total4 = $fetch2['sheet_price'] * $extra_sheet;
				$total5 = $fetch2['breakfast_price'] * $extra_breakfast;
				$total6 = $total + $total2;
				$total7 = $total6 + $total3;
				$total8 = $total7 + $total4;
				$total9 = $total8 + $total5;
				$total9 = $total8 + $total5;
				$conn->query("INSERT INTO `room_transaction`( guest_id, room_id, extra_bed, extra_pillow, extra_sheet, status, days, checkin, checkin_time, checkout, bill, extra_breakfast, changes, reserve) VALUES 
							('$guest_id', '$room_id', '$extra_bed' , '$extra_pillow', '$extra_sheet', 'Check In', '$days', '$checkin', '$time','$checkout','$total7', extra_breakfast, '$total7','false')");
				$conn->query("UPDATE `room` SET `room_status_name` = 'Occupied' WHERE `room_id` = '$fetch2[room_id]'");
				echo "<script>document.location='room_reserve.php'</script>";
			} else {
				echo "<script>alert('Error Javascript Exception!')</script>";
			}
		}
	}
}
