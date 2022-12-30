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
<style>
		body{
		width:auto;
		height:auto;
	}
	.tpe{
		font-size: 35px;
		font-family:noto;
		font-weight: bold;
		letter-spacing: 2px;
		margin-left: 5%;
		text-transform:uppercase;
		margin-top:5%;
		color:#000;
	}
	.dcs{
		font-size: 20px;
		font-family: noto;
		font-weight: 300;
		margin-left: 5%;
		max-width:500px; 
		margin-top:1%;
		color: #000;
		
	}

	.pcs{
		font-size: 20px;
		font-family: noto;
		font-weight: 300;
		margin-left: 5%;; 
		margin-top:2%;
		color: #000;
		max-width:500px;
	}
	.rebuut{
		width:35%;
		height:35px;
		border:none;
		background:#24a0f2;
		color:#fff;
		border-radius:5px;
		position:relative;
		margin-left:100%;
		margin-top:-15%;
	}
	.rebuut:hover{
		background:#6bc0f7;
	}
	.rebuut a{
		color:#fff;
		text-decoration:none;
		
	}
    .rebuut a:hover{
		color:#fff;
		text-decoration:none;
        
		
	}
	</style>


	<div class = "container-fluid"  style="width:100%; height:auto;">
		<div class = "panel panel-default">
			<div class = "panel-body">
			<strong><h3>MAKE A RESERVATION</h3></strong>
			<?php
					require_once '../admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type ORDER BY `price` ASC");
					while($fetch = $query->fetch_array()){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "../photo/<?php echo $fetch['photo']?>" height = "250" width = "350" style="padding:3px; border:1px solid #b2b2b2; border-radius: 10px;"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3 class="tpe"><?php echo $fetch['room_type']?></h3>
							<h3 class="tpe"><?php echo "Room Number:  " .$fetch['room_id']?></h3>
							<h4 class="dcs"><?php echo "Description:  " .$fetch['description']."/  Extra Pillow Price:  " .$fetch['pillow_price']."/  Extra Sheet price:  " .$fetch['sheet_price']."/  Extra Bed price:  " .$fetch['bed_price']?></h4>
							<h4 class="pcs"><?php echo "Capacity: ".$result[$key]['person']?></h4>
							<h4 class="pcs"><?php echo "Price: Php. ".$fetch['price'].".00"?></h4>
							<br/>
							<button class="rebuut"><a  href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>"><i class = "glyphicon glyphicon-list"></i> Reserve</a></button>

						</div>

					</div>
				<?php
					}
				?>
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