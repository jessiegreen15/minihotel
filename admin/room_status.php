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
                            <th>Action</th>
                            <th>Room no</th>
							<th>Room Type</th>
                            <th>Condition</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type   ORDER BY room_id ");
							while($fetch = $query->fetch_array()){				
						?>
						<tr>
                            <td><center><a href=""><i class = "glyphicon glyphicon-eye-open"></i></a>
							<a onclick = "confirmationCheckin(); return false;"><i class = "glyphicon glyphicon-check"></i></a></center></td>
                            <td><?php echo $fetch['room_id']?></td>							
                            <td><?php echo $fetch['room_type']?></td>
							<td><?php echo $fetch['room_status_name']?></td>
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