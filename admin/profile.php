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
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Account / Modify Account</div>

				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "edit_query_account.php">
						<div class = "form-group">
							<label>Firstname </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['firstname']?>" name = "name" />
						</div>
						<div class = "form-group">
							<label>Middlename </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['middlename']?>" name = "name" />
						</div>
						<div class = "form-group">
							<label>Lastname </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['lastname']?>" name = "name" />
						</div>
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" value = "<?php echo $fetch['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" value = "<?php echo $fetch['password']?>" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_account" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Update</button>
						</div>
					</form>
				</div>
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
</html>