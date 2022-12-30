<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
<style>
* {box-sizing: border-box;
margin:0;
border:0;
padding:0;
}
.navi{
    width:100%;
    height:20%;
    color:#fff;
    opacity:.8;
}
.sil{
    width:100px;
    height:100px;
    position:absolute;
    bottom:88%;
    left:3%;
    border-radius:50%;
}
.brad{
			font-family:noto;
			text-transform:uppercase;
			color: #fff;
			font-size: 30px;
            text-shadow: -1px 1px 0 #4f6dc6,
                          1px 1px 0 #4f6dc6,
                         1px -1px 0 #4f6dc6,
                        -1px -1px 0 #4f6dc6;
			letter-spacing:2px;
            bottom:90%;
            left:11%;
			white-space:nowrap;
			position:absolute;
		}
        .nav-pills{
            position:absolute;
            bottom:91%;
            left:40%;
        }
        .nav-pills i{
			margin-right:3px;
			color:#4ca1ff;
		}
        .nav-pills a{
            color:#000;
        }

body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #fff;
  font-size: 54px;
  letter-spacing:2px;
  font-family:noto;
  padding: 10px 14px;
  position: absolute;
  bottom:50%;  
  height:10%;
  width: 80%;
  background:#1a75ff;
  border-bottom-right-radius:70px;
  opacity:0.7;
}


/* The dots/bullets/indicators */
.dot {
  height: 10px;
  width: 10px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  bottom:30px;
  position:relative;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
  

}


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


</style>
</head>
<body>


<div class="slideshow-container">


<div class="mySlides fade">
  <img src="../images/im2.jpg" style="width:100%">
  <div class="text">Facilities Designed To Love With Joy.</div>
</div>

<div class="mySlides fade">
  <img src="../images/im3.jpg" style="width:100%">
  <div class="text">Facilities Designed To Love With Joy.</div>
</div>

<div class="mySlides fade">
  <img src="../images/im4.jpg" style="width:100%">
  <div class="text">Facilities Designed To Love With Joy.</div>
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<nav  class = "navi">
			<div class = "navbar-header">
			<img src="../images/seal.png" class="sil">
				<p class = "brad" >pczc mini hotel </p>
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
    <li><a href = "room_reserve.php"><i class = "glyphicon glyphicon-bed"></i>Room</a></li>
    <li><a href = "event_reserve.php"><i class = "glyphicon glyphicon-star"></i>Event</a></li>


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
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i>Profile</a>
					<ul class="dropdown-menu">
                    <li><a href="account.php"><i class = "glyphicon glyphicon-user"></i> <?php echo $user;?></a></li>
                    <li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Sign out</a></li>
					</ul>
				</li>
    </li>	
		</ul>
    </br>
    </nav>
    


</div>
<br>



<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1000); // Change image every 2 seconds
}
</script>

</body>
</html> 
