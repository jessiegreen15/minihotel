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
				<div class = "alert alert-info">Transaction / Room / Add Room</div>
				<br />
				<div class = "col-md-4">	
				<form method = "POST" enctype = "multipart/form-data">
					
					<div class="col-md form-group mb-3" data-for="Capacity">
                        <label class="label1"  for="Capacity-form5-q">Room Types</label>
                        <select id="test" name="room_type" class="form-control">
                            
                        <?php
                require('connect.php');
                 $sql = "SELECT room_type From room_type";
                 $result=mysqli_query($conn,$sql);
                 while($row=mysqli_fetch_array($result)){
                 echo "<option selected='selected' >". $row['room_type'];
                 }
                        ?>                   
                        </select>
                      </div>				<br />
						
					  <div class = "form-group">
							<label>Description </label>
							<textarea type = "text" class = "form-control" name = "description"></textarea>
						</div>				<br />
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "lbl">[Photo]</center>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<br>
						<div class = "form-group">
							<button onclick = "confirmationadd(this); return false;" name = "add_room" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require_once 'add_query_room.php'?>
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
		var conf = confirm("Are you sure you want to add this room?");
		if(conf){
			window.location = anchor.attr("contactus.php");
		}
	} 
</script>
</html>