

<?php
	require_once 'validate.php';
	require 'name.php';
?>
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
<style>
* {
		box-sizing: border-box;
		margin:0;
		border:0;
		padding:0;
}

.navi{ 
	max-width: 1500px;
  position: relative;
  margin:auto;
			height:120px;
			background:#fff;
			box-shadow: 1px 2px #888888;
			border-bottom:1px solid #3a8ef7;
		}
		.brad{
			font-family:noto;
			color:#fff;
			text-transform:uppercase;
			font-weight: bolder;
			font-size: 26px;
			letter-spacing:1px;
			margin-top:-14%;
			margin-bottom:1%;
			white-space:nowrap;
			margin-left: 29%;
			position:relative;
		}
		.brad2{
			font-family:"Jost";
			font-size:14px;
			letter-spacing:2px;
			margin-left:29%;
			position:relative;
			color:#fff;
			font-weight:200;
			margin-bottom:6.5%;
		}
		
		
		.sil{
			border-radius:50%;
			width:70px;
			height:70px;
			border: 2px solid #4676f0;
			margin-left:10%;
			margin-top:5%;
			position:sticky;
		}
		.nav-pills{
			right:5%;
			top:46%;
			position:absolute;
		}
		.nav-pills i{
			margin-right:3px;
			color:#34abf7;
		}
		</style>
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
<nav  class = "navi">
<div class = "navbar-header" style="width:500px; background:#34abf7; border-bottom-right-radius:100px; ">
			<img src="../images/seal.png" class="sil">
				<p class = "brad" > mini hotel </p>
				<p class="brad2">Pilar College of Zamboanga City, Inc.</p>
			</div>

    </br>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills" style="color:#34abf7;">
			<li ><a href = "home.php"><i class = "glyphicon glyphicon-home"></i>Home</a></li>
            <li class = "nav navbar-nav  ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-calendar"></i>Make a Reservation</a>
                    <ul class="dropdown-menu">
						<li><a href="event.php"><i class = "glyphicon glyphicon-star"></i> Event</a></li>
						<li><a href="room.php" > <i class = "glyphicon glyphicon-bed"></i>Room</a></li>
					</ul>
				</li>
			</li>		
			<li class = "nav navbar-nav  ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-calendar"></i>Your Reservation</a>
                    <ul class="dropdown-menu">
						<li><a href="event_reserve.php"><i class = "glyphicon glyphicon-star"></i> Event</a></li>
						<li><a href="room_reserve.php" > <i class = "glyphicon glyphicon-bed"></i>Room</a></li>
					</ul>
				</li>
			</li>	
    <li class = "nav navbar-nav  ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-picture"></i>Album</a>
					<ul class="dropdown-menu">
						<li><a href="gallery.php"> <i class = "glyphicon glyphicon-picture"></i>Gallery</a></li>
                        <li><a href="dineandlounge.php"><i class = "glyphicon glyphicon-cutlery"></i>Dine and lounge</a></li>

					</ul>
				</li>
    </li>	
    <li class = "nav navbar-nav  ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-object-align-bottom"></i>Company</a>
					<ul class="dropdown-menu">
                        <li><a href="aboutus.php"> <i class = "glyphicon glyphicon-question-sign"></i>About us</a></li>
                        <li><a href="contactus.php"><i class = "glyphicon glyphicon-earphone"></i> Contact us</a></li>
                        <li><a href="rulesandregulation.php"><i class = "glyphicon glyphicon-book"></i>Rules and Regulations</a></li>


					</ul>
				</li>
    </li>	
    <li class = "nav navbar-nav  ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i><?php echo $user;?></a>
					<ul class="dropdown-menu">
                    <li><a href="account.php"><i class = "glyphicon glyphicon-user"></i>Profile</a></li>
                    <li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Sign out</a></li>
					</ul>
				</li>
    </li>	
		</ul>
    </br>
	</nav>
</body>
</html>
