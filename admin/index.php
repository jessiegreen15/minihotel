<!DOCTYPE html>
<?php require_once "connect.php"?>
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
		max-width: 400px;
		height: 460px;
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
			width: 80%;
			height: 35px;
			margin-top:2%;
			margin-left:9%;
			border-radius: 5px;
			border: 1px solid #2f2f2f;
			font-family: 'noto';
			font-size:15px;
		}
		.nim{
			letter-spacing: 1px;
			font-family: noto;
			font-size: 16px;
			text-transform: uppercase;
			margin-top: 14px;
			margin-left: 8%;
			color:#000;
		}
		.butmit{
			width: 80%;
			height: 40px;
			margin-left:9%;
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
			margin-top: -18%;
			margin-left: -1%;
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
			margin-left:4%;
			font-family: noto;
			font-size: 17px;
			text-transform: uppercase;
		}
		.dec{
			position:relative;
			text-align:center;

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






	</style>

	


	<div class = "continer" style="margin-top:90px">
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
				<div class = "">
					<form method = "POST">
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
							<button name = "login" class = "butmit"><i class = "glyphicon glyphicon-log-in"> Login</i></button>
						</div>
					</form>
					<?php require_once 'login.php'?>
				
			
		</div>
		<div class = "col-md-4"></div>
	</div>	
	<script type="text/javascript">
		window.addEvenntlistener("resive", handleResizeEvent);

		setupMediaQueryListeners();


		funtion handleResizeEvent(event){
			console.group("%cResize Event", "color:red");
			console.log("Window width:", window.innerWidth);
			console.log("Pixel density:", window.devicePixelRatio);

			console.groupEnd();
		}

		function setupMediaQueryListeners(){
			var rules = document.styleSheets[0].cssRules;
			var length = rules.length;

			for(var i = 0; i < length; i++){
				var rule = rules[i];
				var conditionText = (rule.media && rule.media[0]);

				if(!conditionText){
					continue;
				}
				 
				var mediaQueryList = window.matchMedia(conditionText);

				mediaQueryList.addListener(handleMediaQueryChangeEvent);


				console.group("Setting up media listener");
				console.log ("Condition:", conditionText);
				console.log ("Initial match:", mediaQueryList.matches);
				console.groupEnd();
			}
		}
	</script>
	<br />
	<br />
	<?php
	include('footer.php');
	?>
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	

</html>