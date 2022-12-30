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
	$query2 = $conn->query("SELECT *  FROM room_transaction WHERE room_id = '$_REQUEST[room_id]' && `status` = 'approved' &&  checkout >= '$checkin' AND checkin <= '$checkout'");
	$row = $query2->num_rows;

	$time = date("H:i:s", strtotime("+6 HOURS"));
	if ($checkin < date("Y-m-d", strtotime('+8 HOURS'))) {
		echo "<script>alert('Must be present date')</script>";
	} else {
		if ($row > 0) {
			echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
			$q_date = $conn->query("SELECT * FROM `room_transaction` WHERE room_id = '$_REQUEST[room_id]' && `status` = 'approved'");
			while ($f_date = $q_date->fetch_array()) {
				echo "<ul>
										<li>	
											<label class = 'alert-danger'>" . date("M d, Y", strtotime($f_date['checkin'] . "+8HOURS")) . " Between " . date("M d, Y", strtotime($f_date['checkout'] . "+8HOURS")) . "</label>	
										</li>
									</ul>";
			}
			"</div>";
		} else {
			if ($guest_id = $fetch['guest_id']) {

				$query2 = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type WHERE `room_id` = '$_REQUEST[room_id]'");
				$fetch2 = $query2->fetch_array();

				$room_id = $_REQUEST['room_id'];
				$total = $fetch2['price'] * $days;
				$total2 = $total;
				$conn->query("INSERT INTO `room_transaction`( guest_id, room_id, status, days, checkin, checkout, bill, changes) VALUES 
			('$guest_id', '$room_id', 'approved', '$days', '$checkin', '$checkout', '$total2', '$total2')");
				echo "<script>document.location='room_reserve.php'</script>";
			} else {
				echo "<script>alert('Error Javascript Exception!')</script>";
			}
		}
	}
}
