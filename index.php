<DOCTYPE! html>
<head>
	<title>test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	 <link rel="stylesheet" type="text/css" href="styles/carousel2.css">
	<link rel="stylesheet" type="text/css" href="styles/footer.css">
  <style type="text/css">
    html{
            scroll-behavior: smooth;
        }
  </style>
	
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
							<li><a href="game.php">Game</a></li>
							<li><a href="gallery.php">Gallery</a></li>
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
  <p>

    <?php

$filename = "php/paragraph1.txt";

@$filehandle = fopen($filename,"r") or die("Unable to open file!");

echo @$filecontent = fread($filehandle,filesize($filename));

@fclose($filehandle);
?>

  </p>

  </div>
</div>

<div class="mySlides fade">
  
  <img src="images/222.jpg" style="width:100%" id="img">
  <div class="text"><p class="textcaption">Dell XPS</p>
  <p>
    The XPS 2-in-1’s fan-less design allows a slimmer,
    sleeker form, limits heat and enables silent operation.
    It’s a beautifully mobile powerhouse that lets you work
     and play anywhere.
    <?php

    $teksti1 = "The XPS 2-in-1’s fan-less design allows a slimmer,
    sleeker form, limits heat and enables silent operation."; 

   $file2 = "php/paragraph2.txt";

   @$filehandle2 = fopen($file2,"w") or die("Unable to open file!");

   fwrite($filehandle2, $teksti1);
   
   $teksti2 = "It’s a beautifully mobile powerhouse that lets you work and play anywhere.";
  
   fwrite($filehandle2, $teksti2);

   @fclose($filehandle2);

?>
  
</p>
  </div>
</div>

<div class="mySlides fade">
  
  <img src="images/333.png" style="width:100%" id="img">
  <div class="text"><p class="textcaption">iPad Pro</p>
  <p>
        <?php
try {
    $fh = fopen("php/paragraph3.txt", "r");
    if (! $fh) {
        throw new Exception("Could not open the file!");
    }
}
catch (Exception $e) {
    echo "Error (File: ".$e->getFile().", line ".
          $e->getLine()."): ".$e->getMessage();
}
?>

</p>
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
        <a class="prev2" onclick="plusPart(-1)">&#10094;</a>
        <a class="next2" onclick="plusPart(1)">&#10095;</a>
      </div>
    </div>
  </div>
	<!--RECENT SHOW-->

	<div class="container4">
        <div class="part1 fade">
        <div class="mslides">
          <div style="height: 100%;width:100%;">
          	<img src="images/img1.jpg" style="height: 350px;width: 100%;">
          	      <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
          </div>
     
        </div>
        <div class="mslides">
        	 <div style="height: 100%;width:100%;"><img src="images/img2.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
        <div class="mslides">
        	 <div style="height: 100%;width:100%;"><img src="images/img4.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
      </div>
      <div class="part1 fade">
        <div class="mslides2">
        	 <div style="height: 100%;width:100%;"><img src="images/img5.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
        <div class="mslides2">
        	 <div style="height: 100%;width:100%;"><img src="images/img6.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
        <div class="mslides2">
        	 <div style="height: 100%;width:100%;"><img src="images/img7.jpg" style="height: 350px;width: 100%;"></div>
        	 <div class="overlay">
    				<div class="text2">Hello World</div>
  				</div>	
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php 
    include 'footer.php';
    ?> 


	
</body>
<script type="text/javascript" src="js/mainSlider.js"></script>
<script type="text/javascript" src="js/carousel2.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</html>