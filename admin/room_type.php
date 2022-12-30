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
				<div class="alert alert-info">Transaction / Room</div>
				<a class="btn btn-success" href="add_room_type.php"><i class="glyphicon glyphicon-plus"></i> Add type</a>
				<br />
				<br />
				<table id="table" class="table table-bordered">
					<thead>
						<tr>
							<th>Types of room</th>
							<th>Person</th>
							<th>Downpayment Per day</th>
							<th>Price</th>
							<th>Sheet Price</th>
							<th>Pillow Price</th>
							<th>Bed Price</th>
							<th>Breakfast Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = $conn->query("SELECT * FROM room_type ORDER BY room_type_id");
						while ($fetch = $query->fetch_array()) {
						?>
							<tr>
								<td><?php echo $fetch['room_type'] ?></td>
								<td><?php echo $fetch['person'] ?></td>
								<td><?php echo $fetch['downpayment'] ?></td>
								<td><?php echo $fetch['price'] ?></td>
								<td><?php echo $fetch['sheet_price'] ?></td>
								<td><?php echo $fetch['pillow_price'] ?></td>
								<td><?php echo $fetch['bed_price'] ?></td>
								<td><?php echo $fetch['breakfast_price'] ?></td>
								<td>
									<center><a class="btn btn-warning" href="edit_room_type.php?room_type_id=<?php echo $fetch['room_type_id'] ?>"><i class="glyphicon glyphicon-edit"></i> Edit</a></center>
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
	function confirmationDelete(anchor) {
		var conf = confirm("Are you sure you want to delete this record?");
		if (conf) {
			window.location = anchor.attr("href");
		}
	}
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#table").DataTable();
	});
</script>

</html>