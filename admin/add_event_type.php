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
				<div class = "alert alert-info">Transaction / Event / Add Event type</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "form-group">
							<label>Event Type </label>
							<input type = "text" class = "form-control" name = "event_type_name" required />
						</div>
						<div class = "fori">
							<label>Reservation Price</label>
							<input type = "number" min="0" max="999999"  name = "reservation_fee" class = "form-control"required />
						</div>

						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min="0" max="999999" class = "form-control" name = "price" required/>
						</div>
						<div class = "form-group">
							<label>Meal Price </label>
							<input type = "number" min="0" max="999999" class = "form-control" name = "lunch_price" required/>
						</div>
						<div class = "form-group">
							<label>Meal Description </label>
							<textarea type = "text" class = "form-control" name = "lunch_description" required></textarea>
						</div>
						<div class = "form-group">
							<label>Snack Price </label>
							<input type = "number" min="0" max="999999" class = "form-control" name = "snack_price" required/>
						</div>
						<div class = "form-group">
							<label>Snack Description </label>
							<textarea type = "text" min="0" max="999999" class = "form-control" name = "snack_description" required></textarea>
						</div>
						<div class = "form-group">
							<label>Decor Description </label>
							<textarea type = "text" class = "form-control" name = "type_description" required></textarea>
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "lbl">[Photo]</center>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" required/>
						</div>
						<br />
						<div class = "form-group">
							<button onclick = "confirmationadd(this);" name = "add_event_type" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require_once 'add_query_event_type.php'?>
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
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
	function confirmationadd(anchor){
		var conf = confirm("Are you sure you want to add this event?");
		if(conf){
			window.location = anchor.attr("contactus.php");
		}
	}
</script>
</html>