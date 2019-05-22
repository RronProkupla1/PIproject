<DOCTYPE! html>
<head>
	<title>test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	
</head>
<body>

	<!-- HEADER -->

	<header class="header">
		<div class="container">
			<div class="logo">
				<img src="images/logo9.png" style="width:314px;height:100px;">
			</div>
				<nav class="nav">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="properties.html">Properties</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
				</nav>
			<div class="signin">
				<a href="SignUp.php">Sign up</a>
			</div>
			<div class="login">
				<a href="login.php">Log in</a>
			</div>
		</div>	
	</header>

	<!-- MAIN SLIDER -->
	

	<div class="slideformat" style="font-family: Verdana, sans-serif;">

<div class="mySlides fade">
  
  <img src="images/111.jpg" style="width:100%" id="img">
  <div class="text"><p class="textcaption">iPhone XS</p>
  <p>Super Retina in two sizes — including the largest display ever on an iPhone.
  	 Even faster Face ID. The smartest, most powerful chip in a smartphone. 
	 And a breakthrough dual-camera system with Depth Control.
 	 iPhone XS is everything you love about iPhone. Taken to the extreme.</p>
  </div>
</div>

<div class="mySlides fade">
  
  <img src="images/222.jpg" style="width:100%" id="img">
  <div class="text"><p class="textcaption">Dell XPS</p>
  <p>The XPS 2-in-1’s fan-less design allows a slimmer,
   sleeker form, limits heat and enables silent operation. 
It’s a beautifully mobile powerhouse that lets you work and play anywhere.</p>
  </div>
</div>

<div class="mySlides fade">
  
  <img src="images/333.png" style="width:100%" id="img">
  <div class="text"><p class="textcaption">iPad Pro</p>
  <p>
It’s all new, all screen, and all powerful.
 Completely redesigned and packed with the most advanced technology,
 it will make you rethink what iPad is capable of.</p>
  </div>
</div>

<div class="mySlides fade">
  
    <img src="images/444.png" style="width:100%" id="img">
  <div class="text"><p class="textcaption">Apple Watch</p>
  <p>The largest Apple Watch display yet. New electrical heart sensor.
   Re-engineered Digital Crown with haptic feedback.
    Entirely familiar, yet completely new,
     Apple Watch Series 4 resets the standard for what a watch can be.</p>
  </div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>



</div>
<div style="text-align:center" class="dots">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>  
</div>




<!-- RECENT AND BUTTONS -->

	<div class="recent">
		<div class="container3">
			<div>
				<div class="section_title">Recent releases</div>
				<div class="section_subtitle">Search your dream phone</div>
			</div>
			<div style="height: 100;width: 67%"></div>
			<div>
				<a class="prev2">&#10094;</a>
				<a class="next2">&#10095;</a>
			</div>
		</div>
	</div>

	<!--RECENT SHOW-->

	




	
</body>
<script type="text/javascript" src="js/mainSlider.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</html>