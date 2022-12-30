
<?php
	require_once '../admin/connect.php';
	if(ISSET($_POST['add_guest'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$checkin = $_POST['date'];
		$conn->query("UPDATE `guest` SET  `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `address` = '$address', `contactno` = '$contactno' WHERE `guest_id` = '$_REQUEST[guest_id]'");
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'");
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `event_transaction` WHERE `checkin` = '$checkin' && `event_id` = '$_REQUEST[event_id]' && `status` = 'Pending'");
		$row = $query2->num_rows;
		if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Must be present date')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							$q_date = $conn->query("SELECT * FROM `event_transaction` WHERE `status` = 'Pending'");
							while($f_date = $q_date->fetch_array()){
								echo "<ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($f_date['checkin']."+8HOURS"))."</label>	
										</li>
									</ul>";
							}
						"</div>";
				}else{	
						if($guest_id = $fetch['guest_id']){
							$event_id = $_REQUEST['event_id'];
							$conn->query("INSERT INTO `event_transaction`(guest_id, event_id, status, checkin) VALUES('$guest_id', '$event_id', 'Pending', '$checkin')");
							header("location:reply_reserve.php");
						}else{
							echo "<script>alert('Error Javascript Exception!')</script>";
						}
				}	
			}	
	}	
?>