<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "eng">

<body>
<?php
	include('header_menu.php');
	?>
	<div class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">	
		<div class = "panel panel-default">
		<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM `event_transaction` WHERE `status` = 'Pending'");
				$f_p = $q_p->fetch_array();
				$a_p = $conn->query("SELECT COUNT(*) as total FROM `event_transaction` WHERE `status` = 'approved'");
				$f_a = $a_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM `event_transaction` WHERE `status` = 'Check In'");
				$f_ci = $q_ci->fetch_array();
			?>
			<div class = "panel-body">
			<?php
				include('event_menu.php');
				?>
				<br />
				<br />					

				<table id = "table" class = "table table-bordered">

					<thead>
						<tr>
							<th>Name</th>
							<th>Evenat Name</th>
							<th>Theme</th>
							<th>Event Date</th>
                            <th>No. Person</th>
							<th>Status</th>
							<th>Extra Snack</th>
							<th>Extra Lunch</th>
							<th>Bill</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `event_transaction` NATURAL JOIN `guest`  NATURAL JOIN `event_type` WHERE `status` = 'Check Out'");
							while($fetch = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $fetch['firstname']." ".$fetch['middlename']."".$fetch['lastname']?></td>
							<td><?php echo $fetch['event_name']?></td>
							<td><?php echo $fetch['event_type_id']?></td>
							<td><?php echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>"." @ "."<label>".date("h:i a", strtotime($fetch['checkin_time']))."</label>"?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']."+".$fetch['days']."DAYS"))."</label>"?></td>
							<td><?php echo $fetch['status']?></td>
							<td><?php if($fetch['extra_lunch'] == "0"){ echo "None";}else{echo $fetch['extra_lunch'];}?></td>
							<td><?php if($fetch['extra_snack'] == "0"){ echo "None";}else{echo $fetch['extra_snack'];}?></td>
							<td><?php echo "Php. ".$fetch['bill'].".00"?></td>
							<td><center><a class = "btn btn-success" href = "view_checkin.php?transaction_id=<?php echo $fetch['transaction_id']?>"> View</a>
							<a class = "btn btn-warning" href = "checkout_query.php?transaction_id=<?php echo $fetch['transaction_id']?>" onclick = "confirmationCheckin(); return false;"><i class = "glyphicon glyphicon-check"></i> Check Out</a></center></td>
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
<script type = "text/javascript">
	function confirmationCheckin(anchor){
		var conf = confirm("Are you sure you want to check out?");
		if(conf){
			window.location = anchor.attr("href");
		}
	}
</script>
</html>