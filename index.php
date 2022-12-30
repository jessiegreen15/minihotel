
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"></head>
    <title>Catchy Design Home</title>
    <style>
            *{
                border:0;
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            .round{
                width:100%;
                height:600px;
                background-repeat:no-repeat;
            }
            .resform{
                width:85%;
                height:100px;
                border:1px solid #f1f1f1;
                position:absolute;
                margin:50px 0 0 85px;
                background:#fff;
                border-radius:5px;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                display:flex;
            }
            .labl{
                width:100%;
                height:30px;
                margin-top:5px;
                position:absolute;
            }
            .til{
                font-size:18px;
                font-weight:200;
                letter-spacing:1px;
                color:#9f9f9f;
                font-family:'Jost';
                margin:10px 0 0 30px;
                padding: 0 100px 0 5px;
            }
            .form{
                width:150px;
                height:30px;
                margin:40px 25px 0 25px;
                border-radius: 5px;
                font-size:16px;
                border:1px solid #b4b3b3;
                font-family:'Jost';
                letter-spacing:1px;
                padding:3px;
                position:relative;
                
            }
          
            .buttoon{
                text-decoration:none;
                height:40px;
                width:120px;
                background:#3a8ef7;
                color:#fff;
                border-radius:3px;
                text-align:center;
                padding:10px;
                margin:30px 0 0 5px;
                font-size:16px;
                font-family:'Jost';
                letter-spacing:1px;
            }
            .buttoon:hover{
                background:#86bcff;
                color: #9f9f9f;
                text-decoration:none;
            }
            .box{
                position:absolute;
                margin:150px 0 0 180px;
                width:70%;
                height:200px;
            }
            .descrp{
              -webkit-text-stroke:1px #34abf7;
                text-align:center;
                font-size:50px;
                font-family: 'Jost';
                font-weight:bolder;
                padding:15px;
                color: #fff;
                letter-spacing:3px;
            }
            .slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}



.reserve{ 
  max-width: 1500px;
  position: relative;
  height:55px;
  background: #8caafd;
  margin: auto;
}
.resv{
  font-family:'Jost';
  font-size:20px;
  letter-spacing:1px;
  margin-left:13%;
  padding:15px;
  color:#fff;
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
  margin:80px 0 0 20px;
  position:relative;
}
.hot{
position:relative;
font-size:20px;
letter-spacing:2px;
color:#aebcc0;
font-family:'jost';
margin-top:-30%;
margin-left:55%;
}
.dpt{
  max-width:500px;
  text-align:justify;
  text-justify:inter-word;
  position:relative;
  color:#aebcc0;
  margin-top:2%;
  margin-left:55%;
  font-family:'jost';
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
.body{
  position:relative;
  max-width:1500px;
  margin:auto;
}
.background{
	background-repeat: no-repeat;
  max-width:1347px;
  background-size:cover;
		}
    .mySlides{
      display:none;
      width:1220px;
      margin:-40px 0 70px -120px;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }    
    .left{
      width:60px;
      height:60px;
      position:absolute;
      margin:-400px 0 0 -150px;
      border-radius:50%;
      font-size:20px;
      background:#34abf7;
      color:#fff;
      opacity: 0.6;
    }
    .right{
      width:60px;
      height:60px;
      position:absolute;
      margin:-400px 0 0 1070px;
      border-radius:50%;
      font-size:20px;
      background:#34abf7;
      color:#fff;
      opacity: 0.6;
    }
    .cover{
      position:absolute;
      height:200px;
      width:1150px;
      margin-left:100px;
      margin-top:-110px;
      background:#34abf7;
      border-radius:5px;
    }
    .abut{
      font-family:'Jost';
      font-size:50px;
      letter-spacing: 1px;
      color:#3a8ef7;
      text-align:center;
      margin-bottom:30px;
    }
    .contil{
      height:300px;
      position:relative;
      margin-top:60px;
      margin-bottom:10px;
    }
    .contil ul{
      position:relative;
    }
    .contil li{
      display:inline-block;
      text-align:center;
      height:300px;
      margin:0 0 0 240px;
    }
    .contil h1{
      color:#34abf7;
      font-size:38px;
      font-family:"jost";
      font-weight:400;
      letter-spacing:1px;
    }
    .contil p{
      width:300px;
      color:#000;
      font-family:"Jost";
      font-size:14px;
      letter-spacing:1px;
      font-weight:200;
    }
    .el{
      font-size:55px;
      color:#0ed7ff;
      max-width:1500px;
      position:relative;
      text-align:center;
      margin-top: 100px;
    }
    .teltel{
      text-align:center;
      font-size:54px;
      font-weight:400;
      margin-bottom:10px;
      font-family:"Jost";
      color:#34abf7;
    }
    .map{
      margin-bottom:100px;
    }
    .conact{
      margin-left:720px;
      margin-top:-475px;
      width:600px;
      height:450px;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
  .cotel{
    font-size: 44px;
    font-style:italic;
    font-family:"Jost";
    font-weight:500;
    letter-spacing:1px;
    color:#34abf7;
    margin: 20px 0 0 50px;
    padding-top:10px;
  }
  .namme{
    border:2px solid #b3b3b3;
    width: 200px;
    height:30px;
    margin:50px 0 0 40px;
    font-style:italic;
    color:#000;
    font-size: 14px;
    padding-left:5px;
    font-family:"Jost";
    letter-spacing:2px;
    border-radius:5px;
    position:relative;
  }
  .emmail{
    position:relative;
    border:2px solid #b3b3b3;
    width: 200px;
    height:30px;
    margin:50px 0 0 40px;
    font-style:italic;
    color:#000;
    font-size: 14px;
    padding-left:5px;
    font-family:"Jost";
    letter-spacing:2px;
    border-radius:5px;
  }
.texel{
  border:2px solid  #b3b3b3;
  position:absolute;
  margin-top: 100px;
  margin-left:-440px;
  width:440px;
  height:200px;
  font-style:italic;
    color:#000;
    font-size: 14px;
    padding-left:5px;
    padding-top:10px;
    font-family:"Jost";
    letter-spacing:2px;
    border-radius:5px;
 }
 .botun{
  height:40px;
  width:150px;
  position:absolute;
  font-size: 18px; 
  font-family:"Jost";
  font-weight:500;
  letter-spacing:1px;
  color:#fff;
  background:#3a8ef7;
  border-radius:2px;
  margin-top:330px;
  margin-left:-430px;
  text-decoration:none;
  padding-left:15px;
  padding-top:5px;
 }
 .botun:hover{
  background:#71a6ff;
  text-decoration:none;
  color:#fff;
 }
    </style>
</head>
<body>
<?php
include('header_menu.php');
?>

    <div class="container-fluid" style="margin:auto; position:relative; max-width:1500px; padding:0; border:0;">
    <div class="back">
    <div class="box">
  <p class="descrp"> Facilities Designed To Love With Joy!!</p>
  </div>
        <img src="images/hotels.jpg" class="round">
       
    </div>
  <div class="cover">
    <div class="resform">
        <div class="labl">
        <label for="head" class="til">Check-in</label>

        <label for="head"  class="til">Check-out</label>

        <label for="head" class="til">Adults</label>

        <label for="head" class="til">Children</label></div>
        <input type="date" class="form" id="head">
        <input type="date" class="form" id="head">
        <input type="number" min="0" max="10" class="form" id="head">
        <input type="number" min="0" max="10" class="form" id="head">

        <a href="" class="buttoon">Search</a>
    </div>
    </div>
<p class="el">|</p>
<div class="abt">
  <h1 class="abut"> About Us</h1>
<?php
include('admin/connect.php');
					$query = $conn->query("SELECT * FROM `aboutus`  WHERE `id` = '1'");
					$about = $query->fetch_array();
				?>
 	<img src = "photo/<?php echo $about['photo']?>" width = "600px" height = "400px" />
  
  <h3 class="hot"><?php echo $about['Title']?></h3>
  <p class="dpt" ><?php echo $about['about']?></p>
</div>
<br>

  <br>
  <br>
</div>

<br>
<div class="contil" style="position:relative; max-width:1500px; margin:auto;">
  <ul>
    <li><img src="images/resort.PNG" style="height:70px; width:70px; margin-left:20px;">
      <h1>Beautiful Rooms</h1>
    <p>We got beautiful rooms that can make you feel comfortable in the time of your stay.</p>
  </li>

    <li><img src="images/event.PNG" style="height:70px; width:70px; margin-left:20px;">
      <h1>Function Hall</h1>
    <p>We got spacious function halls where events are held.</p>
  </li>

  </ul>

</div>
<br>
  <br>

  <h1 class="teltel">Photos</h1>

  <div class="w3-content w3-display-container" style="margin-top:40px;">
<div class="mySlides">
  <img src="images/im2.jpg" style="width:100%; height:650px;">
</div>

<div class="mySlides">
  <img src="images/im3.jpg" style="width:100%; height:650px;">
</div>

<div class="mySlides">
  <img src="images/im1.jpg" style="width:100%; height:650px;">
</div>
  
  <button class="left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="right" onclick="plusDivs(1)">&#10095;</button>
</div>
        </div>

        <div class="map" style="position:relative; max-width:1500px; margin:auto;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8510004038844!2d122.06248901426771!3d6.908413720486675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3250418b171c00db%3A0xc02da8c5df5b3174!2sPilar%20College%20of%20Zamboanga%20City%2C%20Inc.!5e0!3m2!1sen!2sph!4v1669195325890!5m2!1sen!2sph"
           width="600" 
           height="450" 
           style="border:2px solid #34abf7; border-radius:2px; margin-left: 30px; box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;"
            allowfullscreen="" 
            loading="lazy"
             referrerpolicy="no-referrer-when-downgrade" 
          >
        
        </iframe>

        <div class="conact">
          <h1 class="cotel"> Contact Info</h1>
          <input type="text" class="namme" placeholder="Name">
          <input type="email" class="emmail" placeholder="Email">
          <textarea class="texel"> Message</textarea>
          <a href="" class="botun"> Send Message</a>
        </div>
        </div>

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


</html>