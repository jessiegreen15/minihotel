<!DOCTYPE html>
<html lang = "en">
	<head>
	<style>
body{
	width:auto;
	height:auto;
}
.conner{
	width:90%;
	margin-left:1%;
}
.res{
	font-size: 30px;
	font-family:noto;
	font-weight: bold;
	text-transform:uppercase;
	letter-spacing:3px;
	color: #000;
	margin-left: 20px;
}
.numbs{
	font-size: 20px;
	font-family: noto;
	font-weight:bold;
	text-transform:uppercase;
	letter-spacing: 2px;
	color: #000;
	margin-left: 20px;
}
.dsecr{
	margin-left:50px;
	font-size: 18px;
	font-family:'jost';
	font-weight: bold;
	color: #7d7d7d;
	width: 700px;
	text-align:justify;
	text-justify:inter-word;
}
.dls{
	text-transform:uppercase;
	font-size: 30px;
	font-family:noto;
	font-weight:bold;
	letter-spacing: 2px;
	margin-left: 20px;
}
		</style>
	</head>
<body>
<?php
include('header_menu.php');
include('../admin/connect.php');
?>
		<div class = "container-fluid"  style="max-width: 1500px; position: relative; margin-top:5%; ">
		<div class = "panel panel-default">
				<strong><h3 class="dls">Rules and Regulations</h3></strong>
			<div class = "panel-body">
			<?php
						$query = $conn->query("SELECT * FROM `rulesregulations`" );
						while($fetch = $query->fetch_array()){
					?>	
				<strong><h3 class="tet"><?php echo $fetch['Title']?></h3></strong>
				<br />
				<p class="dse"><?php echo $fetch['rule']?></p> <?php }?>
				<br style = "clear:both;" />
				<br />
				<br />				<br /><br />
			</div>
		</div>
	</div>
	<br />
	<br />

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>