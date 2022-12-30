<?php
include('validate.php');
include('name.php');
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<style>
	body{
		width:auto;
		height:auto;
		
	}
		.mek{
		text-transform:uppercase;
		letter-spacing: 2px;
		font-size: 30px;
		font-family:noto;
		font-weight: bold;
		margin-top: 25px;
		margin-left:30px;
		color:#000;
		text-align:center;
		padding:15px;
	}
	.pan1{
		width:100%;
		height: 100%;
		border-radius: 5px;
		padding:30px;
		background:#fff;
		

	}


	.pts{
		float:left;
		margin-left:30px;
		height:300px;
		width:400px;
		border-radius:10px;
		border:1px solid #b2b2b2;
	
	}


	.pen{

		width:90%;
		height:400px;
		margin-left:5%;
		border-top:1px solid #000;
		border-bottom:1px solid #000;
		border-radius:none;
		
	}
	.pot{
		padding:15px;
		margin:20px;
	}
	.pot img{
		border-radius:10px;
		height:300px;
		width:300px;
	}
	.abot{
		text-align:left;
		position:relative;
		margin-top:-15px;
		width:60%;
		height:auto;
	}
	.abot ul{
		display:block;
		text-decoration:none;
	}
	.abot ul h3{
		text-transform:uppercase;
		font-size:35px;
		letter-spacing:normal;
		margin-left:20%;
	}
	.abot ul li{
		list-style:none;
		margin-left:20%;
		font-size:20px;
		max-width:500px;
		padding:5px;
	}
	
	form .user-details .input-box{
            margin-bottom:15px;
            width:calc(100%/ 2 - 20px);

        }
        .user-details .input-box .details{
            font-size:18px;
            letter-spacing:2px;
            font-family:noto;
            font-weight:500;
            margin-bottom:5px;
        }
        .user-details .input-box input{
            border-radius:5px;
            height:45px;
            width:100%;
            outline:none;
            padding-left:15px;
            border:1px solid #ccc;
            border-bottom-width:2px;
            transition:all 0.3 ease;
        }
       form .button{
        height:45px;
        margin:45px 0;
       }
       form .button input{
        font-size:16px;
        letter-spacing:2px;
        font-family:noto;
        height:100%;
        width:100%;
        outline:none;
        color: #fff;
        background:#113eac;
        border:none;
        border-radius:5px;
       }

       form .button input:hover{
        background:#8ca9f0;
       }
	   .container{
            max-width:900px;
            width:100%;
            background:#f0f0f7;
            padding: 25px 30px;
            border-radius:5px;
			border:1px solid #b5b7ff;
			position:relative;
        }
        .container .title{
            font-size:35px;
            font-weight:500;
            position:relative;
            letter-spacing:2px;
            font-family:noto;
            border-bottom:2px solid #000;
            margin-bottom:8px;
        }
        .container form .user-details{
            display:flex;
            flex-wrap:wrap;
            justify-content:space-between;
        }
	
	</style>
</head>
<body>
<?php
include('header_menu.php');
?>


	<div  class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%; ">
		<div class = "pan2">
			<div class = "pan1">
				<strong><h3 class="mek">View History</h3></strong>
				<br />
                <?php
					$query = $conn->query("SELECT * FROM `room_transaction` NATURAL JOIN `guest` NATURAL JOIN `room` NATURAL JOIN room_type WHERE `transaction_id` = '$_REQUEST[transaction_id]'");
					$fetch = $query->fetch_array();
				?>
				<div class="pen">
					<div class="pot">
						<img src = "../photo/<?php echo $fetch['photo']?> "class="pts">
					</div>
					<div class="abot" style = "float:left; margin-left:10px; " >
					<ul>
						<h3><?php echo $fetch['room_type']?></h3>
						<li><?php echo "Room Number:   ".$fetch['room_id']?></li>
					
						<li><?php echo "Person:   ".$fetch['person'];?></li>
						<li><?php echo "Reservation Fee:   Php. ".$fetch['room_reservation_fee'].".00";?></li>
						<li><?php echo "Price:   Php. ".$fetch['price'].".00";?></li>
						<li><?php echo "Description:  ".$fetch['description'];?></li>
	</ul>
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "container">
				<form method = "POST" enctype = "multipart/form-data" action = "update_query_checkin.php?transaction_id=<?php echo $fetch['transaction_id']?>">
						<div class="user-details">
                <div class="input-box">
                    <span class="details">Firstname</span>
                    <input type="text" placeholder="Enter your Firstname"  name = "firstname" value="<?php echo $fetch['firstname']?>" disabled />
                </div>
                <div class="input-box">
                    <span class="details">Middlename</span>
                    <input type="text" placeholder="Enter your Middlename"  name = "middlename" value="<?php echo $fetch['middlename']?>" disabled />
                </div>
                <div class="input-box">
                    <span class="details">Lastname</span>
                    <input type="text" placeholder="Enter your Lastname" name = "lastname" value="<?php echo $fetch['lastname']?>" disabled />
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your Address"  name = "address" value="<?php echo $fetch['address']?>" disabled />
                </div>
                <div class="input-box">
                    <span class="details">Contact No.</span>
                    <input type="number" placeholder="Enter your Contact No."  name = "contactno" value="<?php echo $fetch['contactno']?>" disabled />
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your Email"  name = "email" value="<?php echo $fetch['email']?>"  disabled />
                </div>
				<div class="input-box">
                    <span class="details">Number of days</span>
					<input type="number" name = "days" id="txtDate" value="<?php echo $fetch['days']?>" disabled />
                </div>
                <div class="input-box">
                    <span class="details">Check in</span>
					<input type="date" name = "checkin" id="txtDate" value="<?php echo $fetch['checkin']?>" disabled />
				</div>
                <div class="input-box">
                    <span class="details">Check Out Date</span>
                    <input type="date" placeholder="Enter No. of Days" name = "checkout" value="<?php echo $fetch['checkout']?>" disabled />
                </div>
				<div class="input-box">
                    <span class="details"><?php echo "Sheet Price:".$fetch['sheet_price']?></span>
					<input type="number" name = "days" id="txtDate" value="<?php echo $fetch['extra_sheet']?>" disabled />
                </div>
				<div class="input-box">
                    <span class="details"><?php echo "Pillow Price:".$fetch['pillow_price']?></span>
					<input type="number" name = "days" id="txtDate" value="<?php echo $fetch['extra_pillow']?>" disabled />
                </div>
				<div class="input-box">
                    <span class="details"><?php echo "Bed Price:".$fetch['bed_price']?></span>
					<input type="number" name = "days" id="txtDate" value="<?php echo $fetch['extra_bed']?>" disabled />
                </div>
				<div class="input-box">
                    <span class="details"><?php echo "Breakfast Price:".$fetch['breakfast_price']?></span>
					<input type="number" name = "days" id="txtDate" value="<?php echo $fetch['extra_breakfast']?>" disabled />
                </div>
				<div class="input-box">
                    <span class="details">Total Bill</span>
                    <input type="text" placeholder="Enter No. of Days" id="" name = "" value="<?php echo $fetch['bill']?>" disabled />
                </div>


           
			</div> 	
            <div class="button">
			<a href="checkin.php" type="button"> Back</a>            
        </div>
		
					</form>
				</div>
	</div>

		</div>
	</div>
	<br />
	<br />
	
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
<script src="../js/date.js"></script>
<script> 



	

  
	  </script>
</html>
