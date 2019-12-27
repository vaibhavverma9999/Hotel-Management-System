<!DOCTYPE>
<html>
	<head>
		<title>
			The Dream Hotel
		</title>
	</head>
	<style>
		body {
			margin: 0px;
		}
		}
		.border {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 5px;
			padding: 4px;
		}
		ul
		{
  			list-style-type: none;
			background-color: rgba(09,41,98,0.9);
			margin-bottom: 10px;
			color: white;
			margin-top: -38px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		li
		{
			display: inline;
			float: left;
		}
		h1
		{
			background-color: rgba(09,41,98,0.9);
			color: white;
			border: 10px;
			margin-left: -10px;
			margin-right: -10px;
			margin-top: -10px;
			padding: 15px;
			font-size: 60px;
			text-align: center;
			font-family: "Times New Roman";
		}
		h2
		{
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
		}
		a:link, a:visited 
		{
			color: white;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: white;
			color: #094198;
		}
		.reserve_room
		{
			color: #000;
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}

		.headings
		{
			color: black;
			font-family: "Times New Roman";
			text-decoration: none;
		}

		.welcome1
		{
			color: black;
			font-family: "Courier New, monospace";
			font-size: 28px;
		}
		.welcome2
		{
			color: black;
			font-family: Snell Roundhand, cursive;
			font-size: 24px;
			color: teal;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
		.footer {
			background-color: rgba(09,41,98,0.99);
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			padding: 10px,0;
		}
		.foot-text {
			color: #D6FEFF;
			text-align: left;
		}

		* {box-sizing: border-box;}
		body {font-family: Verdana, sans-serif;}
		.mySlides {display: none;}
		img {
			vertical-align: middle;
			background-size: cover;
		}
		.reserve_room:hover
		{
			color: #000;
			border: 10px;
			padding: 14px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: #4AB8F9;
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}
		/* Slideshow container */
		.slideshow-container {
		  max-width: 10000px;
		  position: relative;
		  margin: auto;
		  padding: 0px;
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 30px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-shadow: 4px 4px black;
		  text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: white;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}
	</style>

	<body style="background: #f2f2f2;">
		
		<h1>THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</h1>

		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="#rooms_and_rates">ROOM GALLERY</a></li>
			<li><a href="image_gallery.php">IMAGE GALLERY</a>
			<li style="float: right;"><a href="#contact">Contact Details</a></li>
		</ul>

		<div class="slideshow-container">

		<div class="mySlides fade">
		  <img id="1" src="Images/1.jpg" style="width:100%">
		  <div class="text">ENJOY THE DREAM EXPERIENCE</div>
		</div>

		<div class="mySlides fade">
		  <img id="2" src="Images/2.jpg" style="width:100%">
		  <div class="text">REDEfINE LUXURY</div>
		</div>

		<div class="mySlides fade">
		  <img id="3" src="Images/3.jpg" style="width:100%">
		  <div class="text">SAVOUR EVERY SERVE, EVERY SERVICE</div>
		</div>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
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
		  setTimeout(showSlides, 4500); // Change image every 4.5 seconds
		}
		</script>
		<br><br>
		<a class="reserve_room" href="user_login.php">RESERVE A ROOM</a><br>

		<h2 class="welcome1">Experience a good stay, enjoy fantastic offers</h2><br>
		<h2 class="welcome2">Find our friendly welcoming reception</h2><br>

		<h2 class="r_room">OUR ROOMS</h2><br>
		<div id="rooms_and_rates" class="basic_box">
			<div class="row">
  				<div class="column">
    				<img src="images/1.jpg" alt="Snow" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/2.jpg" alt="Forest" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="images/3.jpg" alt="Mountains" style="width:100%">
  				</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3>Deluxe Room</h3>
  				</div>
  				<div class="column">
    				<h3>Executive Room</h3>
  				</div>
  				<div class="column">
    				<h3>Standard Room</h3>
  				</div>
			</div>
		</div><br>
		<div id="contact" class="footer">
			<hr>
			<h2 class="foot-text">Contact Us!</h2>
			<h3 class="foot-text">Developers: VV, PKK</h3><br>
		</div>
	</body>
</html>