<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="en">

<body>
	<?php
	include('header_menu.php');
	?>
	<div class="container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="alert alert-info">Transaction / Room / Edit Room type</div>
				<br />
				<div class="col-md-4">
					<?php
					$query = $conn->query("SELECT * FROM room_type WHERE `room_type_id` = '$_REQUEST[room_type_id]'");
					$fetch = $query->fetch_array();
					?>
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Room Type </label>
							<input type="text" class="form-control" value="<?php echo $fetch['room_type'] ?>" name="room_type" />
						</div>
						<div class="form-group">
							<label>Person </label>
							<input type="text" class="form-control" value="<?php echo $fetch['person'] ?>" name="person" />
						</div>
						<div class="form-group">
							<label>Downpayment % </label>
							<input type="number" min="0" max="999999" value="<?php echo $fetch['downpayment'] ?>" class="form-control" name="downpayment" />
						</div>
						<div class="form-group">
							<label>Price </label>
							<input type="number" min="0" max="999999999" value="<?php echo $fetch['price'] ?>" class="form-control" name="price" />
						</div>
						<div class="form-group">
							<label>Sheet Price </label>
							<input type="number" min="0" max="999999999" class="form-control" value="<?php echo $fetch['sheet_price'] ?>" name="sheet_price" />
						</div>
						<div class="form-group">
							<label>Pillow Price</label>
							<input type="number" min="0" max="999999999" value="<?php echo $fetch['pillow_price'] ?>" class="form-control" name="pillow_price" />
						</div>
						<div class="form-group">
							<label>Bed Price</label>
							<input type="number" min="0" max="999999999" value="<?php echo $fetch['bed_price'] ?>" class="form-control" name="bed_price" />
						</div>
						<div class="form-group">
							<label>Breakfast Price</label>
							<input type="number" min="0" max="999999999" value="<?php echo $fetch['breakfast_price'] ?>" class="form-control" name="breakfast_price" />
						</div>
						<br />
						<div class="form-group">
							<button onclick="confirmationedit(this); return false;" name="edit_room_type" class="btn btn-info form-control"><i class="glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require_once 'edit_query_room_type.php' ?>
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
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function() {
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if (!files.length || !window.FileReader) {
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if (/^image/.test(files[0].type)) {
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function() {
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});

	function confirmationedit(anchor) {
		var conf = confirm("Are you sure you want to add this picture to the gallery?");
		if (conf) {
			window.location = anchor.attr("contactus.php");
		}
	}
</script>

</html>