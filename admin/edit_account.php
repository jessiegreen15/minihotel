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
				<div class = "alert alert-info">Account / Modify Account</div>
				<?php
					$query = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$fetch[admin_id]'");
					$hh = $query->fetch_array();
				?>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "edit_query_account.php?admin_id=<?php echo $hh['admin_id']?>">
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
							<label>Username </label>
							<input type = "text" class = "form-control" value = "<?php echo $hh['username']?>" name = "username" />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" value = "<?php echo $hh['password']?>" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button onclick = "confirmationupdate(this); return false;" name = "edit_account" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
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
<script>	function confirmationupdate(anchor){
		var conf = confirm("Are you sure you want to update your account?");
		if(conf){
			window.location = anchor.attr("view_account.php");
		}
	} </script>
</html>