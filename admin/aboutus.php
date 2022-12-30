<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>

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
					$query = $conn->query("SELECT * FROM `aboutus`  WHERE `id` = '1'");
					$about = $query->fetch_array();
				?>
					<form method = "POST" action = "aboutus_query.php" enctype = "multipart/form-data">
                        <img style = "width:150px; height :150px; border:1px solid #000;" src = "../photo/<?php echo $about['photo']?>">                            
                        <div class = "form-group">
							<label>Title </label>
							<input type = "text" class = "form-control" value = "<?php echo $about['Title']?>" name = "Title" required/>
						</div>
                        <div class = "form-group">
							<label>About us </label>
							<textarea type = "text" class = "form-control" name = "about" required><?php echo $about['about']?></textarea>
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
							<center id = "lbl">[Photo]</center></div>
							<input type = "file"  id = "photo" name = "photo" required/>
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
		var conf = confirm("Are you sure you want to update this record?");
		if(conf){
			window.location = anchor.attr("contactus.php");
		}
	} 

</script>
</html>