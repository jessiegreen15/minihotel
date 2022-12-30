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
				<div class = "alert alert-info">Rules and Regulation / Add Rules and Regustaion</div>

				<br />
				<div class = "col-md-4">	
					<form method = "POST" action = "add_query_rule.php" enctype = "multipart/form-data">
                    <div class = "form-group">
							<label>Title</label>
							<textarea type = "text" class = "form-control" name = "Title"></textarea>
						</div>  <div class = "form-group">
							<label>Rule</label>
							<textarea type = "text" class = "form-control" name = "rule"></textarea>
						</div>
						<br />
						<div class = "form-group">
							<button onclick = "confirmationadd(this); return false;" name = "add" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> SAVE</button>
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
	function confirmationadd(anchor){
		var conf = confirm("Are you sure you want to add this rule?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 

</script>
</html>