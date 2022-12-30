<?php
require_once 'connect.php';
if (isset($_POST['add_guest'])) {
    $checkin = $_POST['date'];
    $days = $_POST['days'];
    $checkout = date("Y-m-d", strtotime($checkin . "+" . $days . "DAYS"));
    $room_id = $_REQUEST['room_id'];
    $fetch = $query->fetch_array();
    $query2 = $conn->query("SELECT *  FROM room_transaction WHERE room_id = '$_REQUEST[room_id]' && `status` = 'check In' &&  checkout >= '$checkin' AND checkin <= '$checkout'");
    $row = $query2->num_rows;

    $time = date("H:i:s", strtotime("+6 HOURS"));
    if ($checkin < date("Y-m-d", strtotime('+6 HOURS'))) {
        echo "<script>alert('Must be present date')</script>";
    } else {
        if ($row > 0) {
            echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
            $q_date = $conn->query("SELECT * FROM `room_transaction` WHERE room_id = '$_REQUEST[room_id]' && `status` = 'Approved'");
            while ($f_date = $q_date->fetch_array()) {
                echo "<ul>
										<li>	
											<label class = 'alert-danger'>" . date("M d, Y", strtotime($f_date['checkin'] . "+8HOURS")) . " Between " . date("M d, Y", strtotime($f_date['checkout'] . "+8HOURS")) . "</label>	
										</li>
									</ul>";
            }
            "</div>";
        } else {
            if ($room_id = $_REQUEST['room_id']) {

                $query2 = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type WHERE `room_id` = '$_REQUEST[room_id]'");
                $fetch2 = $query2->fetch_array();
                $reason = $_POST['reason'];
                $restriction_description = $_POST['restriction_description'];
                $conn->query("INSERT INTO `room_transaction`( room_id, status, days, checkin, checkout, service,  restriction_description, reason) VALUES 
			('$room_id', 'Approved', '$days', '$checkin', '$checkout', 'Under Maintainance', '$restriction_description', '$reason')");
                echo "<script>document.location='room_condition.php'</script>";
            } else {
                echo "<script>alert('Error Javascript Exception!')</script>";
            }
        }
    }
}
