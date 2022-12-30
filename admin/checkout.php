<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
	</head>
<body>
	<?php
		include('header_menu.php');

	?>
	<br />
	<div class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">	
		<div class = "panel panel-default">
		<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `room_transaction` WHERE `status` = 'pending'");
				$f_p = $q_p->fetch_array();
				$a_p = $conn->query("SELECT COUNT(*) as total FROM `room_transaction` WHERE `status` = 'approved'");
				$f_a = $a_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `room_transaction` WHERE `status` = 'Check In'");
				$f_ci = $q_ci->fetch_array();
			?>
			<div class = "panel-body">
			<?php
				include('room_reserve_button.php');
				?>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
						<th>Name</th>
							<th>Room Type</th>
							<th>Room no</th>
							<th>No. of Days</th>
							<th>Check In</th>
							<th>Check Out</th>
							<th>Status</th>
							<th>Bill</th>
							<th>Amount Paid</th>
							<th>Remaining Balance</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `status` = 'Check Out'") ;
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
							<td><?php echo $fetch['room_type']?></td>
							<td><?php echo $fetch['room_id']?></td>
							<td><?php echo $fetch['days']?></td>
							<td><?php echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>"."</label>"." @ "."<label>".date("h:i a", strtotime($fetch['checkin_time']))."</label>"?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']."+".$fetch['days']."DAYS"))."</label>"." @ "."<label>".date("h:i a", strtotime($fetch['checkout_time']))."</label>"?></td>
							<td><?php echo $fetch['status']?></td>
							<td><?php echo "Php. ".$fetch['bill'].".00"?></td>
							<td><?php echo "Php. ".$fetch['amount'].".00"?></td>
							<td><?php echo "Php. ".$fetch['bill'] - $fetch['amount'].".00"?></td>
							<td><center><a class = "btn btn-warning" href = "view_room_checkout.php?transaction_id=<?php echo $fetch['transaction_id']?>"> View</a>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
	<?php
	include('footer.php');
	?>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>