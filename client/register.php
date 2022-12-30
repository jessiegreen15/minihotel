<!DOCTYPE html>
<?php require_once "../admin/connect.php"?>
<html lang = "en">
	<head>
	<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
<style>
											body{
			width:auto;
			height:auto;
			background:#e8ebfd;
			background-repeat:no-repeat;

		}

	.continer{
		position:relative;
		background:#e8ebfd;
		border-radius:15px;
		max-width: 750px;
		height: 615px;
		margin:auto;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
	
	}
		.header{
			background:#132f94;
			width:100%;
			height: 160px;
			margin-top:-10%;
			padding: 10px 15px;
  			border-bottom: 1px solid transparent;
  			border-top-left-radius: 10px;
  			border-top-right-radius: 10px;
		}
		.heder{
			color:#fff;
			font-family:noto;
			letter-spacing:2px;
			font-size:25px;
			text-transform:uppercase;
			margin-left:25%;
			position: absolute;
		}
		.formcon{
			width: 90%;
			height: 35px;
			margin-top:2%;
			margin-left:5%;
			border-radius: 5px;
			border: 1px solid #2f2f2f;
			font-family: 'noto';
			font-size:15px;
		}
		.nim{
			letter-spacing: 1px;
			font-family: noto;
			font-size: 15px;
			text-transform: uppercase;
			margin-top: 8px;
			margin-left: 15px;
			color:#000;
		}
		.butmit{
			width: 680px;
			height: 40px;
			margin-left: 8px;
			margin-bottom:30px;
			color:#fff;
			background:#132f94;
			border-radius: 5px;
			border: 1px solid #b1b1b1;
		}

		.butmit:hover{
			background: #95acff;
			
		}
		.seal{
			margin-top: -9%;
			margin-left: 40%;
			border-radius:50%;
			width:120px;
			height:120px;
			border:3px solid #090f54;
		}
	
		.wel{
			position:relative;
			color:#fff;
			margin-top: 3%;
			letter-spacing:1px;
			margin-left:25%;
			font-family: noto;
			font-size: 18px;
			text-transform: uppercase;
		}
		.dec{
			position:relative;
			margin-left:27%;
			color:#fff;
			letter-spacing:1px;
			font-size: 16px;
			font-family: 'Jost';
		}
		.wev{
			position:sticky;;
			width:1024px;
			height:500px;
			margin-top:-20%;
			margin-left:-100%;	
		}
		.loter{
			width:700px;
			color:#000;
			font-family:'jost';
			font-size:18px;
			margin-left:5%;
			margin-top:-3%;
		}
		.loter a{
			margin-left:2%;
			text-decoration:underline;
			font-size:18px;
			font-weight:bold;
			font-family:noto;
			letter-spacing:2px;
		}

		
		form{
			
			display:flex;
			flex-wrap:wrap;
		}
		form .form-group{
			width:calc(100%/2 - 20px);
			margin-left:13px;
		}





	</style>

	
	<div class = "continer" style="margin-top:120px;">
		<br />
		<br />
		<div class = "col-md-4"></div>
		
		<div class = "header">
		<div class="des">
			<img class="seal" src="../images/seal.png">
		<h3 class="wel"> Pilar College of Zambonga City</h3>
		<p class="dec">Hotel Management and Reservation System</p>
	
		</div>
				</div>
				<div class = "panel-body">
					<form method = "POST">
                    <div class = "form-group">
							<label class="nim">Firstname</label>
							<input type = "text" name = "firstname" class = "formcon" required = "required" />
						</div>
                        <div class = "form-group">
							<label class="nim">Middlename</label>
							<input type = "text" name = "middlename" class = "formcon" required = "required" />
						</div>
                        <div class = "form-group">
							<label class="nim">Lastname</label>
							<input type = "text" name = "lastname" class = "formcon" required = "required" />
						</div>
                        <div class = "form-group">
							<label class="nim">Contact</label>
							<input type = "number" min="" max="" name = "contactno" class = "formcon" min="1" max="13" required = "required" />
						</div>
                        <div class = "form-group">
							<label class="nim">Email</label>
							<input type = "email" name = "email" class = "formcon" required = "required" />
						</div>
                        <div class = "form-group">
							<label class="nim">Address</label>
							<input type = "text" name = "address" class = "formcon" required = "required" />
						</div>
						<div class = "form-group">
							<label class="nim">Username</label>
							<input type = "text" name = "username" class = "formcon" required = "required" />
						</div>
						<div class = "form-group">
							<label class="nim">Password</label>
							<input type = "password" name = "password" class = "formcon" required = "required" />
						</div>
						<br />
						<div class = "form-group">
						<button name = "create" class = "butmit"><i class = "glyphicon glyphicon-log-in"> Register</i></button>
							
						</div>
						<p class="loter">Already have an account? <a href="index.php">Sign in</a></p>
					</form>
					<?php require_once 'register_query.php'?>
				
			
		</div>
		<div class = "col-md-4"></div>
	</div>
	<br />
	<br />

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>