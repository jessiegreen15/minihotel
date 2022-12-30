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
	
	<div class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%; ">
		<div class = "panel panel-default">
			<div class = "panel-body">
			<div class = "alert alert-info">Event Status / Disapprove
            </div>
				<?php
				include('profile2.php');
				?>
				<br />
				<br />
<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
						<th>Name</th>
							<th>Contact No</th>
							<th>Event name</th>
							<th>Decoration</th>
							<th>Reserve Date</th>
							<th>Price</th>
							<th>Meal</th>
							<th>Snack</th>
							<th>Reservation fee</th>
							<th>Bill</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN `guest` NATURAL JOIN `event_type` WHERE `status` = 'Cancelled' && `firstname` = '$fetch[firstname]' && `middlename` = '$fetch[middlename]' && `lastname` = '$fetch[lastname]'");
							while($fetch = $query->fetch_array()){
						?>
						<tr>
						<td><?php echo $fetch['firstname']." ".$fetch['middlename']." ".$fetch['lastname']?></td>
							<td><?php echo $fetch['contactno']?></td>
							<td><?php echo $fetch['event_type_name']?></td>
							<td><?php echo $fetch['event_name']?></td>
							<td><strong><?php if($fetch['checkin'] <= date("Y-m-d", strtotime("+8 HOURS"))){echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}else{echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>";}?></strong></td>
							<td><?php echo $fetch['price']?></td>
                            <td><?php echo $fetch['extra_lunch']."/ Price per person ".$fetch['lunch_price']?></td>
							<td><?php echo $fetch['extra_snack']."/ Price per person ".$fetch['snack_price']?></td>
							<td><?php echo $fetch['reservation_fee']?></td><?php $lunch =$fetch['extra_lunch'] * $fetch['lunch_price']; $snack =$fetch['extra_snack'] * $fetch['snack_price']; ?>
							<td><?php echo $fetch['reservation_fee']+$lunch + $snack+ $fetch['price']?></td>
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
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
</html>