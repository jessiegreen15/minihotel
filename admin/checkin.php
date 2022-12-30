<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="eng">

<body>
	<?php
	include('header_menu.php');
	?>
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
							<th>Room no</th>
							<th>Name</th>
							<th>Room Type</th>
							<th>No. of Days</th>
							<th>Check In</th>
							<th>Check Out</th>
							<th>Status</th>
							<th>Services</th>
							<th>Extra Bed</th>
							<th>Extra Pillow</th>
							<th>Extra Sheet</th>
							<th>Breakfast</th>
							<th>Bill</th>
							<th>Paid</th>
							<th>Remaining Balance</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `status` = 'Check In' OR `status` = 'approved' && `service` = 'Reserved' ");
						while ($fetch = $query->fetch_array()) {
						?>
							<tr>
								<td><?php echo $fetch['room_id'] ?></td>
								<td><?php echo $fetch['firstname'] . " " . $fetch['lastname'] ?></td>
								<td><?php echo $fetch['room_type'] ?></td>
								<td><?php echo $fetch['days'] ?></td>
								<td><?php echo "<label style = 'color:#00ff00;'>" . date("M d, Y", strtotime($fetch['checkin'])) . "</label>" . "</label>" . " @ " . "<label>" . date("h:i a", strtotime($fetch['checkin_time'])) . "</label>" ?></td>
								<td><?php echo "<label style = 'color:#ff0000;'>" . date("M d, Y", strtotime($fetch['checkin'] . "+" . $fetch['days'] . "DAYS")) . "</label>" ?></td>
								<td><?php echo $fetch['status'] ?></td>
								<td><?php echo $fetch['service'] ?></td>
								<td><?php echo $fetch['extra_bed'] . " / per price " . $fetch['bed_price'] ?></td>
								<td><?php echo $fetch['extra_pillow'] . " / per price " . $fetch['pillow_price'] ?></td>
								<td><?php echo $fetch['extra_sheet'] . " / per price " . $fetch['sheet_price'] ?></td>
								<td><?php echo $fetch['extra_breakfast'] . " / per price " . $fetch['breakfast_price'] ?>
								<td><?php echo "Php. " . $fetch['bill'] . ".00" ?></td>
								<td><?php echo "Php. " . $fetch['amount'] + $fetch['changes'] . ".00" ?></td>
								<td><?php echo $fetch['bill'] - $fetch['amount'] - $fetch['changes']; ?></td>
								<td>
									<a class="btn btn-warning" href="view_room_checkin.php?transaction_id=<?php echo $fetch['transaction_id'] ?>"> View</a>
									<a class="btn btn-warning" href="checkout_query.php?transaction_id=<?php echo $fetch['transaction_id'] ?>" onclick="confirmationCheckin(); return false;"><i class="glyphicon glyphicon-check"></i> Check Out</a>
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
	function confirmationCheckin(anchor) {
		var conf = confirm("Are you sure you want to check out?");
		if (conf) {
			window.location = anchor.attr("href");
		}
	}
</script>

</html>