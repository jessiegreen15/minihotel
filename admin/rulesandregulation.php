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
	<div class = "container-fluid"  style="max-width: 1500px; position: relative; margin-top:5%; ">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Rules and Regulation</div>
				<a class = "btn btn-success" href = "add_rule.php"><i class = "glyphicon glyphicon-plus"></i> Add Rules and Regulation</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Title </th>
							<th>Rule</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = $conn->query("SELECT * FROM `rulesregulations`" );
						while($fetch = $query->fetch_array()){
					?>	
						<tr>
							<td><?php echo $fetch['Title']?></td>
							<td><?php echo $fetch['rule']?></td>
							<td><center><a class = "btn btn-warning" href = "edit_rule.php?id=<?php echo $fetch['id']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a> 
							<a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_rule_query.php?id=<?php echo $fetch['id']?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center>
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