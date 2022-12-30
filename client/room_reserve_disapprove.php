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
			<div class = "alert alert-info">Room Status / Cancelled
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
							<th>Check Out</th>
							<th>Room Price</th>
							<th>Bill</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest`  NATURAL JOIN `room` NATURAL JOIN room_type WHERE `status` = 'Disapprove' && `username` = '$fetch[username]'");
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['firstname']." ".$fetch['middlename']." ".$fetch['lastname']?></td>
                            <td><?php echo $fetch['room_id']?></td>
							<td><?php echo $fetch['room_type']?></td>
							<td><strong><?php if($fetch['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))){echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}else{echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}?></strong></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']."+".$fetch['days']."DAYS"))."</label>"?></td>
							<td><?php echo $fetch['days']*$fetch['price']?></td>
							<td><?php echo $fetch['price']?></td>
							<td><?php echo $fetch['status']?></td>
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