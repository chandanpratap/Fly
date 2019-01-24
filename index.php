<!DOCTYPE html>
<html>
<title>FLY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Arial", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}
html {
  scroll-behavior: smooth;
}
/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("banner1.jpg");
  min-height: 100%;
}
.bgimg-2 {
  background-position: center;
  background-size: cover;
  background-image: url("banner2.jpg");
  min-height: 100%;
}
.bgimg-3 {
  background-position: center;
  background-size: cover;
  background-image: url("banner3.jpg");
  min-height: 100%;
}
#container1{
	position: relative;
}

#gray-scale{filter:grayscale(50%)}

#sidebar{
	height:100%;
	width:200px;
	background-color:#fff;
	position:fixed!important;
	z-index:1;
	overflow:auto
}
#block{
	width:100%;
		text-align:left;
		padding:8px 16px;
}
#card{
	box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
}
#animate{
	position:relative;animation:animateleft 0.4s;
}
.top{
	position:fixed;
	width:100%;
	z-index:1;
	top:0;
}

@media (max-width:992px) and (min-width:601px){
	#hide{display:none!important;}

}
.bar .w3-button {
  padding: 16px;
}
}
.f1:hover{ background-color: #3B5998;
  
    }
    .navi-dots li {
  width: 8px;
  height: 8px;
  margin: 25px 0 25px 0;
  background-color: #ffffff;
  border-radius: 50px;
  transition: all 2s ease;
  //box-shadow: 0 0 0 0 #000, 0 0 0 0 #ffffff;
  box-shadow: none; 
}

.navi-dots li:hover {
  box-shadow: 0 0 0 6px #000, 0 0 0 7px #ffffff;
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="top" >
  <div class="bar " id="myNavbar">
    
   
    <div class="w3-right w3-hide-small" style="margin-right: 250px;margin-top: 20px;">
      <a href="#ticket" class="w3-bar-item w3-button" style="color: white"><i class="fa fa-plane"></i><br>TICKET AWAY</a>
      <a href="#fish" class="w3-bar-item w3-button"style="color: white"><i class="fas fa-fish"></i><br>FISHING CAMP</a>
      <a href="#aro" class="w3-bar-item w3-button"style="color: white"><i class="fas fa-coffee"></i><br>THE AROMAS</a>
     <a href="#"><img src="an.png" ></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large " style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#ticket" onclick="w3_close()" class="w3-bar-item w3-button">TICKET AWAY</a>
  <a href="#fish" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#aro" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 container1 gray-scale" id="ticket">
  <div class="container" >
    <div class="row">
    	<h1 style="color: white;font-size: 80px; margin-top: 350px;text-align: center;"><b>A TRAVELS<br>
    YEAR BOOK</b></h1><br><br>
    
    </div>
    <div class="row">
    	<h5 style="text-align: justify;color: white;padding: 5px; ">Read Fodor's reviews to find the best travel<br>
    	destinations, hotels and restaurants. Plan your<br>
    	 trip online with Fodor's. India bristles with a<br>
    	 mind-stirring mix of landscapes and cultural<br>
    	 traditions. Your journey through this<br>
    	 intoxicating country will blaze in your memory<br>
    	long after you've left its shores.</h5>
    </div>
  </div> 
  
</header>







  <div class=" bgimg-2" id="fish">
  	<div class="container">
  	<div class="row" >
  		
  		<div class="col-md-4" style="margin-top: 10px">
  		
  			<img src="f3.jpg" alt="" class="img-responsive">
  		
  		</div>
    
  		<div class="col-md-3" style="margin-top: 10px;margin-left: -55px;"id="mn">
  			<div>
  			<img src="f1.jpg" alt="" class="img-responsive">
  		</div>
  		</div>
  		<div class="col-md-3" style="margin-top: 10px;margin-left: -35px;"id="mn">
  			<div>
  			<img src="f2.jpg" alt="" class="img-responsive">
  		</div>
  		</div>
  		<div class="col-md-2" style="margin-top: 10px">
  			
  		</div>

  		
  	</div>
  	<br><br>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="row">
          <div class="col-md-1.5">
            
          </div>
  				<div class="col-md-3">
           
            <div class=""> 
     <i class="fa fa-cutlery" style="color: white;padding: 28px;" id="circle"><br>
      <span style="margin-left: -10px; font-size: 12px">Soups</span>
     </i>
          
    
</div>


  				</div>
  				<div class="col-md-3">
  					<i class="fas fa-coffee" style="color: white;padding: 28px;" id="circle"><br>
              <span style="margin-left: -23px;font-size: 12px">MainCourses</span>
            </i>
  				</div>
  				<div class="col-md-3">
  					<i class="fa fa-shopping-basket" style="color: white;padding: 28px;" id="circle"><br>
            <span style="margin-left: -20px;font-size: 12px">SideDishes</span></i>
  				</div>
          <div class="col-md-1.5">
            
          </div>
  			</div>
  			<div class="row">
          <div class="col-md-1.5">
            
          </div>
  				<div class="col-md-3">
  					<i class="fa fa-lemon-o" style="color: white;padding: 28px;" id="circle"><br>
            <span style="margin-left: -12px; font-size: 12px">Salads</span></i>
  				</div>
  				<div class="col-md-3">
  					<i class="fas fa-birthday-cake" style="color: white;padding: 28px;" id="circle"><br>
            <span style="margin-left: -5px; font-size: 12px">Pies</span></i>
  				</div>
  				<div class="col-md-3">
  					<i class="fas fa-glass-martini" style="color: white;padding: 28px;" id="circle"><br>
            <span style="margin-left: -12px; font-size: 12px">Desserts</span></i>
  				</div>
          <div class="col-md-1.5">
            
          </div>
  			</div>
  		</div>
  		<div class="col-md-6">
  			<h1 style="color: green; font-size: 35px"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOVE.FOOD.<br>
  				CHEFS. RECIPES &<br>
  				&nbsp;&nbsp;&nbsp;THE FISH IN SEA
  			</b></h1>

  		</div>
  	</div>
  </div>
  </div>
  <style >
  #circle:hover {
        width: 80px;
      height: 80px;
      -webkit-border-radius: 40px ;
      -moz-border-radius: 40px;
      border-radius: 40px;
      background: #ffffff70;
       border: 2px solid white;
    }
  

.demopadding {
  margin:0px auto;
  width:200px;
  text-align:center;

}
.icon {
	position:relative;
	text-align:center;
	width:0px;
	height:0px;
	padding:20px;
	border-top-right-radius: 	20px;
	border-top-left-radius: 	20px;
	border-bottom-right-radius: 20px;
	border-bottom-left-radius: 	20px; 
	-moz-border-radius: 		20px 20px 20px 20px;
	-webkit-border-radius: 		20px 20px 20px 20px;
	-khtml-border-radius: 		20px 20px 20px 20px; 	
	color:#FFFFFF;
}
.icon i {
	font-size:20px;
	position:absolute;
	left:9px;
	top:10px;
}
.icon.social {
	float:left;
	margin:0 5px 0 0;
	cursor:pointer;
	background:white;
	color:#262626;
	transition: 0.5s;
	-moz-transition: 0.5s;
	-webkit-transition: 0.5s;
	-o-transition: 0.5s; 	

}

.icon.social.fb i {
	left:13px;
	top:10px;
	
}
.icon.social.tw i {
	left:11px;
}
.icon.social.in i {
	left:11px;
}
.icon.social.fb:hover{ background-color: #3B5998;
		}
.icon.social.tw:hover{ background-color:#33CCFF;
		}

.icon.social.go:hover{ background-color:#C63D2D;
		}

.icon.social.in:hover{ background-color:#4875B4;
		}

@media(max-width: 600px)
{
	#xyz,#mn{
		margin-left: 0px!important;
	}
  
}

  </style>
<div class="bgimg-3 container-fluid " id="aro">
	 <div class="container" >
	 	<div class="row ">
	 		<h1 style="text-align: center; font-size: 55px; background-color: black; color: white; margin-top: 290px;margin-left: 220px;" id="xyz"><b>LET'S WALK DISTANCE</b></h1>
	 		<h3 style="background-color: black;color: white;margin-left: 220px;"id="xyz">AND CHAT, CONNECT AND COFFEE OVER IT</h3>
	 	</div>
	 </div>
  <br><br><br>
  			<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div class='demopadding'">
	
	  <div class='icon social tw'><i class='fa fa-twitter'></i></div>
  <div class='icon social fb'><i class='fa fa-facebook'></i></div>
  <div class='icon social go'><i class='fa fa-google'></i></div>
  <div class='icon social in'><i class='fa fa-linkedin'></i></div>
</div>

  
  
</div>
  











<!-- Footer -->
<footer style="background-color: #AA2D1D; width: 100%; height: 200px;">
 <span style="text-align: center;"><h6 style="color: white;padding-top: 40px;">10, 3RD FLOOR, PHOENIX CRESCENT, RESTHOUSE ROAD, BANGALORE 560 001<br>
 PHONE:+91 8040986191</h6></span>
 
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
