<?php
include('validate.php');
include('name.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		body {
			width: auto;
			height: auto;

		}

		.mek {
			text-transform: uppercase;
			letter-spacing: 2px;
			font-size: 30px;
			font-family: noto;
			font-weight: bold;
			margin-top: 25px;
			margin-left: 30px;
			color: #000;
			text-align: center;
			padding: 15px;
		}

		.pan1 {
			width: 100%;
			height: 100%;
			border-radius: 5px;
			padding: 30px;
			background: #fff;


		}


		.pts {
			float: left;
			margin-left: 30px;
			height: 300px;
			width: 400px;
			border-radius: 10px;
			border: 1px solid #b2b2b2;

		}


		.pen {

			width: 90%;
			height: 400px;
			margin-left: 5%;
			border-top: 1px solid #000;
			border-bottom: 1px solid #000;
			border-radius: none;

		}

		.pot {
			padding: 15px;
			margin: 20px;
		}

		.pot img {
			border-radius: 10px;
			height: 300px;
			width: 300px;
		}

		.abot {
			text-align: left;
			position: relative;
			margin-top: -15px;
			width: 60%;
			height: auto;
		}

		.abot ul {
			display: block;
			text-decoration: none;
		}

		.abot ul h3 {
			text-transform: uppercase;
			font-size: 35px;
			letter-spacing: normal;
			margin-left: 20%;
		}

		.abot ul li {
			list-style: none;
			margin-left: 20%;
			font-size: 20px;
			max-width: 500px;
			padding: 5px;
		}

		form .user-details .input-box {
			margin-bottom: 15px;
			width: calc(100%/ 2 - 20px);

		}

		.user-details .input-box .details {
			font-size: 18px;
			letter-spacing: 2px;
			font-family: noto;
			font-weight: 500;
			margin-bottom: 5px;
		}

		.user-details .input-box input {
			border-radius: 5px;
			height: 45px;
			width: 100%;
			outline: none;
			padding-left: 15px;
			border: 1px solid #ccc;
			border-bottom-width: 2px;
			transition: all 0.3 ease;
		}

		form .button {
			height: 45px;
			margin: 45px 0;
		}

		form .button input {
			font-size: 16px;
			letter-spacing: 2px;
			font-family: noto;
			height: 100%;
			width: 100%;
			outline: none;
			color: #fff;
			background: #113eac;
			border: none;
			border-radius: 5px;
		}

		form .button input:hover {
			background: #8ca9f0;
		}

		.container {
			max-width: 900px;
			width: 100%;
			background: #f0f0f7;
			padding: 25px 30px;
			border-radius: 5px;
			border: 1px solid #b5b7ff;
			position: relative;
		}

		.container .title {
			font-size: 35px;
			font-weight: 500;
			position: relative;
			letter-spacing: 2px;
			font-family: noto;
			border-bottom: 2px solid #000;
			margin-bottom: 8px;
		}

		.container form .user-details {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
		}

		.buton {
			float: right;
			margin-right: 10%;
			margin-top: 3%;
			padding: 10px 20px;
			color: #fff;
			background: #26b336;
			text-align: center;
			font-size: 18px;
			font-family: 'Jost';
			font-weight: 500;
			border-radius: 5px;
		}

		.buton:hover {
			text-decoration: none;
			background: #6cf07b;
			color: #f1f1f1;
		}
	</style>
</head>

<body>
	<?php
	include('header_menu.php');
	?>


	<div class="container-fluid" style="max-width: 1500px; position: relative; margin-top:5%;	">
		<div class="pan2">
			<div class="pan1">
				<strong>
					<h3 class="mek">make a reservation</h3>
				</strong>
				<br />
				<?php
				require_once 'connect.php';
				$query = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type NATURAL JOIN room_transaction WHERE `room_id` = $_REQUEST[room_id] && `status` = 'Check in' ");
				while ($fetch = $query->fetch_array()) {
				?>
					<div style="float:left; margin-left:10px;">
						<h3 style="color: red;"><?php echo "Room not available" ?></h3>
					</div>
					</br>
			</div>
		<?php
				}
		?>
		<?php
		require_once 'connect.php';
		$query = $conn->query("SELECT * FROM `room` NATURAL JOIN room_type WHERE `room_id` = '$_REQUEST[room_id]'");
		$fetch = $query->fetch_array();
		?>
		<div class="pen">
			<div class="pot">
				<img src="../photo/<?php echo $fetch['photo'] ?> " class="pts">
			</div>
			<div class="abot" style="float:left; margin-left:10px;">
				<ul>
					<h3><?php echo $fetch['room_type'] ?></h3>
					<li><?php echo "Room Number:" . $fetch['room_id'] ?></li>
					<li><?php echo "Person: " . $fetch['person']; ?></li>
					<li><?php echo "Price: Php. " . $fetch['price'] . ".00"; ?></li>
					<li><?php echo "Description:" . $fetch['description']; ?></li>
				</ul>
			</div>
		</div>
		<br style="clear:both;" />
		<div class="container">
			<form method="POST" enctype="multipart/form-data">
				<div class="user-details">
					<div class="input-box">
						<span class="details">Firstname</span>
						<input type="text" placeholder="Enter your Firstname" name="firstname" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Middlename</span>
						<input type="text" placeholder="Enter your Middlename" name="middlename" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Lastname</span>
						<input type="text" placeholder="Enter your Lastname" name="lastname" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Address</span>
						<input type="text" placeholder="Enter your Address" name="address" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Contact No.</span>
						<input type="text" min="0" max="15" placeholder="Enter your Contact No." name="contactno" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Email</span>
						<input type="email" placeholder="Enter your Email" name="email" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Check in</span>
						<input type="date" id="" name="date" />
					</div>
					<div class="input-box">
						<span class="details">No. of Days</span>
						<input type="text" placeholder="Enter No. of Days" name="days" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Pillow</span>
						<input type="number" min="0" max="6" class="ori" name="extra_pillow" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Bed</span>
						<input type="number" min="0" max="6" class="ori" name="extra_bed" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Sheet</span>
						<input type="number" min="0" max="6" class="ori" name="extra_sheet" required="required" />
					</div>
					<div class="input-box">
						<span class="details">Breakfast</span>
						<input type="number" min="0" max="6" class="ori" name="extra_breakfast" required="required" />
					</div>

				</div>
				<div class="button">
					<input onclick="confirmationadd(this); return false;" type="submit" value="Submit" name="add_guest">
				</div>
		</div>
		</form>

		<a href="availabilitybook.php" class="buton">Back</a>
		</div>
	</div>
	<div class="col-md-4"></div>
	<?php require_once 'add_query_booknow.php' ?>
	</div>
	</div>
	</div>
	<br />
	<br />

</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/date.js"></script>
<script>
	function confirmationadd(anchor) {
		var conf = confirm("Are you sure you want to make a reservation?");
		if (conf) {
			window.location = anchor.attr("");
		}
	}
</script>

</html>