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
				<div class = "alert alert-info">About us / Modify About us</div>

				<br />
				<div class = "col-md-4">	
                <?php
					$query = $conn->query("SELECT * FROM `contactus`  WHERE `id` = '1'");
					$contact = $query->fetch_array();
				?>
					<form method = "POST" action = "contactus_query.php" enctype = "multipart/form-data">
                        <img style = "width:150px; height :150px; border:1px solid #000;" src = "../images/<?php echo $contact['photo']?>">                            
                        <div class = "form-group">
							<label>Address </label>
							<input type = "text" class = "form-control" value = "<?php echo $contact['address']?>" name = "address" />
						</div>
                        <div class = "form-group">
							<label>Email </label>
							<input type = "email" class = "form-control" value="<?php echo $contact['email']?>" name = "email"/>
						</div>
						<div class = "form-group">
							<label>Contact </label>
							<input type = "number" class = "form-control" value="<?php echo $contact['contact']?>" name = "contact"/>
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
							<center id = "lbl">[Photo]</center></div>
							<input type = "file"  id = "photo" name = "photo" />
						</div>
						<br />
						<div class = "form-group">
							<button onclick = "confirmationDelete(this); return false;" name = "update" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Update</button>
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

	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>
</html>