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
	<div class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">	
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / Event / Event Details </div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $conn->query("SELECT * FROM `event_type` WHERE `event_type_id` = '$_REQUEST[event_type_id]'") ;
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
					<div class = "form-group">
					<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
                            <img src = "../photo/<?php echo $fetch['photo']?>" id = "lbl" width = "100%" height = "100%"/>
								<center id = "lbl">[Photo]</center>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<div class = "form-group">
							<label>Event Type </label>
							<input type = "text" name="event_type_name" class = "form-control" value="<?php echo $fetch['event_type_name']?>" required/>
						</div>
						<div class = "fori">
							<label>Reservation Price</label>
							<input type = "number"  name = "reservation_fee" value="<?php echo $fetch['reservation_fee']?>" class = "form-control"/>
						</div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" class = "form-control" value="<?php echo $fetch['price']?>" name = "price" />
						</div>
						<div class = "form-group">
							<label>Meal Price </label>
							<input type = "number" class = "form-control" value="<?php echo $fetch['lunch_price']?>" name = "lunch_price" />
						</div>
						<div class = "form-group">
							<label>Meal Description </label>
							<textarea type = "text" class = "form-control"  name = "lunch_description" ><?php echo $fetch['lunch_description']?></textarea>
						</div>
						<div class = "form-group">
							<label>Snack Price </label>
							<input type = "number" class = "form-control" value="<?php echo $fetch['snack_price']?>" name = "snack_price" />
						</div>
						<div class = "form-group">
							<label>Snack Description </label>
							<textarea type = "text" class = "form-control" name = "snack_description" ><?php echo $fetch['snack_description']?></textarea>
						</div>
						<div class = "form-group">
							<label>Decor Description </label>
							<textarea type = "text" class = "form-control" name = "type_description" ><?php echo $fetch['type_description']?></textarea>
						</div>

						<br />
						<div class = "form-group">
							<button onclick = "confirmationedit(this); return false;" name = "edit_event_type" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php require_once 'edit_query_event_type.php'?>
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
	function confirmationedit(anchor){
		var conf = confirm("Are you sure you want to add this picture to the gallery?");
		if(conf){
			window.location = anchor.attr("contactus.php");
		}
	}
</script>
</html>