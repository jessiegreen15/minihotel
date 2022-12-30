<?php
	require_once 'connect.php';
	if(ISSET($_POST['add_guest'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contactno = $_POST['contactno'];
		$email = $_POST['email'];
		$checkin = $_POST['date'];
		$conn->query("INSERT INTO `guest` (firstname, middlename, lastname, address, contactno, email) VALUES('$firstname', '$middlename', '$lastname', '$address', '$contactno', '$email')");
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `contactno` = '$contactno'");
		$fetch = $query->fetch_array();
		$query2 = $conn->query("SELECT * FROM `event_transaction` WHERE `checkin` = '$checkin' && `event_type_id` = '$_REQUEST[event_type_id]' && `status` = 'Pending'");
		$row = $query2->num_rows;
		if($checkin < date("Y-m-d", strtotime('+8 HOURS'))){	
				echo "<script>alert('Must be present date')</script>";
			}else{
				if($row > 0){
					echo "<div class = 'col-md-4'>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							$q_date = $conn->query("SELECT * FROM `event_transaction` WHERE `status` = 'approved'");
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
							$event_type_id = $_REQUEST['event_type_id'];
							$event_name = $_REQUEST['event_name'];
							$people = $_POST['people'];
							$extra_lunch = $_POST['extra_lunch'];
							$extra_snack = $_POST['extra_snack'];

							$conn->query("INSERT INTO `event_transaction`(guest_id, extra_lunch, extra_snack,event_name, event_type_id, status, days, people, checkin ) VALUES ('$guest_id', '$extra_lunch','$extra_snack','$event_name', '$event_type_id', 'approved', '1', '$people','$checkin')");

							echo "<script>document.location='event_reserve.php'</script>";
						}
				}	
			}	
	}	
?>