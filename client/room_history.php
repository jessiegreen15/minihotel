<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">

<body>
<?php
	include('header_menu.php');
	?>
	
	<div class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;  ">
		<div class = "panel panel-default">
			<div class = "panel-body">
			<div class = "alert alert-info">History
            </div>
				<?php
				include('profile.php');
				?>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Room #</th>
							<th>Room Type</th>
							<th>Reserved Date</th>
							<th>Check Out Date</th>
							<th>Bed</th>
							<th>Pillow</th>
							<th>Sheet</th>
							<th>Breakfast</th>
							<th>Room Price</th>
							<th>Downpayment</th>
							<th>Total Bill</th>
							<th>Current Bill</th>
							<th>Ammount Paid</th>
							<th>Action</th>

						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest`  NATURAL JOIN `room` NATURAL JOIN room_type WHERE `status` = 'Check Out' && `username` = '$fetch[username]'");
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['firstname']." ".$fetch['middlename']." ".$fetch['lastname']?></td>
                            <td><?php echo $fetch['room_id']?></td>
							<td><?php echo $fetch['room_type']?></td>
							<td><strong><?php if($fetch['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))){echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}else{echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}?></strong></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']."+".$fetch['days']."DAYS"))."</label>"?></td>
							<td><?php echo $fetch['extra_bed']." / per price ".$fetch['bed_price']?></td>
                            <td><?php echo $fetch['extra_pillow']." / per price ".$fetch['pillow_price']?></td>
                            <td><?php echo $fetch['extra_sheet']." / per price ".$fetch['sheet_price']?></td>
                            <td><?php echo $fetch['extra_breakfast']." / per price ".$fetch['breakfast_price']?>
							<td><?php echo $fetch['price']?></td>
							<td><?php echo $fetch['bill']* '0.3' ?></td>
							<td><?php echo $fetch['bill']?></td>
							<td><?php echo $fetch['bill'] - $fetch['changes'] + $fetch['amount']?></td>
							<td><?php echo $fetch['changes'] + $fetch['amount']?></td>
							<td><center><a class = "btn btn-success" name="cancelled" href = "cancel_pending.php?transaction_id=<?php echo $fetch['transaction_id']?>"><i class = "glyphicon glyphicon-check"></i> Cancel </a></td>

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

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>

<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>