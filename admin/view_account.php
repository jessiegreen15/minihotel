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
				<div class = "alert alert-info">Account / Account</div>
				<?php
					$query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$fetch[admin_id]'");
					$hh = $query->fetch_array();
				?>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "admin_id=<?php echo $hh['admin_id']?>">
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
							<input style="border:none; background:#fff;" type = "text" class = "form-control" value = "<?php echo $hh['lastname']?>" name = "lastname" disabled />
						</div>
						<div class = "form-group">
							<label>Username </label>
							<input style="border:none; background:#fff;" type = "text" class = "form-control" value = "<?php echo $hh['username']?>" name = "username" disabled />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input style="border:none; background:#fff;" type = "password" class = "form-control" value = "<?php echo $hh['password']?>" name = "password" disabled/>
						</div>
						<br />
						<div class = "form-group">
							<a name = "edit_account" href="edit_account.php" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Edit account</a>
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