<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">

<body>
<?php
	include('header_menu.php');
	?>
	
	<div class = "container-fluid"  style="max-width: 1500px; position: relative; margin-top:5%; ">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Dine and Lounge / Save Photo</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Photo </label>
							<input type = "file" class = "form-control" name = "photo" />
						</div>
						<br />
						<div class = "form-group">
							<button onclick = "confirmationadd(this); return false;" name = "add_dine" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require_once 'add_query_dine.php'?>
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
<script> function confirmationadd(anchor){
		var conf = confirm("Are you sure you want to add this picture to the Dine and lounge?");
		if(conf){
			window.location = anchor.attr("contactus.php");
		}
	} </script>
</html>