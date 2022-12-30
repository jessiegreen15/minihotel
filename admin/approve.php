<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="en">

<head>

</head>

<body>
	<?php
	include('header_menu.php');
	?>
	<br />
	<div class="container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">
		<div class="panel panel-default">

			<div class="panel-body">
				<?php
				include('room_reserve_button.php');
				?>
				<br />
				<br />
				<table id="table" class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Contact No</th>
							<th>Room #</th>
							<th>Room Type</th>
							<th>No. of Days</th>
							<th>Reserved Date</th>
							<th>Check out Date</th>
							<th>Room Price</th>
							<th>Amount Paid</th>
							<th>Remaining</th>
							<th>Bill</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `status` = 'approved'");
						while ($fetch = $query->fetch_array()) {
						?>
							<tr>
								<td><?php echo $fetch['firstname'] . " " . $fetch['lastname'] ?></td>
								<td><?php echo $fetch['contactno'] ?></td>
								<td><?php echo $fetch['room_id'] ?></td>
								<td><?php echo $fetch['room_type'] ?></td>
								<td><?php echo $fetch['days'] ?></td>
								<td><strong><?php if ($fetch['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))) {
												echo "<label style = 'color:#ff0000;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>";
											} else {
												echo "<label style = 'color:#00ff00;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>";
											} ?></strong></td>
								<td><?php echo "<label style = 'color:#ff0000;'>" . date("M d, Y", strtotime($fetch['checkin'] . "+" . $fetch['days'] . "DAYS")) . "</label>" ?></td>
								<td><?php echo $fetch['price'] ?></td>
								<td><?php echo $fetch['changes'] + $fetch['amount'] ?></td>
								<td><?php echo $fetch['bill'] - $fetch['changes'] + $fetch['amount']; ?></td>
								<td><?php echo $fetch['days'] * $fetch['price'] + $fetch['room_reservation_fee'] ?></td>
								<td><?php echo $fetch['status'] ?></td>
								<td>
									<a class="btn btn-danger" onclick="confirmationDelete(); return false;" href="cancel_query.php?transaction_id=<?php echo $fetch['transaction_id'] ?>"><i class="glyphicon glyphicon-trash"></i> Cancel</a></br>
								</td>
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
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dataTables.js"></script>
<script src="../js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#table").DataTable();
	});
</script>
<script type="text/javascript">
	function confirmationDelete(anchor) {
		var conf = confirm("Are you sure you want to cancel this reservation?");
		if (conf) {
			window.location = anchor.attr("href");
		}
	}
</script>

</html>