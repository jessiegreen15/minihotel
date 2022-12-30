<?php
	require_once 'validate.php';
	require 'name.php';
?>
<!DOCTYPE html>
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
.contier{
	width:98%;
	margin-left: 1%;
	margin-top:5%;
}
.tet{
	text-transform:uppercase;
	font-size: 30px;
	font-family:noto;
	font-weight:bold;
	letter-spacing: 2px;
	margin-left: 20px;
}

.dse{
	font-size: 18px;
	font-family:'jost';
	font-weight: 300;
	width: 50%;
	margin-left:18px;	
	text-align:justify;
	text-justify:inter-word;
	color: #8b8b8b;
}
.pca{
	width: 350px;
	height: 300px;
	position:relative;
	margin-left:65%;
	margin-top: -15%;
}
.lne{
	border: 1px solid #2b2b2b;
	width: 100%;

}
.rmo{
	width:300px;
	height:250px;
	margin-left: 50px;
	border-radius: 10px;
	border: 1px solid #d7d7d7;
	margin-bottom:50px;
	
}
.cps{
	float:left;
	margin-left:20px;	
	border:1px solid #000;
	margin-left:4%;
	margin-bottom:2%;
	border-radius:5px;
	width:350px;
}
.ho4{
	font-size: 22px;
	letter-spacing: 2px;
	font-family:noto;
	font-weight:400;
	color:#000;

	margin-left:25px;
	margin-top:-30px;

}
.lib{
	font-size: 20px;
	font-weight:bold;
	text-align: 2px;
	font-family:noto;
	color:#3282f2;
	
	margin-left: -70px;
	margin-top:-12px;
}
.lers{
	font-size: 17px;
	font-family:'jost';
	font-weight:bold;
	margin-left:180px;
	margin-top:-30px;
	color:#000;
}
.libs{
	font-size: 20px;
	font-weight:bold;
	text-align: 2px;
	font-family:noto;
	color:#3282f2;
	
	margin-left: -122px;
	margin-top:-10px;
}
.pce{
	font-size: 18px;
	font-family:'jost';
	font-weight:bold;
	margin-left:80px;
	margin-top:-30px;
	color:#000;
	margin-bottom:10px;
}
.emn{
	font-size: 30px;
	font-family:noto;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing:3px;
	color: #000;
	margin-left:20px;
}
 .lite{
	 font-size: 15px;
	 font-family: 'jost';
	 font-weight: 300;
	 letter-spacing:2px;
	 color: #8b8b8b;
 }
</style>



	<div class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;  ">
		<div class = "panel panel-default">
			<div class = "panel-body">
			<?php
					$query = $conn->query("SELECT * FROM `aboutus`  WHERE `id` = '1'");
					$about = $query->fetch_array();
				?>
				<strong><h3 class="tet"><?php echo $about['Title']?></h3></strong>
				<p style = "position:relative; margin-left:2%; text-align:justify; text-justify:inter-word; float:left; width:800px;"><?php echo $about['about']?></p>
				<img style = "float:right;" src = "../photo/<?php echo $about['photo']?>" width = "250px" height = "250px" />

				<br style = "clear:both;" />
				<br />
				<br />				<br />

				<hr  class="lne">
				<br />
				<strong><center><h3 class="emn">ROOMS</h3></center></strong>
<br/>
				<?php
					require_once '../admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type ORDER BY `room_type_id` ASC");
					while($fetch = $query->fetch_array()){
				?>
				<div class="cps">
					<center><img style="margin-left:-1%; margin-top:2%;" src = "../photo/<?php echo $fetch['photo']?>" class="rmo"/></center>
					<center><h4  class="ho4"><?php echo "Room Number:  " .$fetch['room_id']?></h4></center>
					<center><h4><?php echo $fetch['room_type']?></h4></center>
					<center><label class=""><?php echo "Capacity:  ".$fetch['person']."   person"?></label></center>
					<center><p class=""><?php echo "Price: Php. ".$fetch['price'].".00"?></p></center>
				</div>
				<?php
					}
				?>
				<br style = "clear:both;"/>
				<br />
				<hr  class="lne">
				<br />
				<strong><center><h3 class="emn">EVENTS</h3></center></strong>
<br/>
<?php
					require_once '../admin/connect.php';
					$query2 = $conn->query("SELECT * FROM `event_type`  ORDER BY `event_type_id` ASC");
					while($fetch2 = $query2->fetch_array()){
				?>
				<div class="cps">
					<center><img src = "../photo/<?php echo $fetch2['photo']?>" class="rmo"/></center>
					<center><h4 class="ho4"><?php echo "Decoration:  " .$fetch2['event_type_name']?></h4></center>
					<center><p><?php echo "Description:  " .$fetch2['type_description']?></p></center>
					<center><p class=""><?php echo "Price: Php. ".$fetch2['price'].".00"?></p></center>
				</div>
				<?php
					}
				?>
				<br style = "clear:both;"/>
				<br />
				<hr  class="lne">
				<br />
				<strong><h3 class="emn">Amenities and Services</h3></strong>
				<ul>
				<?php
						$query = $conn->query("SELECT * FROM `amenities`" );
						while($fetch = $query->fetch_array()){
					?>	
					<li class="lite"><h3><?php echo $fetch['amenities_title']?></h3></li>
					<li class="lite"><label><?php echo $fetch['amenities_description']?></label></li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
	<br />
	<br />

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>