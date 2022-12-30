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
	<div class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;  ">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Account / Account Details</div>
				<br />	<?php
					$query = $conn->query("SELECT * FROM `guest` WHERE `guest_id` = '$fetch[guest_id]'");
					$hh = $query->fetch_array();
				?>
				<div class = "col-md-4">	
				<form method = "POST" action = "">
						<div class = "form-group">
							<label>Firstname </label>
							<input style="border:none; background:#fff;" type = "text" class = "form-control" value = "<?php echo $hh['firstname']?>" name = "firstname" disabled/>
						</div>
						<div class = "form-group">
							<label>Middlename </label>
							<input style="border:none; background:#fff;" type = "text" class = "form-control" value = "<?php echo $hh['middlename']?>" name = "middlename" disabled/>
						</div>
						<div class = "form-group">
							<label>Lastname </label>
							<input style="border:none; background:#fff;" type = "text" class = "form-control" value = "<?php echo $hh['lastname']?>" name = "lastname" disabled/>
						</div>
						<div class = "form-group">
							<label>Address </label>
							<input style="border:none; background:#fff;" type = "text" class = "form-control" value = "<?php echo $hh['address']?>" name = "address" disabled/>
						</div>
						<div class = "form-group">
							<label>Contact </label>
							<input style="border:none; background:#fff;" type = "number" class = "form-control" value = "<?php echo $hh['contactno']?>" name = "contactno" disabled/>
						</div>
						<div class = "form-group">
							<label>Email </label>
							<input style="border:none; background:#fff;" type = "email" class = "form-control" value = "<?php echo $hh['email']?>" name = "email" disabled/>
						</div>
						<div class = "form-group">
							<label>Username </label>
							<input style="border:none; background:#fff;" type = "text" class = "form-control" value = "<?php echo $hh['username']?>" name = "username" disabled/>
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input style="border:none; background:#fff;" type = "text" class = "form-control" value = "<?php echo $hh['password']?>" name = "password" disabled/>
						</div>
						<br />
						<div class = "form-group">
							<a name = "edit_account" href="update_update.php" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Edit Account</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>