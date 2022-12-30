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
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / Types of Event</div>
				<a class = "btn btn-success" href = "add_event_type.php"><i class = "glyphicon glyphicon-plus"></i> Add Event type</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Photo</th>
							<th>Event Type</th>
							<th>Description</th>
							<th>Meal Price</th>
							<th>Snack Price</th>
							<th>Reseravation fee</th>
							<th>Price</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = $conn->query("SELECT * FROM `event_type`");
						while($fetch = $query->fetch_array()){
					?>	
						<tr>
							<td><center><img src = "../photo/<?php echo $fetch['photo']?>" height = "100" width = "100"/></center></td>
							<td><?php echo $fetch['event_type_name']?></td>
							<td><?php echo $fetch['type_description']?></br></td>
							<td><?php echo $fetch['lunch_price']?></td>
							<td><?php echo $fetch['snack_price']?></td>
							<td><?php echo $fetch['reservation_fee']?></td>
							<td><?php echo $fetch['price']?></td>
							<td><center><a class = "btn btn-warning" href = "edit_event_type.php?event_type_id=<?php echo $fetch['event_type_id']?>"><i class = "glyphicon glyphicon-edit"></i> View</a> 
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