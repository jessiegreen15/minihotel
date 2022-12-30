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
				<div class = "alert alert-info">Account / Modify Account</div>
				<br />	<?php
					$query = $conn->query("SELECT * FROM `guest` WHERE `guest_id` = '$fetch[guest_id]'");
					$hh = $query->fetch_array();
				?>
				<div class = "col-md-4">	
				<form method = "POST" action = "edit_query_account.php?guest_id=<?php echo $hh['guest_id']?>">
						<div class = "form-group">
							<label>Firstname </label>
							<input type = "text" class = "form-control" value = "<?php echo $hh['firstname']?>" name = "firstname" />
						</div>
						<div class = "form-group">
							<label>Middlename </label>
							<input type = "text" class = "form-control" value = "<?php echo $hh['middlename']?>" name = "middlename" />
						</div>
						<div class = "form-group">
							<label>Lastname </label>
							<input type = "text" class = "form-control" value = "<?php echo $hh['lastname']?>" name = "lastname" />
						</div>
						<div class = "form-group">
							<label>Address </label>
							<input type = "text" class = "form-control" value = "<?php echo $hh['address']?>" name = "address" />
						</div>
						<div class = "form-group">
							<label>Contact </label>
							<input type = "number" class = "form-control" value = "<?php echo $hh['contactno']?>" name = "contactno" />
						</div>
						<div class = "form-group">
							<label>Email </label>
							<input type = "email" class = "form-control" value = "<?php echo $hh['email']?>" name = "email" />
						</div>
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" value = "<?php echo $hh['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "text" class = "form-control" value = "<?php echo $hh['password']?>" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button onclick = "confirmationadd(this); return false;" name = "edit_account" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
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
<script> function confirmationadd(anchor){
		var conf = confirm("Are you sure you want to make changes?");
		if(conf){
			window.location = anchor.attr("");
		}
	} </script>
</html>