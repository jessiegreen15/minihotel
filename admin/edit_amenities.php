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
	<div class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">	
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Rules and Regulation / Add Rules and Regustaion</div>
				<?php
						$query = $conn->query("SELECT * FROM `amenities`  WHERE `amenities_id` = '$_REQUEST[amenities_id]'") ;
						$fetch = $query->fetch_array();
					?>
				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "edit_query_amenities.php?amenities_id=<?php echo $fetch['amenities_id']?>" enctype = "multipart/form-data">
                    <div class = "form-group">
							<label>Title</label>
							<input type = "text" class = "form-control" value="<?php echo $fetch['amenities_title']?>" name = "amenities_title"/>
						</div>  <div class = "form-group">
							<label>Description</label>
							<textarea type = "text" class = "form-control" value="" name = "amenities_description"><?php echo $fetch['amenities_description']?></textarea>
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> SAVE</button>
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