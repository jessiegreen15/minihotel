<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="en">

<head>

</head>

<body>
	<?php
	include('header_menu.php');
	?>
	<div class="container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="alert alert-info">Transaction / Room / Change Room</div>
				<br />
				<div class="col-md-4">
					<?php
					$query = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type WHERE `room_id` = '$_REQUEST[room_id]'");
					$fetch = $query->fetch_array();
					?>
					<form method="POST" enctype="multipart/form-data">

						<div class="form-group">
							<label>Photo </label>
							<div id="preview" style="width:150px; height :150px; border:1px solid #000;">
								<img src="../photo/<?php echo $fetch['photo'] ?>" id="lbl" width="100%" height="100%" />
								<center id="lbl">[Photo]</center>
							</div>
							<input type="file" required="required" id="photo" name="photo" />
						</div>
						<div class="form-group">
							<label>Room Number </label>
							<input type="text" class="form-control" value="<?php echo $fetch['room_id'] ?>" name="room_id" disabled />
						</div>
						<div class="col-md form-group mb-3" data-for="Capacity">
							<label class="label1" for="Capacity-form5-q">Room Types</label>
							<select id="test" name="room_type" class="form-control">

								<?php
								require('connect.php');
								$sql = "SELECT room_type From room_type";
								$result = mysqli_query($conn, $sql);
								while ($row = mysqli_fetch_array($result)) {
									echo "<option selected='selected' >" . $row['room_type'];
								}
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Description </label>
							<input type="text" class="form-control" value="<?php echo $fetch['description'] ?>" name="description" />
						</div>
						<div id="result"></div> <br />
						<br />
						<div class="form-group">
							<button onclick="confirmationedit(this); return false;" name="edit_room" class="btn btn-warning form-control"><i class="glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php require_once 'edit_query_room.php' ?>
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

	function load_data(query) {
		$.ajax({
			url: "search_room_types.php",
			method: "POST",
			data: {
				query: query
			},
			success: function(data) {
				$('#result').html(data);
			}
		});
	}
	$('#room_type_id').keyup(function() {
		var search = $(this).val();
		if (search != '') {
			load_data(search);
		} else {
			load_data();
		}
	});

	function confirmationedit(anchor) {
		var conf = confirm("Are you sure you want to add this picture to the gallery?");
		if (conf) {
			window.location = anchor.attr("contactus.php");
		}
	}
</script>

</html>