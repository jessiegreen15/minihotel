<?php
include('validate.php');
include('name.php');
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

	.desc{
		width:300px;
		text-align:justify;
		word-spacing:-1px;
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
		margin:5% 0 0 -45px;
	}
	.pot img{
		border-radius:10px;
		height:250px;
		width:250px;
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
		font-size:40px;
		letter-spacing:normal;
		font-family:'Jost';
		margin:2% 0 2% 8%;
	}
	.abot ul li{
		list-style:none;
		margin-left:8%;
		font-size:18px;
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
		.buton{
			float:right;
			margin-right:10%;
			margin-top:3%;
			padding:10px 20px;
			color:#fff;
			background:#26b336;
			text-align:center;
			font-size:18px;
			font-family:'Jost';
			font-weight:500; 
			border-radius:5px;
		}
		.buton:hover{
			text-decoration:none;
			background:#6cf07b;
			color:#f1f1f1;
		}
		
		.barx{
			width:570px;
			height:250px; 
			border:1px solid #000;
			background:#eeeeee;
			margin: -5px 0 0 620px;

		}
		.availstatus{
			font-family:'Jost';
			font-size: 20px;
			font-weight: 400; 
			letter-spacing:2px;
			margin: -190px 0 0 175px;
			position:relative;
			float:left;
		}
	
		.deyt li{
			list-style:none;
			font-size: 40px;
			font-family:'noto';
			letter-spacing: 2px;
			float:left;
			margin: -130px 0 0 95px;
			position:relative;
		}
	</style>

	<div  class = "container-fluid" style="max-width: 1500px; position: relative; margin-top:5%; ">
		<div class = "pan2">
			<div class = "pan1">
				<strong><h3 class="mek">make a reservation</h3></strong>
				<br />
				<?php 
					require_once '../admin/connect.php';
					$query = $conn->query("SELECT * FROM event_type WHERE `event_type_id` = '$_REQUEST[event_type_id]'");
					$fetch = $query->fetch_array();
				?>
				<div class="pen">
					<div class="pot">
						<img src = "../photo/<?php echo $fetch['photo']?> "class="pts">
					</div>
					<div class="abot" style = "float:left; margin-left:10px;">
					<ul>
						<h3 ><?php echo "".$fetch['event_type_name']?></h3>
						<li class="desc"><?php echo "Price: Php. ".$fetch['price'].".00" ."/  Meal Price: Php. ".$fetch['lunch_price'].".00"."/  Snack Price: Php. ".$fetch['snack_price'].".00"?></li>
						<li class="desc"><?php echo "Description:  " .$fetch['type_description']."/  Meal:  " .$fetch['lunch_description']."/  Snack:  " .$fetch['snack_description']?></li>
</ul>
					</div>
					<div class="barx">
						<label class="availstatus">Not Available Dates</label>
						
						<ul class="deyt">
							<li>Date from - Date to</li>
						</ul>
						
					</div>
				</div>
				<br style = "clear:both;" />
				<div class = "container">
					<form method = "POST" enctype = "multipart/form-data">
						<div class="user-details">
					<div class="input-box">
                    <span class="details">Event Date</span>
                    <input type="date" placeholder="" name = "date" id="txtDate" required = "required" />
                </div>
				<div class="input-box">
                    <span class="details">No. of People</span>
                    <input type="number" placeholder="No. of People" name = "people" type = "number" min = "10" max = "99" required = "required" />
                </div>
				<div class="input-box">
                    <span class="details">Event Name</span>
                    <input type="text" placeholder="" name = "event_name" required = "required" />
                </div>
                <div class="input-box">
                    <span class="details">Firstname</span>
                    <input type="text" placeholder="Enter your Firstname" value="" name = "firstname" required = "required" />
                </div>
                <div class="input-box">
                    <span class="details">Middlename</span>
                    <input type="text" placeholder="Enter your Middlename" value="" name = "middlename" required = "required" />
                </div>
                <div class="input-box">
                    <span class="details">Lastname</span>
                    <input type="text" placeholder="Enter your Lastname" value="" name = "lastname" required = "required" />
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" placeholder="Enter your Address"  name = "address" required = "required" />
                </div>
                <div class="input-box">
                    <span class="details">Contact No.</span>
                    <input type="number" placeholder="Enter your Contact No." name = "contactno" required = "required" />
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your Email" name = "email" required = "required" />
                </div>
				<div class="input-box">
                    <span class="details">Lunch</span>
                    <input type="number"  min="0" max="15" placeholder="" name =  "extra_lunch" required = "required" />
                </div>
				<div class="input-box">
                    <span class="details">Snacks</span>
                    <input type="number" placeholder="" name = "extra_snack" required = "required" />
                </div>




            </div>
            <div class="button">
                <input onclick = "confirmationadd(this); return false;" type="submit" value="Submit"  name = "add_guest">
            </div>
			</div>
					</form>
					<a href="event.php" class="buton">Back</a>
				</div>
				</div>
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_event_reserve.php'?>
			</div>
		</div>
	</div>
	<br />
	<br />
	
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src="../js/date.js"></script>
<script> function confirmationadd(anchor){
		var conf = confirm("Are you sure you want to make a reservation?");
		if(conf){
			window.location = anchor.attr("contactus.php");
		}
	}</script>
</html>
