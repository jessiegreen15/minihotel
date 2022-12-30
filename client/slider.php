<!DOCTYPE html>
<html lang = "en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
<body>
<?php
include('header_menu.php');
?>
<style>
	* {box-sizing: border-box;
margin:0;
border:0;
padding:0;
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
  padding: 2px 5px;
  position: absolute;
  bottom:50%;  
  height:10%;
  width: 80%;
  left:2%;
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

.reserve{ 
  max-width: 1500px;
  position: relative;
  height:70px;
  background: #bababb;
  margin: auto;
}
.resv{
  font-family:'Jost';
  font-size:22px;
  letter-spacing:1px;
  margin-left:13%;
  padding:18px;
  color:#000;
}
.resub{
  background:#5252f4;
  text-align:center;
  padding:10px 40px;
  color:#fff;
  margin-left:80%;
  position:absolute;
  margin-top:-4.5%;
  border-radius:3px;
  text-decoration:none;
}
.resub:hover{
  background:#3b3bf5;
  color:#fff;
  text-decoration:none;
}
.explore{
  max-width: 1500px;
  position: relative;
  margin:auto;
  height:auto;
  background:#c7c7c7;
}
.say{
  width:100%;
  height: 200px;
}
.exl{
text-align:center;
font-size: 40px;
letter-spacing:2px;
font-family:'noto';
font-weight:500;
color:#404040;
padding:40px;

}
.ref{
  font-family:'noto';
  font-size:20px;
  letter-spacing:1px;
  text-align:center;
  position:relative;
  margin-top:-3%;
  color:#5e5e5e;


}
.abt{
  height:500px; 
  max-width: 1500px;
  margin:auto;
  background:#3a3ace;
  position:relative;
}
.hot{
position:relative;
font-size:28px;
letter-spacing:2px;
color:#fff;
font-family:noto;
margin-top:-30%;
margin-left:55%;
}
.dpt{
  max-width:500px;
  text-align:justify;
  text-justify:inter-word;
  position:relative;
  color:#fff;
  margin-top:2%;
  margin-left:55%;
  font-family:sans-serif;
  font-size:16px;

}
.cader{
  width:100%;
  height:auto;
  position:relative;
}
 .card1{
  max-width:500px;
  border-radius:5px;
  height:500px;
  margin-left:9%;
  margin-top:0;
  background:#fff;

}
.card2{
  max-width:500px;
  border-radius:5px;
  height:500px;
  margin-left:55%;
  margin-top:-37.2%;
  background: #fff;

}
.rame{
text-align:center;
font-size:24px;
font-family:noto;
color:#000;
}
.deston{
  text-align:justify;
  text-justify:inter-word;
  font-size:14px;
  font-family:sans-serif;
  max-width:450px;
  margin-left:25px;

}
	</style>
9<div class="w3-content" style="max-width:1300px; margin-top:2%;">

<div class="text">Facilities Designed To Love With Joy.</div>
  <img class="mySlides" src="../images/im2.jpg" style="width:100%;display:none">
  <img class="mySlides" src="../images/im3.jpg" style="width:100%">
  <img class="mySlides" src="../images/im1.jpg" style="width:100%;display:none">

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/im2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/im3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/im1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
    </div>
  </div>
</div>


<br>
<div class="reserve">
  <p class="resv"> Reserve a room for your relaxation!</p>
  <a href="room.php" class="resub">Reserve</a>
</div>
<br>

<div class="abt">
  <img src="../images/IMG_4539.JPG" style="width:700px; height:500px; ">
  <h3 class="hot">Pilar College Mini Hotel</h3>
  <p class="dpt">Lorem Ipsum is simply dummy text of the printing 
    and typesetting industry. Lorem Ipsum has been the industry's 
    standard dummy text ever since the 1500s, when an unknown printer
     took a galley of type and scrambled it to make a type specimen book. 
     It has survived not only five centuries, but also the leap into electronic
      typesetting, remaining essentially unchanged. It was popularised in the 1960s
       with the release of Letraset sheets containing Lorem Ipsum passages, and more
        recently with desktop publishing software like Aldus PageMaker including 
        versions of Lorem Ipsum.</p>
</div>
<br>
<div class="explore">
  <div class="say">
  <h3 class="exl"> Explore our Services</h3>
  <p class="ref">Enjoy family time. Spend more moments together.</p>
  </div>
  <br>
<div class="cader">
  <div class="card1">
    <img src="../images/twinnie.JPG" style="width:500px; height:350px; padding:10px;">
    <h3 class="rame">Deluxe Room</h3>
    <p class="deston">A deluxe product is one that is extra special or of 
      very high quality. A deluxe hotel room is likely to be bigger, more luxurious, 
      and have a great view, if you upgrade </p>

  </div>
  <div class="card2">
  <img src="../images/deluxe.JPG" style="width:500px; height:350px;padding:10px;" >
  <h3 class="rame">Twin Room</h3>
    <p class="deston">A twin rooms can accommodate up to two 
      people in adjacent twin beds (90cm wide). Our twin rooms 
      overlook the courtyard, ensuring the utmost peace and quiet 
      for our guests.  </p>
  </div>
  </div>
  <br>
  <br>
</div>
<br>
<br>

  <br>


</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>
</html>