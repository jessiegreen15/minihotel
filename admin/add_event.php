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
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Transaction / Room / Create Event</div>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" enctype = "multipart/form-data">
									<br />
                            <div class = "col-md form-group mb-3">
							<label class="label1">Event name</label>
							<input type = "text" class = "form-control" name = "event_name" required = "required" />
						</div>
                        <div class = "col-md form-group mb-3">
							<label class="label1">Description</label>
							<textarea type = "text" class = "form-control" name = "description" required = "required"> </textarea>
						</div>
						<br>
						<div class="col-md form-group mb-3" data-for="Capacity">
                        <label class="label1"  for="Capacity-form5-q">Room Types</label>
                        <select id="test" name="room_type" class="form-control">
                            
                        <?php
                require('connect.php');
                 $sql = "SELECT event_type From event_type";
                 $result=mysqli_query($conn,$sql);
                 while($row=mysqli_fetch_array($result)){
                 echo "<option selected='selected' >". $row['event_type'];
                 }
                        ?>                   
                        </select>
                      </div> <br>
						<div class = "form-group">
							<button name = "add_event" class = "btn btn-info form-control">Create</button>
						</div>
					</form>
					<?php require_once 'add_query_event.php'?>
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


</script>
</html>