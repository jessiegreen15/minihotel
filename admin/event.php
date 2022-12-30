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
	<div class = "container-fluid" style="width:100%; height:auto;">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / Event</div>
				<a class = "btn btn-success" href = "add_event.php"><i class = "glyphicon glyphicon-plus"></i> Add Event</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Event id</th>
							<th>Event name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = $conn->query("SELECT * FROM `event`");
						while($fetch = $query->fetch_array()){
					?>	
						<tr>
						<td><?php echo $fetch['event_name']?></td>
                        <td><?php echo $fetch['description']?></td>

							<td><center><a class = "btn btn-warning" href = "edit_event.php?event_id=<?php echo $fetch['event_id']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a></td>
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