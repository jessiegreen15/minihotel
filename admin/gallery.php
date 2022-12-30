<!DOCTYPE html>
<html lang = "en">
<head>



</head>

<body>
<?php
include('header_menu.php');
?>
<style>

			.gts{
				text-transform:uppercase;
				font-size: 35px;
				font-family:noto;
				font-weight:bold;
				letter-spacing: 2px;
				margin-left: 43%;
			}
			.dilol{
				float:left;
				width:250px;
				height:250px;
				margin-left:30px;
				margin-bottom:20px;
			}
			.dlpic{
				width:250px;
				height:250px;
				border-radius: 10px;
				border: 1px solid #7d7d7d;
			}
			.gelra{
				margin-left:6%;
			}
			</style>
           
		   <div class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;">	
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3 class="dls">Gallery</h3></strong>
                <a class = "btn btn-success" href = "add_gallery.php"><i class = "glyphicon glyphicon-plus"></i> Add Gallery</a>
				<br />
				<br />
                <?php
					require_once 'connect.php';
					$query2 = $conn->query("SELECT * FROM `gallery`");
					while($gallery = $query2->fetch_array()){
                        ?>
				<div class="gelra">
                    
				<div class="dilol">
					<img src = "../images/gallery<?php echo $gallery['photo']?>" class="dlpic"/>
				</div>
		</div>
        <?php }?>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>