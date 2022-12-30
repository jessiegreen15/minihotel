<?php
include('validate.php');
include('name.php');
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<style>
	body{
		width:1024px;
		height:768px;
	}
		.mek{
		text-transform:uppercase;
		letter-spacing: 2px;
		font-size: 30px;
		font-family:noto;
		font-weight: bold;
		margin-top: 25px;
		margin-left:40px;
		color:#000;
	}
	.pan1{
		width:100%;
		height: 100%;
		border-radius: 5px;
		background:#fff;
		

	}
	.tpe{
		text-transform:uppercase;
		font-size: 35px;
		font-family:noto;
		font-weight: bold;
		letter-spacing: 2px;
		margin-left: 10%;
		margin-top:15%;
		color:#000;
		position:relative;
		text-decoration:underline;
	}
	.dcs{
		font-size: 20px;
		font-family: noto;
		font-weight: 300;	
		margin-left: 10%;
		max-height:200px;
		max-width: 400px;
		margin-top:10%;
		color: #000;
		position:relative;
	}
	.pes {
		font-size: 22px;
		font-family: noto;
		font-weight: 300;
		margin-left: 10%;
		position:relative; 
		margin-top:10%;
		color: #000;
	}
	.pews {
		font-size: 22px;
		font-family: noto;
		font-weight: 300;
		margin-left: 10%;
		position:relative; 
		margin-top:10%;
		color: #000;
	}
	.pcs {
		font-size: 22px;
		font-family: noto;
		font-weight: 300;
		margin-left: 10%;
		position:relative; 
		max-width:400px;
		margin-top:10%;
		color: #000;
		margin-bottom:20%;
	}
	.pts{
		float:left;
		margin-left:40px;
		height:300px;
		width:400px;
		border-radius:10px;
		border:1px solid #b2b2b2;
	
	}
	.frm{
		width: 40%;
		margin-top:-52%;
		margin-left:55%;
		position:relative;
		background:#343857;
		height: 100%;
		border-radius:10px;
	}
	.pen{
		width:55%;
		height: 100%;
		border-radius: 5px;
		background:#fff;
		
		
		
	}

	.pan{
		border:1px solid #f2f2f2;
		border-radius:10px;
		
	}
	.lel{
		font-size: 18px;
		font-family:noto;
		letter-spacing:2px;
		color: #d5dbff;
		margin-left:15px;
		margin-top:8px;
	}
	.ori{
		width:90%;
		height:30px;
		margin-left:20px;
		margin-top:2px;
		border:1px solid #f2f2f2;
		border-radius: 7px;
		color:#000;
		font-size: 17px;
		font-family:'Jost';
	}

	.bets{
		width:100%;
		height:40px;
		margin-left:none;
		margin-top:0;
		border:none;
		border-radius: 7px;
		color:#000;
		font-size: 17px;
		font-family:'Jost';
		color:#fff;
		background:#21164d;
	}
	.bets:hover{
		background:#70769f;
	}

	</style>
</head>
<body>
<?php
include('header_menu.php');
?>


	<div  class = "pan" style="width:130%; height:auto; border:none; ">
		<div class = "pan2">
			<div class = "pan1">
				<strong><h3 class="mek">make a reservation</h3></strong>
				<br />
				<?php 
					require_once 'connect.php';
					$query = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type WHERE `room_id` = '$_REQUEST[room_id]'");
					$fetch = $query->fetch_array();
				?>
				<div class="pen">
					<div class="">
						<img src = "../photo/<?php echo $fetch['photo']?> "class="pts">
					</div>
					<div style = "float:left; margin-left:10px; " >
						<h3 class="tpe"><?php echo $fetch['room_type']?></h3>
						<h3 class="pews"><?php echo "Room Number:".$fetch['room_id']?></h3>
						<h3 class="dcs"><?php echo "Description:".$fetch['description'];?></h3>
						<h3 class="pes"><?php echo "Person: ".$fetch['person'];?></h3>
						<h3 class="pcs"><?php echo "Price: Php. ".$fetch['price'].".00";?></h3>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "frm">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "fori">
							<label class="lel">Firstname</label>
							<input type = "text" class = "ori" name = "firstname" required = "required" />
						</div>
						<div class = "fori">
							<label class="lel">Middlename</label>
							<input type = "text" class = "ori" name = "middlename" required = "required" />
						</div>
						<div class = "fori">
							<label class="lel">Lastname</label>
							<input type = "text" class = "ori" name = "lastname" required = "required" />
						</div>
						<div class = "fori">
							<label class="lel">Address</label>
							<input type = "text" class = "ori" name = "address" required = "required" />
						</div>
						<div class = "fori">
							<label class="lel">Contact No</label>
							<input type = "text" class = "ori" name = "contactno" required = "required" />
						</div>
						<div class = "fori">
							<label class="lel">Email</label>
							<input type = "text" class = "ori" name = "email" required = "required" />
						</div>
						<div class = "fori">
							<label class="lel">Check in</label>
							<input type = "date" class = "ori" name = "date" id="txtDate" required = "required" />
						</div>
						<div class = "fori">
							<label class="lel">No days</label>
							<input type = "text" class = "ori" name = "days" required = "required" />
						</div>
						<br />
						<div class = "fori">
							<button class = "bets" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
<script src="../js/date.js"></script>

</html>