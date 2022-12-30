<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
	<style>
			.mekw{
		text-transform:uppercase;
		letter-spacing: 2px;
		font-size: 30px;
		font-family:noto;
		font-weight: bold;
		margin-top: 25px;
		margin-left:20px;
		color:#000;
	}
	.panw1{
		width:100%;
		height: 100%;
		border-radius: 5px;
		background:#fff;
		

	}
	.tpew{
		font-size: 35px;
		font-family:noto;
		font-weight: bold;
		letter-spacing: 2px;
		margin-left: 15px;
		margin-top:10px;
		color:#000;
	}
	.dcsw{
		font-size: 20px;
		font-family: noto;
		font-weight: 300;
		margin-left: 15px; 
		margin-top:20px;
		color: #000;
	}
	.pesw, .pcsw{
		font-size: 20px;
		font-family: noto;
		font-weight: 300;
		margin-left: 15px; 
		margin-top:25px;
		color: #000;
	}
	.ptsw{
		float:left;
		margin-left:20px;
		height:300px;
		width:400px;
		border-radius:10px;
		border:1px solid #b2b2b2;
	
	}
	.frm2{
		width: 40%;
		margin-top:-30.3%;
		margin-left:55%;
		position:absolute;
		background:#98d3fa;
		height: 500px;
		border-bottom-right-radius:10px;
		border-top-right-radius:10px;
	}
	.penw{
		width:95%;
		height: 100%;
		border-radius: 5px;
		background:#fff;
		margin-top:20px;
		
		
		
	}
	.panw{
		border:1px solid #f2f2f2;
		margin: 30px 20px 30px 20px;
		width:95%;
		height:500px;
		border-radius:10px;
		
	}
	.lelw{
		font-size: 18px;
		font-family:noto;
		letter-spacing:2px;
		color: #4f4f4f;
		margin-left:15px;
		margin-top:8px;
	}
	.oriw{
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

	.bewts{
		width:90%;
		height:40px;
		margin-left:20px;
		margin-top:0;
		border:none;
		border-radius: 7px;
		color:#000;
		font-size: 17px;
		font-family:'Jost';
		color:#fff;
		background:#24a0f2;
	}
	.bewts:hover{
		background:#6bc0f7;
	}
			</style>	
	</head>
<body>
<?php
	include('header_menu.php');
	?>
	<br />
	<div class = "panw">
		<div class = "panw2">
			<div class = "panw1">
            <strong><h3 class="mekw">MAKE A RESERVATION</h3></strong>
				<br />
				<?php 
					require_once '../admin/connect.php';
					$query = $conn->query("SELECT * FROM `event` WHERE `event_id` = '$_REQUEST[event_id]'");
					$fetch = $query->fetch_array();
				?>
				<div class="penw">
					<div class="">
						<img src = "../photo/<?php echo $fetch['photo']?>"  class="ptsw" >
					</div>
					<div style = "float:left; margin-left:10px;">
						<h3 class="tpew"><?php echo $fetch['event_type']?></h3>
						<h3 class="dcsw"><?php echo "Description".$fetch['description']."";?></h3>
                        <h3 class="pesw"><?php echo "Person".$fetch['people']."";?></h3>
                        <h3 class="pcsw"><?php echo "Php. ".$fetch['price'].".00";?></h3>
                    </div>
					
				</div>
				<br style = "clear:both;" />
				<div class = "frm2">
					<form method = "POST" enctype = "multipart/form-data">
						<div class = "forw">
							<label class="lelw">Firstname</label>
							<input type = "text" class = "oriw" value="<?php echo $firstname;?>" name = "firstname" required = "required"  />
						</div>
						<div class = "forw">
							<label  class="lelw">Middlename</label>
							<input type = "text" class = "oriw" value="<?php echo $middlename;?>" name = "middlename" required = "required"  />
						</div>
						<div class = "forw">
							<label  class="lelw">Lastname</label>
							<input type = "text" class = "oriw" value="<?php echo $lastname;?>" name = "lastname" required = "required" />
						</div>
						<div class = "forw">
							<label  class="lelw">Address</label>
							<input type = "text" class = "oriw" value="<?php echo $address;?>" name = "address" required = "required" />
						</div>
						<div class = "forw">
							<label class="lelw">Contact No</label>
							<input type = "text" class = "oriw" value="<?php echo $contactno;?>" name = "contactno" required = "required" />
						</div>
						<div class = "forw">
							<label class="lelw">Check in</label>
							<input type = "date" class = "oriw" name = "date" required = "required" />
						</div>
						<br />
						<div class = "forw">
							<button class = "bewts" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
                </div>
                    <div class = "col-md-4"></div>
				<?php require_once 'add_query_event_type.php'?>
			</div>

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>

<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>